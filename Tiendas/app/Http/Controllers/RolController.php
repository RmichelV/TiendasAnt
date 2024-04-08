<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Rol::all();
        return view("rol.index", compact("roles"));
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
        $roles = new Rol;
        $roles->nombre = $request->input("nombre");
        $roles->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_rol)
    {
        $roles = Rol::find($id_rol);
        $roles ->nombre = $request->input("nombre");
        $roles ->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_rol)
    {
        $roles = Rol::find($id_rol);
        $roles->delete();
        return redirect()->back();
    }
}
