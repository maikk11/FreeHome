<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinquiliniRequest;
use App\Http\Requests\UpdateimmobiliRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\inquilini;

class InquiliniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquilini = DB::table('inquilini')->get();
        return view('inquilini.index', ['inquilini' => $inquilini]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinquiliniRequest $request)
    {

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
