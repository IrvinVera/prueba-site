@extends('template')
@section('page-css')

<link rel="stylesheet" type="text/css" href="{{ asset('Personal/css/cssErrorUsuario.css') }}">

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">

                <form id="formRegistroNuevoDispositivo" >
                    {{ csrf_field() }}
                    
                    <div class="container">
                    <button type="button" class="botonRegresar btn btn-primary btn-sm"  style="float: right;">
                        <i  style="font-size:18px;"></i>
                        Regresar 
                    </button>
                        <h4>Datos del nuevo dispositivo</h4>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre">Marca</label>
                                <input type="text" class="form-control form-control-rounded" name="s_marca" id="s_marca" type="text" maxlength="50" data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellidoPaterno">Modelo </label>
                                <input class="form-control form-control-rounded" name="s_modelo" id="s_modelo" maxlength="30" type="text" value="" required data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellidoMaterno">Version del sistema operativo</label>
                                <input class="form-control form-control-rounded" name="s_version_sistema_operativo" id="s_version_sistema_operativo" maxlength="30" type="text" value="" data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="correo">Numero de serie</label>
                                <input class="form-control form-control-rounded" name="s_numero_serie" id="s_numero_serie" maxlength="100" type="text" data-validation="text" required/> 
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="usuario">MAC Address</label>
                                <input class="form-control form-control-rounded" name="s_mac_address" id="s_mac_address" maxlength="50" type="text" value="" required data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="usuario">Activo</label>
                                <select class="form-control form-control-rounded" id="b_activo" name="b_activo" style="width:100%;" required>
                                <option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="usuario">Observaciones</label>
                             <textarea style="text-transform: uppercase" class="form-control form-control-rounded textArea" id="s_observaciones" name="s_observaciones" maxlength="255"></textarea>      
                             </div>

                        </div>
                    </div>
                
                    <div class="col-md-6" style="margin-top:20px;" >
                        <button type="submit" style="float:right" class="btn btn-primary" id="btnGuardar">Guardar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection

@section('page-js')

<script src="{{ asset('Plugins/validator/jquery.validate.min.js')}}" ></script> 
<script src="{{asset ('Personal/js/registrar-nuevo-dispositivo.js')}}"></script>

@endsection