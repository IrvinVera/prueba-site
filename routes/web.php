<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Dispositivos.vista-mostrar-dispositivos');
});

Route::get('vista-mostar-dispositivos', function () {
    return view('Dispositivos.vista-mostrar-dispositivos');
});

Route::get('vista-nuevo-dispositivo', function () {
    return view('Dispositivos.vista-registrar-dispositivo');
});

Route::get('vista-editar-dispositivo/{id}','VistasController@mostrarVistaEditarDispositivos')->name('vista-editar-dispositivo'); 
