<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('obtener-dispositivos', 'DispositivosController@obtenerTodosDispositivos')->name('obtener-dispositivos');

Route::post('crear-dispositivo', 'DispositivosController@crearDispositivo')->name('crear-dispositivo');

Route::post('editar-dispositivo', 'DispositivosController@editarDispositivo')->name('editar-dispositivo');