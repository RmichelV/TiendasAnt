<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PlataformaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('roles',RolController::class);
Route::resource('plataformas',PlataformaController::class);

