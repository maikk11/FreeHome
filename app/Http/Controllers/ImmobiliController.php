<?php

namespace App\Http\Controllers;

use App\Models\immobili;
use App\Models\inquilini;
use App\Models\stanze;
use App\Http\Requests\StoreimmobiliRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use App\Models\storico_inquilini;

class ImmobiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_id = $request->user()->id;
        $immobili = Immobili::where('user_id', $user_id)->get();
        return view('immobili.immobili', ['immobili' => $immobili]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('immobili.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreimmobiliRequest $request)
    {
        $user_id = auth()->id();
        $validated = $request->validated();
        $validated['user_id'] = $user_id;
        Immobili::create($validated);
        return redirect()->back()->with('success', 'immobile inserito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $immobile = Immobili::where('id', $id)->get()->first();
        $inquilini = Inquilini::where('immobile_id',$id)->get();
        return view('immobili.immobile', ['immobile' => $immobile], ['inquilini' => $inquilini]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $immobile = Immobili::where('id', $id)->first();
        return view('immobili.edit', ['immobile' => $immobile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $immobile = Immobili::where('id', $id)->first();
        $request->validate([
            'provincia' => 'required|string|max:255',
            'comune' => 'required|string|max:255',
            'indirizzo' => 'required|string|max:255',
            'civico' => 'required|integer',
        ]);
        $immobile->update($request->only(['provincia', 'comune', 'indirizzo', 'civico']));
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stanze::where('immobile_id', $id)->delete();
        Immobili::where('id', $id)->delete();
        return redirect()->back();
    }

    public function uscita($inquilino_id, $immobile_id, $data)
    {
        $immobile = Immobili::findOrFail($immobile_id);
        $immobile->decrementaLocaliAffittati();
        $inquilino = Inquilini::findOrFail($inquilino_id);
        $data = $inquilino->uscita($data);
        Storico_inquilini::create([
            'nome'=>$inquilino->nome,
            'cognome'=>$inquilino->cognome,
            'carta_identità' => $inquilino->carta_identità,
            'codice_fiscale' => $inquilino->codice_fiscale,
            'data_nascita' => $inquilino->data_nascita,
            'provincia_nascita' => $inquilino->provincia_nascita,
            'comune_nascita' => $inquilino->comune_nascita,
            'provincia_residenza' => $inquilino->provincia_residenza,
            'comune_residenza' => $inquilino->comune_residenza,
            'email' => $inquilino->email,
            'numero_telefono' => $inquilino->numero_telefono,
            'data_subentro' => $inquilino->data_subentro,
            'data_uscita' => $data,
            'stanza_id' => $inquilino->stanza_id,
        ]);
        return redirect()->back();
    }
}
