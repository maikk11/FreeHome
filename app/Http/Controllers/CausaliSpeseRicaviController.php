<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorestanzeRequest;
use App\Models\immobili;

class CausaliSpeseRicaviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('causaliSpeseRicavi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestanzeRequest $request, $immobile_id)
    {

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
