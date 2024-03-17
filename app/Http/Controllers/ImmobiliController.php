<?php

namespace App\Http\Controllers;

use App\Models\immobili;
use App\Http\Requests\StoreimmobiliRequest;
use App\Http\Requests\UpdateimmobiliRequest;

class ImmobiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('immobili.immobili');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreimmobiliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(immobili $immobili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(immobili $immobili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateimmobiliRequest $request, immobili $immobili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(immobili $immobili)
    {
        //
    }
}
