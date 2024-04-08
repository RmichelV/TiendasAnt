<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\rol;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $roles = rol::all();
        return view("user.index", compact("users","roles"));
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
        $users = new User;
        $users->name = $request->input("nombres");
        $users->last_name = $request->input("apellidos");
        $users->birthday = $request->input("fechan");
        $users->email = $request->input("correo");
        // $users->email_verified_at = $request->input("correov");
        $users->password= $request->input("pssword");
        $users->id_rol= $request->input("rol");
        $users->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $users->name = $request->input("nombres");
        $users->last_name = $request->input("apellidos");
        $users->birthday = $request->input("fechan");
        $users->email = $request->input("correo");
        $users->password= $request->input("pssword");
        $users->id_rol= $request->input("rol");
        $users->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }
}
