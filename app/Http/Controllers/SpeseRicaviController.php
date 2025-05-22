<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorespeseRicaviRequest;
use App\Models\immobili;
Use App\Models\causaliSpeseRicavi;
Use App\Models\SpeseRicavi;

class SpeseRicaviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($immobile_id)
    {
        $totale = 0;
        $movimenti = SpeseRicavi::where('immobile_id', $immobile_id)->orderBy('data', 'desc')->get();
        foreach($movimenti as $movimento){
            $segno = CausaliSpeseRicavi::where('causale', $movimento->causale)->value('segno');
            $movimento->segno = $segno;
            $descrizione = CausaliSpeseRicavi::where('causale', $movimento->causale)->value('descrizione');
            $movimento->descrizione = $descrizione;
            if($segno=='+'){
                $totale += $movimento->valore;
            }
            else{
                $totale -= $movimento->valore;
            }
        }

        return view('speseRicavi.index', ['immobile_id'=>$immobile_id, 'movimenti'=>$movimenti, 'totale'=>$totale]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($immobile_id, $segno)
    {
        $user_id = auth()->user()->id;
        $causali = CausaliSpeseRicavi::where('user_id', $user_id)->where('segno', $segno)->get();
        return view('speseRicavi.create', ['immobile_id'=>$immobile_id,'causali'=>$causali, 'segno'=>$segno]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorespeseRicaviRequest $request, $immobile_id)
    {
        $validated = $request->validated();
        $user_id = auth()->user()->id;
        $validated['user_id'] = $user_id;
        $validated['immobile_id'] = $immobile_id;
        SpeseRicavi::create($validated);
        return redirect()->back()->with('success', 'Movimento inserito correttamente.');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

}
