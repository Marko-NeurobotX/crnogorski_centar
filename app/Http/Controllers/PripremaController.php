<?php

namespace App\Http\Controllers;

use App\Models\Priprema;
use Illuminate\Http\Request;

class PripremaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Priprema::all(); 
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Priprema $priprema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priprema $priprema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Priprema $priprema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priprema $priprema)
    {
        //
    }
}
