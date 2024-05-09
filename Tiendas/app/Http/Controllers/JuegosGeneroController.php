<?php

namespace App\Http\Controllers;

use App\Models\juegos_genero;
use App\Models\juego;
use App\Models\genero;

use Illuminate\Http\Request;

class JuegosGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genjuegos = juegos_genero::all();
        $juegos = juego::all();
        $generos = genero::all();
        return view ('categorias.generos',compact('juegos','genjuegos','generos'));
    }

    /**
 * Display the juegos by specified genero.
 */

    public function getJuegosGenerosByGenero($generoId)
    {
        // Obtener los registros de juegos_generos correspondientes al género dado
        $juegosGeneros = juegos_genero::where('id_genero', $generoId)->get();

        // Retornar los registros como respuesta JSON
        return response()->json($juegosGeneros);
    }


    public function getJuegoById($juegoId)
    {
        $juego = juego::find($juegoId);

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
    public function show(juegos_genero $juegos_genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(juegos_genero $juegos_genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, juegos_genero $juegos_genero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(juegos_genero $juegos_genero)
    {
        //
    }
}
