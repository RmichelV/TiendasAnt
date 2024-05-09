<?php

use App\Http\Controllers\JuegosGeneroController;
use App\Http\Controllers\JuegosPlataformaController;
use App\Http\Controllers\TemplateController;
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
use App\Http\Controllers\JuegosCarritoController;
use App\Http\Controllers\CarritoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('pago',function () {
    return view('metodop.metodo_p');
});


Route::resource('templates', TemplateController::class);
Route::resource('roles',RolController::class);
Route::resource('plataformas',PlataformaController::class);
Route::resource('generos', GeneroController::class);
Route::resource('estados',EstadoController::class);
Route::resource('metodos',MetodoDePagoController::class);
Route::resource('users',UserController::class);
Route::resource('tiendas',TiendaController::class);
Route::resource('juegos',JuegoController::class);
Route::resource('/',WelcomeController::class);
Route::resource('carritos',JuegosCarritoController::class);
Route::resource('lcarritos',CarritoController::class);

Route::resource('genjuegos',JuegosGeneroController::class);
Route::get('/genjuegos/{generoId}/juegos-generos', [JuegosGeneroController::class, 'getJuegosGenerosByGenero']);

Route::resource('platjuegos',JuegosPlataformaController::class);

Route::get('/home', function () {
    return view('Home'); // este hay que modificar
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
