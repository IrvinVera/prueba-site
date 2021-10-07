@extends('template')
@section('page-css')

<link rel="stylesheet" type="text/css" href="{{ asset('Personal/css/cssErrorUsuario.css') }}">

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">

                <form id="formEditarDispositivo" >
                    {{ csrf_field() }}
                    
                    <div class="container">

                        <h4>Datos del nuevo dispositivo</h4>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="Marca">Marca</label>
                                <input type="text" class="form-control form-control-rounded"  value="{{$dispositivo->s_marca}}" name="s_marca" id="s_marca" type="text" maxlength="50" data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Modelo">Modelo </label>
                                <input class="form-control form-control-rounded" value="{{$dispositivo->s_modelo}}" name="s_modelo" id="s_modelo" maxlength="30" type="text" value="" required data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="version">Version del sistema operativo</label>
                                <input class="form-control form-control-rounded" value="{{$dispositivo->s_version_sistema_operativo}}" name="s_version_sistema_operativo" id="s_version_sistema_operativo" maxlength="30" type="text" value="" data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="correo">Numero de serie</label>
                                <input class="form-control form-control-rounded" value="{{$dispositivo->s_numero_serie}}" name="s_numero_serie" id="s_numero_serie" maxlength="100" type="text" data-validation="text" required/> 
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="MAC">MAC Address</label>
                                <input class="form-control form-control-rounded" value="{{$dispositivo->s_mac_address}}" name="s_mac_address" id="s_mac_address" maxlength="50" type="text" value="" required data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25"/>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="activo">Activo</label>
                                <select class="form-control form-control-rounded" value="{{$dispositivo->b_activo}}" id="b_activo" name="b_activo" style="width:100%;" required>
                                <option>
                                <option value="1" selected>Si</option>
                                <option value="0">No</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Observaciones">Observaciones</label>        
                                 <input class="form-control form-control-rounded" value="{{$dispositivo->s_observaciones}}" name="s_observaciones" id="s_observaciones" maxlength="50" type="text" value="" required data-validation="custom required" data-validation-regexp="^([a-z-A-Z\s-ZñÑáéíóúÁÉÍÓÚ]+)$" data-validation="length" data-validation-length="max25"/> 
                            </div>

                        </div>
                    </div>
                    <input type="text" id="ruta" value="{{url('/')}}" style="display:none;!important">
                    <input type="text" value="{{$dispositivo->id_dispositivo}}" name="id_dispositivo" id="id_dispositivo" style="display:none;!important">
                    
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
<script src="{{asset ('Personal/js/editar-dispositivo.js')}}"></script>

@endsection