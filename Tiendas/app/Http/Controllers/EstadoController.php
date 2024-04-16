<?php

namespace App\Http\Controllers;

use App\Models\estado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::all();
        return view("estado.index", compact("estados"));
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
        $estados = new Estado;
        $estados->nombre = $request->input("nombre");
        $estados->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_estado)
    {
        $estados = Estado::find( $id_estado );
        $estados->nombre = $request->input("nombre");
        $estados->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_estado)
    {
        $estados = Estado::find( $id_estado );
        $estados->delete();
        return redirect()->back();
    }
}
