{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	{{-- <li class="breadcrumb-item">
		<a href="{{ route('admin.inicio') }}"><i class="fas fa-address-card"></i> Servicios</a>
	</li> --}}
@endsection

@section('contenido')
	<div class="container-fluid mbottom16">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
                        {{-- {{ dd($detservicio->colaborador->nombres) }} --}}
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Colaborador: <strong> {{ $detservicio->colaborador->numdoc.'-'.$detservicio->colaborador->nombres }}</strong>
                             / Edad: <strong>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}} años</strong>
                        </h2>
                    </div>
					<div class="inside">
						{{-- {!! Form::open(['url'=>'/admin/categoria/add/'.$module]) !!} --}}
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('departamento', 'Departamento:') !!}
								{!! Form::text('departamento', $detservicio->colaborador->depart->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('provincia', 'Provincia:') !!}
								{!! Form::text('provincia', $detservicio->colaborador->prov->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ubigeo', 'Ubigeo:') !!}
								{!! Form::text('ubigeo', $detservicio->colaborador->ubig->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('domicilio', 'Domicilio:') !!}
								{!! Form::text('domicilio', $detservicio->colaborador->domicilio, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('telefono', 'Telefono:') !!}
								{!! Form::text('telefono', $detservicio->colaborador->telefono, ['class'=>'form-control', 'disabled']) !!}
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('residencia', 'Residencia:') !!}
								{!! Form::text('residencia', $detservicio->colaborador->residencia = 1 ? 'SI' : 'NO', ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tieresi', 'Tiempo Residencia:') !!}
								{!! Form::text('tieresi', $detservicio->colaborador->tieresi, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('lugnac', 'Lugar Nacimiento:') !!}
								{!! Form::text('lugnac', $detservicio->colaborador->lugnac, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('estciv_id', 'Estado Civil:') !!}
								{!! Form::text('estciv_id', $detservicio->colaborador->estciv->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('gradinst_id', 'Grado Instrucción:') !!}
								{!! Form::text('gradinst_id', $detservicio->colaborador->gradinst->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
        
		<div class="row mtop16 mbottom16">
			<div class="col-md-12">
                {!! Form::model($detservicio, ['route'=>['admin.servicios.updatevaluacion',$detservicio], 'method'=> 'put','files' => true]) !!}
				<div class="panelprin shadow">
                    <div class="headercontent">
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Médica
                        </h2>
                        <ul>
                            @can('admin.medica.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                            @endcan
                            <li>
                                <a class="btn btn-convertir" href="{{ route('admin.reportes.listado',$detservicio) }}"datatoggle="tooltip" data-placement="top" title="Imprimir Evaluación Médica"><i class="fas fa-print"></i></a>
                                {{-- <a href="#" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Imprimir Evaluación Médica">
                                    <i class="fas fa-print"></i>
                                </a> --}}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
                        <div class="row">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-medico" role="tablist">
                                        @if ($pagina==1)
                                        <a class="nav-item nav-link @if($pagina==1) active @endif " id="nav-puesto-tab" data-toggle="tab" href="#nav-puesto" role="tab" aria-controls="nav-puesto" aria-selected="true">Información Puesto</a>
                                        <a class="nav-item nav-link" id="nav-medica-tab" data-toggle="tab" href="#nav-medica" role="tab" aria-controls="nav-medica" aria-selected="true">Evaluación Médica</a>                                            
                                        @endif
                                        @can('admin.laboratorio.index')
                                        <a class="nav-item nav-link @if($pagina==3) active @endif " id="nav-laboratorio-tab" data-toggle="tab" href="#nav-laboratorio" role="tab" aria-controls="nav-laboratorio" aria-selected="true">Laboratorio</a>                                            
                                        @endcan
                                        @can('admin.informes.index')
                                        <a class="nav-item nav-link" id="nav-informe-tab" data-toggle="tab" href="#nav-informe" role="tab" aria-controls="nav-informe" aria-selected="true">Informe</a>
                                        @endcan
                                        @can('admin.medica.edit')
                                        <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                                        @endcan
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade @if($pagina==1) show active @endif" id="nav-puesto" role="tabpanel" aria-labelledby="nav-puesto-tab">
                                        @include('admin.servicios.evaluacion.puesto')
                                    </div>
                                    <div class="tab-pane fade" id="nav-medica" role="tabpanel" aria-labelledby="nav-medica-tab">
                                        @include('admin.servicios.evaluacion.medica')
                                    </div>
                                    <div class="tab-pane fade @if($pagina==3) show active @endif" id="nav-laboratorio" role="tabpanel" aria-labelledby="nav-laboratorio-tab">
                                        @include('admin.servicios.evaluacion.laboratorio')
                                    </div>
                                    <div class="tab-pane fade" id="nav-informe" role="tabpanel" aria-labelledby="nav-informe-tab">
                                        @include('admin.servicios.evaluacion.informe')
                                    </div>
                                    <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                        @include('admin.servicios.evaluacion.resultado')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @can('admin.medica.edit')
        <div class="row mbottom16">
            <div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title">Ingresar Otras Evaluaciones:</h2>
                        <ul>
                            {{-- @can('admin.clientes.create') --}}
                            <li>
                                {{-- <a href="{{ route('admin.clientes.create') }}">
                                    Agregar
                                </a> --}}
                            </li>
                            {{-- @endcan --}}
                        </ul>
                    </div>
                    <div class="inside">
                        {!! Form::open(['route'=>'admin.examens.addotros','files' => true]) !!}
                        <div class="row">
                            <div class="col-md-2">
                                <label class="lsinmargen" for="fecha">Fecha:</label>
                                {!! Form::hidden('id',$detservicio->id) !!}
                                {!! Form::date('fecotr', null, ['class'=>'form-control','id'=>'fecotr']) !!}
                            </div>
                            <div class="col-md-3">
                                <label class="lsinmargen" for="tipotr">Tipo:</label>
                                {!! Form::text('tipotr', null, ['class'=>'form-control mayuscula','id'=>'tipotr','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4">
                                <label class="lsinmargen" for="concotr">Conclusión:</label>
                                {!! Form::text('concotr', null, ['class'=>'form-control mayuscula','id'=>'concotr','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                <label class="lsinmargen" for="imgotr" class="mtop16">Examen:</label>
                                <div class="custom-file">
                                    {!! Form::file('imgotr', ['class'=>'custom-file-input','id'=>'imgotr', 'accept'=>'image/*, .pdf']) !!}
                                    <label class="custom-file-label" for="imgotr" data-browse="Buscar"></label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                {!! Form::submit('Agregar', ['class'=>'btn btn-convertir mtop23']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <div class="row">
                            <table class="table table-hover table-bordered table-estrecha">
                                <thead>
                                    <tr>
                                        <th width='10%'>FECHA</th>
                                        <th width='30%'>TIPO</th>
                                        <th width='50%'>CONCLUSIÓN</th>
                                        <td width='10%'></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detservicio->otros as $otro)
                                        <tr>
                                            <td>{{ $otro->fecha }}</td>
                                            <td>{{ $otro->tipo }}</td>
                                            <td>{{ $otro->conclusion }}</td>
                                            <td>
                                                <div class="opts">
                                                    <a href="{{ url('/examenes/'.$otro->ruta) }}" class="btn btn-outline-info" target="_blank" datatoggle="tooltip" data-placement="top" title="Visualizar documento">
                                                        <i class="fas fa-notes-medical"></i>
                                                    </a>
                                                    <form action="{{ route('admin.examens.destroyotr',$otro) }}" method="POST" class="formulario_eliminars">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        @endcan
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')
<script>
    var url_global='{{url("/")}}';
	$(document).ready(function(){
        $('#colaborador_id').select2({
            placeholder:"Ingrese 4 dígitos del Documento o Nombre",
            minimumInputLength: 4,
            ajax:{
                url: "{{ route('admin.busquedas.colaborador') }}",
                dataType:'json',
                delay:250,
                processResults:function(response){
                    return{
                        results: response
                    };
                },
                cache: true,
            }
        });

        $('#btnfirma').click(function(){
            $('#firma').click();
        });
        $('#btnfoto').click(function(){
            $('#foto').click();
        });
        $('#btnhuella').click(function(){
            $('#huella').click();
        });
        

        $('#area_id').select2({
            placeholder:"Área"
        });
        $('#puesto_id').select2({
            placeholder:"Ocupación"
        });

        $('.cieselect').select2({
            placeholder:"CIE10 | Ingrese 3 dígitos del Código o Descripción",
            minimumInputLength: 3,
            ajax:{
                url: "{{ route('admin.busquedas.cie10') }}",
                dataType:'json',
                delay:250,
                processResults:function(response){
                    return{
                        results: response
                    };
                },
                cache: true,
            }
        });        

    });
    function destroycol(){
        // e.preventDefault();
            Swal.fire({
            title: 'Está Seguro de Eliminar el Registro?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.value) {
               this.submit();
            }
            })
    }
    // $(document).ready(function(){
    //     $('#btnfirma').click(function(){
    //         $('#firma').click();
    //     });
    // });
    document.getElementById('firma').addEventListener('change',cambiarImagen);
    document.getElementById('foto').addEventListener('change',cambiarFoto);
    document.getElementById('huella').addEventListener('change',cambiarHuella);
    

    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('imgfirma').setAttribute('src',event.target.result);
        }
        reader.readAsDataURL(file);
    }
    function cambiarFoto(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('imgfoto').setAttribute('src',event.target.result);
        }
        reader.readAsDataURL(file);
    }
    function cambiarHuella(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('imghuella').setAttribute('src',event.target.result);
        }
        reader.readAsDataURL(file);
    }
    
</script>
@endsection