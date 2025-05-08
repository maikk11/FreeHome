<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinquiliniRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use App\Models\inquilini;
use App\Models\immobili;

class InquiliniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquilini = inquilini::get();
        return view('inquilini.index', ['inquilini' => $inquilini]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        return view('inquilini.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinquiliniRequest $request, string $id_immobile)
    {
        $user_id = auth()->id();
        $validated = $request->validated();
        $validated['user_id'] = $user_id;
        if ($id_immobile !== '0') {
            $validated['immobile_id'] = $id_immobile;
            $immobile = Immobili::findOrFail($id_immobile);
            $immobile->incrementaLocaliAffittati();
        }
        //$validated['immobile_id'] = $id_immobile;
        Inquilini::create($validated);
        //$immobile = Immobili::findOrFail($id_immobile);
        //$immobile->incrementaLocaliAffittati();
        return redirect()->back()->with('success', 'Dati inquilino inseriti correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inquilino = Inquilini::where('id', $id)->get()->first();
        return view('inquilini.inquilino', ['inquilino' => $inquilino]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inquilino = Inquilini::where('id', $id)->first();
        return view('inquilini.edit', ['inquilino' => $inquilino]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inquilini $inquilino)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'carta_identità' => 'required|string|max:25',
            'codice_fiscale' => 'required|string|max:25',
            'data_nascita' => 'required|date',
            'provincia_nascita' => 'required|string|max:50',
            'comune_nascita' => 'required|string|max:50',
            'provincia_residenza' => 'required|string|max:50',
            'comune_residenza' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:inquilini,email,' . $inquilino->id,
            'numero_telefono' => 'required|string|max:20',
            'data_subentro' => 'required|date',
            'data_uscita' => 'nullable|date|after_or_equal:data_subentro',
            'contratto_lavorativo' => 'required|string|max:255',
            'numero_stanza' => 'nullable|integer',
        ]);

        $inquilino->update($request->only(['nome', 'cognome', 'carta_identità', 'codice_fiscale', 'data_nascita', 'provincia_nascita', 'comune_nascita', 'provincia_residenza', 'comune_residenza', 'email', 'numero_telefono', 'data_subentro', 'data_uscita', 'contratto_lavorativo', 'numero_stanza']));

        return view('inquilini.inquilino', ['inquilino' => $inquilino]);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inquilini::where('id', $id)->delete();
        return redirect()->back();
    }
}
