<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinquiliniRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\inquilini;

class InquilinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $validated['immobile_id'] = $id_immobile;
        Inquilini::create($validated);
        return redirect()->back()->with('success', 'Dati inseriti correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }
}
