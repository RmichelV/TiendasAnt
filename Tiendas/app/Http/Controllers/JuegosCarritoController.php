<?php

namespace App\Http\Controllers;

use App\Models\juegos_carrito;
use App\Models\User;
use App\Models\carrito;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuegosCarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user_id = Auth::id();

        // Obtener el carrito asociado al usuario (si existe)
        $carrito = Carrito::where('user_id', $user_id)->first();

    
        // dd($carrito);

        
        if (!$carrito) {
            return redirect()->back()->with('error', 'No se encontró el carrito asociado al usuario');
        }
    
        // Obtener el ID del juego desde la solicitud
        $juego_id = $request->input('juego_id');
    
        // Crear una nueva entrada en la tabla juegos_carritos
        $juegos_carritos = new juegos_carrito();

        // Asignar el id del carrito en lugar del objeto completo
        $juegos_carritos->id_carrito = $carrito->id_carrito;

        $juegos_carritos->id_juego = $juego_id;
        $juegos_carritos->save();
        // Redireccionar de vuelta a donde sea necesario
        return redirect()->back()->with('success', 'Juego agregado al carrito exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(juegos_carrito $juegos_carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(juegos_carrito $juegos_carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_juegos_carrito)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id_juego)
    {
        // Obtener el ID del usuario autenticado
        $user_id = Auth::id();

        // Obtener el carrito asociado al usuario
        $carrito = Carrito::where('user_id', $user_id)->first();

        // Verificar si se encontró el carrito
        if (!$carrito) {
            return redirect()->back()->with('error', 'No se encontró el carrito asociado al usuario.');
        }

        // Buscar el juego en el carrito
        $juego_carrito = juegos_carrito::where('id_carrito', $carrito->id)
            ->where('id_juego', $id_juego)
            ->first();

        // Verificar si se encontró el juego en el carrito
        if ($juego_carrito) {
            // Eliminar el juego del carrito
            $juego_carrito->delete();
            return redirect()->back()->with('success', 'Juego eliminado del carrito exitosamente.');
        } else {
            return redirect()->back()->with('error', 'El juego no está en el carrito.');
        }
    }

}
