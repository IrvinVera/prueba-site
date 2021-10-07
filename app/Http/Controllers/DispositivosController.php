<?php

namespace App\Http\Controllers;
use App\Models\Dispositivo;

use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    
    public function obtenerTodosDispositivos(){

        $lista_dispositivos = Dispositivo::all();

        return response()->json(['title' => '¡Bien!','status' => 'success','message' => 'Datos obtenidos','data' => $lista_dispositivos]);

    }

    public function crearDispositivo(Request $request){
// dd($request->s_marca);
        $title = "";
        $status = "";
        $message = "";
        $creacion_exitosa = false;

        $validated = $request->validate([
            's_marca' => 'required',
            's_modelo' => 'required',
            's_version_sistema_operativo' => 'required',
            's_numero_serie' => 'required',
            's_mac_address' => 'required',
            's_observaciones' => 'required',
            'b_activo' => 'required',
        ]);

        if($validated){
            
            $nuevo_dispositivo = new Dispositivo();

            $nuevo_dispositivo->s_marca = $request->s_marca;
            $nuevo_dispositivo->s_modelo = $request->s_modelo;
            $nuevo_dispositivo->s_version_sistema_operativo = $request->s_version_sistema_operativo;
            $nuevo_dispositivo->s_numero_serie = $request->s_numero_serie;
            $nuevo_dispositivo->s_mac_address = $request->s_mac_address;
            $nuevo_dispositivo->s_observaciones = $request->s_observaciones;
            $nuevo_dispositivo->b_activo = intval($request->b_activo);
    
            try {
                
                $nuevo_dispositivo->save();
                $title = "¡Bien!";
                $status = "Success";
                $message = "El registro se creo corretamente";
    
            } catch (\PDOException $excepcion) {
                
                $title = "Guardado incorreto";
                $status = "Error";
                $message = "El registro no se pudo crear correctamente";
    
            }
    


        }
     
        return response()->json(['title' => $title,'status' => $status,'message' => $message]);

    }

    public function editarDispositivo(Request $request){

       

        $title = "";
        $status = "";
        $message = "";

        $validated = $request->validate([
            's_marca' => 'required',
            's_modelo' => 'required',
            's_version_sistema_operativo' => 'required',
            's_numero_serie' => 'required',
            's_mac_address' => 'required',
            's_observaciones' => 'required',
            'b_activo' => 'required',
            'id_dispositivo' => 'required',
        ]);

        if($validated){

            try {

                $dispositivo = Dispositivo::find(intval($request->id_dispositivo));
    
                if($dispositivo){
                    
                    $dispositivo->s_marca = $request->s_marca;
                    $dispositivo->s_modelo = $request->s_modelo;
                    $dispositivo->s_version_sistema_operativo = $request->s_version_sistema_operativo;
                    $dispositivo->s_numero_serie = $request->s_numero_serie;
                    $dispositivo->s_mac_address = $request->s_mac_address;
                    $dispositivo->s_observaciones = $request->s_observaciones;
                    $dispositivo->b_activo = intval($request->b_activo);
                    
                    $dispositivo->save();
        
                    $title = "¡Bien!";
                    $status = "Success";
                    $message = "El registro se modificó corretamente";
    
                }else{
                   
                    $title = "No se modificó ningun registro";
                    $status = "Warning";
                    $message = "No existe ningún registro con el ID proporionado";
    
                }
    
    
            } catch (\PDOException $excepcion) {
                $title = "Modificación incorreta";
                $status = "Error";
                $message = "El registro no se pudo modifiar correctamente";
    
            }

            
        }

        return response()->json(['title' => $title,'status' => $status,'message' => $message]);

    }



}
