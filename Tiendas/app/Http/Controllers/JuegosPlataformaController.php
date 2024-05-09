<?php

namespace App\Http\Controllers;

use App\Models\juegos_plataforma;
use App\Models\juego;
use App\Models\plataforma;
use Illuminate\Http\Request;


class JuegosPlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platjuegos = juegos_plataforma::all();
        $juegos = juego::all();
        $plataformas = plataforma::all();
        return view ('categorias.plataformas',compact('juegos','platjuegos','plataformas'));
    }

    public function getJuegosGenerosByGenero($id_plataforma)
    {
        // Obtener los registros de juegos_generos correspondientes al género dado
        $juegosPlataformas = juegos_plataforma::where('id_plataforma', $id_plataforma)->get();

        // Retornar los registros como respuesta JSON
        return response()->json($juegosPlataformas);
    }


    public function getJuegoById($id_juego)
    {
        $juego = juego::find($id_juego);

        return response()->json($juego);
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
    public function show(juegos_plataforma $juegos_plataforma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(juegos_plataforma $juegos_plataforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, juegos_plataforma $juegos_plataforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(juegos_plataforma $juegos_plataforma)
    {
        //
    }
}
