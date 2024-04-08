<?php

namespace App\Http\Controllers;

use App\Models\genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = genero::all();
        return view("genero.index", compact("generos"));
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
        $generos = new Genero;
        $generos->nombre = $request->input("nombre");
        $generos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_genero)
    {
        $generos = genero::find($id_genero);
        $generos->nombre = $request->input("nombre");
        $generos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_genero)
    {
        $generos = genero::find($id_genero);
        $generos->delete();
        return redirect()->back();
    }
}
