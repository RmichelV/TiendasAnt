<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\juegos_carrito;
use App\Models\juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtener el ID del usuario autenticado
    $user_id = Auth::id();

    // Obtener el carrito asociado al usuario autenticado
    $carrito = Carrito::where('user_id', $user_id)->first();

    // Verificar si se encontró el carrito
    if ($carrito) {
        // Obtener los IDs de los juegos asociados al carrito del usuario autenticado
        $ids_juegos_en_carrito = $carrito->juegos->pluck('id_juego')->toArray();

        // Obtener los juegos asociados a los IDs obtenidos
        $juegos_en_carrito = Juego::whereIn('id_juego', $ids_juegos_en_carrito)->get();
    } else {
        // No se encontró el carrito asociado al usuario autenticado
        $juegos_en_carrito = [];
    }

    return view("carrito.index", compact("juegos_en_carrito"));
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
    public function show(carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carrito $carrito)
    {
        //
    }
}
