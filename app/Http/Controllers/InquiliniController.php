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
        $validated['immobile_id'] = $id_immobile;
        Inquilini::create($validated);
        $locali_affittati = Immobili::where('id', $id_immobile)->value('locali_affittati');
        $locali_affittati = $locali_affittati ?? 0;
        $locali_affittati+=1;
        Immobili::where('id', $id_immobile)->update(['locali_affittati' => $locali_affittati]);
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
    public function destroy($id)
    {
        Inquilini::where('id', $id)->delete();
        return redirect()->back();
    }
}
