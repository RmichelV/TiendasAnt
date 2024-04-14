<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\Request;
use App\Models\juego;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = juego::all();
        return view("welcome", compact("juegos"));
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
    public function show(welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(welcome $welcome)
    {
        //
    }
}
