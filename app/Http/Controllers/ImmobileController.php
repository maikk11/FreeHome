<?php

namespace App\Http\Controllers;

use App\Models\immobili;
use App\Http\Requests\StoreimmobiliRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImmobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $immobile = DB::table('immobili')->where('id', $id)->get()->first();
        return view('immobili.immobile', ['immobile' => $immobile]);
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
    public function destroy(string $id)
    {
        DB::table('immobili')->where('id', $id)->delete();
        return redirect()->back();
    }
}
