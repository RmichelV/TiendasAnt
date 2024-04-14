<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MetodoDePagoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('roles',RolController::class);
Route::resource('plataformas',PlataformaController::class);
Route::resource('generos', GeneroController::class);
Route::resource('estados',EstadoController::class);
Route::resource('metodos',MetodoDePagoController::class);
Route::resource('users',UserController::class);
Route::resource('tiendas',TiendaController::class);
Route::resource('juegos',JuegoController::class);
Route::resource('/',WelcomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard'); // este hay que modificar
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
