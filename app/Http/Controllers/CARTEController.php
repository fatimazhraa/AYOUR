<?php

namespace App\Http\Controllers;

use App\Models\CARTE;
use Illuminate\Http\Request;

class CARTEController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartes = CARTE::all();
        return view('home', ['cartes' => $cartes]);
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
    public function show(CARTE $cARTE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CARTE $cARTE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CARTE $cARTE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CARTE $cARTE)
    {
        //
    }
}
