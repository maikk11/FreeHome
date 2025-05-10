<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorestanzeRequest;
use App\Models\stanze;

class StanzeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($immobile_id)
    {
        $stanze = Stanze::where('immobile_id', $immobile_id)->get();
        return view('stanze.index', ['stanze' => $stanze]);
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
        $request->validate([
            'nome_stanza' => 'required|string|max:255',
            'prezzo_affitto' => 'required|integer',
        ]);
        $stanza->update($request->only(['nome_stanza', 'prezzo_affitto']));
        return $this->index($stanza->immobile_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stanze::where('id', $id)->delete();
        return redirect()->back();
    }

    public function uscita($inquilino_id, $immobile_id, $data)
    {

    }
}
