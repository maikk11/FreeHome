<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecausaliSpeseRicaviRequest;
use Illuminate\Http\Request;
use App\Http\Requests\StorestanzeRequest;
use App\Models\immobili;
use App\Models\causaliSpeseRicavi;

class CausaliSpeseRicaviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $causali = causaliSpeseRicavi::where('user_id', $user_id)->get();
        return view('causaliSpeseRicavi.index', ['causali'=>$causali]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $segni = CausaliSpeseRicavi::segni();
        return view('causaliSpeseRicavi.create', ['segni'=>$segni]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecausaliSpeseRicaviRequest $request)
    {
        $validated = $request->validated();
        $user_id = $request->user()->id;
        $validated['user_id'] = $user_id;
        CausaliSpeseRicavi::create($validated);
        return redirect()->back()->with('success', 'Causale inserita correttamente.');
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
        causaliSpeseRicavi::where('id', $id)->delete();
        return redirect()->back();
    }

}
