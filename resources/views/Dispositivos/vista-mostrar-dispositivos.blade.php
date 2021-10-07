@extends('template')

@section('page-css')
    <link href="{{ asset('Plugins/DataTable/css/datatables2.min.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="col-md-12">
    <div class="row justify-content-center my-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <input type="hidden" class="valor" value="">
                    <button type="button" class="agregarDispositivo btn btn-primary btn-sm"  style="float: right;">
                        <i  style="font-size:18px;"></i>
                        Agregar Dispositivo
                    </button>
                </div>
                <div class="card-body">
                <div class=" table-responsive">
                <table class="table table-small-font table-bordered table-striped" id="tablaDispositivos">
							<thead>
                            <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Sistema Operativo</th>
                                    <th scope="col">Numero de serie</th>
                                    <th scope="col">MAC Address</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Activo</th>
                                    <th scope="col">Acciones</th>
							</thead>
							<tbody id="cuerpoTabla">
											
							<tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('page-js')

    <script src="{{asset ('Plugins/DataTable/js/datatables.min.js')}}"></script>
    <script src="{{asset ('Personal/js/vista-mostrar-dispositivos.js')}}"></script>
    @endsection                                   