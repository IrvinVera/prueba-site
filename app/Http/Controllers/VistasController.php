<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

class VistasController extends Controller
{

    public function mostraVistaDispositivos(){

        return view('Dispositivos.vista-mostrar-dispositivos');

    }

    public function mostrarVistaEditarDispositivos(Request $request){

        $dispositivo = Dispositivo::find(intval($request->id));

        return view('Dispositivos.vista-editar-dispositivos')->with('dispositivo',$dispositivo);

    }

}
