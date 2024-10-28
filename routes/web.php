<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ControladorCliente::class, 'control']);
Route::get('/clientes', [ControladorCliente::class, 'control']);
Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);

