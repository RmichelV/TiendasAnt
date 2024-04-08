<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EstadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('roles',RolController::class);
Route::resource('plataformas',PlataformaController::class);
Route::resource('generos', GeneroController::class);
Route::resource('estados',EstadoController::class);

