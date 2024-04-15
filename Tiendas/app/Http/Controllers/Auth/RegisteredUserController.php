<?php

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\carrito;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'birthday' => ['required','date'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rol'=>['numeric'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name'=> $request->last_name,
            'birthday'=> $request->birthday,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_rol'=>3,
        ]);

        // Crear un nuevo carrito asociado al usuario
        $carrito = new Carrito();
        $carrito->user_id = $user->id;
        $carrito->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
