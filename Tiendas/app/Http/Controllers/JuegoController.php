<?php

namespace App\Http\Controllers;

use App\Models\juego;
use App\Models\tienda;
use App\Models\plataforma;
use App\Models\genero;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = juego::all();
        $tiendas = tienda::all();
        $plataformas=plataforma::all();
        $generos = genero::all();
        return view("juego.index", compact("juegos","tiendas","plataformas","generos"));
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
        // dd($request->all());
        $idTienda = auth()->user()->tienda->id_tienda;//nueva linea

        $juegos = new juego();
        $juegos->nombre = $request->input("nombre");
        $juegos->descripcion = $request->input("descripcion");
        $juegos->cantidad_de_jugadores = $request->input("cantidad");
        $juegos->precio = $request->input("precio");
        $juegos->stock = $request->input("stock");
        $juegos->imagen = $request->input("imagen");
        $juegos->id_tienda = $idTienda;

        $juegos->save();
        // Obtener los géneros seleccionados del formulario
        $plataformasSeleccionadas = $request->input('plataformas');

        // Asociar los géneros seleccionados con el juego recién creado
        $juegos->plataformas()->attach($plataformasSeleccionadas);

        $generosSeleccionados = $request->input('generos');

        // Asociar los géneros seleccionados con el juego recién creado
        $juegos->generos()->attach($generosSeleccionados);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id_juego)
    {
        $idTienda = auth()->user()->tienda->id_tienda;

        $juegos = juego::find($id_juego);
        $juegos->nombre = $request->input("nombre");
        $juegos->descripcion = $request->input("descripcion");
        $juegos->cantidad_de_jugadores = $request->input("cantidad");
        $juegos->precio = $request->input("precio");
        $juegos->stock = $request->input("stock");
        $juegos->imagen = $request->input("imagen");
        $juegos->id_tienda = $idTienda;
        $juegos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_juego)
    {
        $juegos = juego::find($id_juego);
        $juegos->delete();
        return redirect()->back();
    }
}
