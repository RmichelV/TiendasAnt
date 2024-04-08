<?php

namespace App\Http\Controllers;

use App\Models\plataforma;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plataformas = Plataforma::all();
        return view("Plataforma.index", compact("plataformas"));
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
        $plataformas = new Plataforma;
        $plataformas->nombre=$request->input("nombre");
        $plataformas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(plataforma $plataforma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(plataforma $plataforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_plataforma)
    {
        $plataformas= Plataforma::find($id_plataforma);
        $plataformas->nombre=$request->input("nombre");
        $plataformas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_plataforma)
    {
        $plataformas = Plataforma::find($id_plataforma);
        $plataformas->delete();
        return redirect()->back();
    }
}
