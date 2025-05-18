<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinquiliniRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use App\Models\inquilini;
use App\Models\immobili;
use App\Models\stanze;

class InquiliniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id=0)
    {
        if($id==0){
            $inquilini = Inquilini::where('user_id', auth()->id())->get();
        }
        else{
            $inquilini = Inquilini::whereNull('immobile_id')
            ->where('user_id', auth()->id())
            ->get();

        }
        $provenienza = 0;
        return view('inquilini.index', ['inquilini' => $inquilini, 'immobile_id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $stanze = Stanze::where('immobile_id', $id)->get();
        $province = Immobili::province();
        return view('inquilini.create', ['id'=>$id, 'stanze'=>$stanze, 'province'=>$province]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinquiliniRequest $request, string $id_immobile)
    {
        $user_id = auth()->id();
        $validated = $request->validated();
        $validated['user_id'] = $user_id;
        $validated['immobile_id'] = null;
        if ($id_immobile != 0) {
            $validated['immobile_id'] = $id_immobile;
            $immobile = Immobili::findOrFail($id_immobile);
            if($immobile->locali_affittati==NULL){
               Immobili::where('id', $id_immobile)->update(['locali_affittati' => 1]);
            }
            else{
                $immobile->incrementaLocaliAffittati();
            }
        }
        else{
            $validated['stanza_id'] = null;
        }
        Inquilini::create($validated);
        return redirect()->back()->with('success', 'Dati inquilino inseriti correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $provenienza)
    {
        $inquilino = Inquilini::where('id', $id)->get()->first();
        return view('inquilini.inquilino', ['inquilino' => $inquilino, 'provenienza'=>$provenienza]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inquilino = Inquilini::where('id', $id)->first();
        $province = Immobili::province();
        return view('inquilini.edit', ['inquilino' => $inquilino, 'province'=>$province]);
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
