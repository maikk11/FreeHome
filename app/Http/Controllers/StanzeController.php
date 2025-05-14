<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorestanzeRequest;
use App\Models\stanze;
use App\Models\immobili;

class StanzeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($immobile_id)
    {
        $stanze = Stanze::where('immobile_id', $immobile_id)->get();
        return view('stanze.index', ['stanze' => $stanze, 'immobile_id'=>$immobile_id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('stanze.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestanzeRequest $request, $immobile_id)
    {
        $validated = $request->validated();
        $validated['immobile_id'] = $immobile_id;
        Stanze::create($validated);
        $immobile = Immobili::findOrFail($immobile_id);
        if($immobile->locali_affittabili==NULL){
            Immobili::where('id', $immobile_id)->update(['locali_affittabili' => 1]);
        }
        else{
            $immobile->incrementaLocali();
        }
        return redirect()->back()->with('success', 'Stanza inserita correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stanza = Stanze::where('id', $id)->first();
        return view('stanze.edit', ['stanza' => $stanza]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stanze $stanza)
    {
        $stanza->update($request->only(['nome_stanza', 'prezzo_affitto', 'metri_quadri', 'flag_balcone']));
        return $this->index($stanza->immobile_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $immobile_id = Stanze::where('id', $id)->value('immobile_id');
        $immobile = Immobili::findOrFail($immobile_id);
        if($immobile->locali_affittabili>0){
            $immobile->decrementaLocali();
        }
        Stanze::where('id', $id)->delete();
        return redirect()->back();
    }

    public function uscita($inquilino_id, $immobile_id, $data)
    {

    }
}
