<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $profilo = User::where('id', $id)->first();
        return view('user.profilo', ['profilo' => $profilo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profilo = User::where('id', $id)->first();
        return view('user.edit', ['profilo' => $profilo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profilo)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $profilo->id,
            'birth' => 'required|date',
        ]);

        $profilo->update($request->only(['name', 'surname', 'email', 'birth']));
        return view('user.profilo', ['profilo' => $profilo]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profilo = User::findOrFail($id);
        $profilo->elimina();
        return redirect()->route('index');
    }
}
