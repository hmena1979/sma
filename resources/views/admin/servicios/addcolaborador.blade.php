{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.index') }}"><i class="fas fa-address-card"></i> Servicios</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-address-card"></i> Servicios</h2>
                    </div>
					<div class="inside">
						{{-- {!! Form::open(['url'=>'/admin/categoria/add/'.$module]) !!} --}}
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('evaluacion', 'Evaluación:') !!}
								{!! Form::text('evaluacion', $servicio->eval->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha', 'Fecha:') !!}
								{!! Form::text('fecha', $servicio->fecha, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('cliente_id', 'Cliente:') !!}
								{!! Form::text('cliente_id', $servicio->cliente->razsoc, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('glosa', 'Referencia:') !!}
								{!! Form::text('glosa', $servicio->glosa, ['class'=>'form-control', 'disabled']) !!}
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mtop16">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="inside">
                        {!! Form::open(['route'=>['admin.servicios.storecolaborador',$servicio]]) !!}
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('colaborador_id', 'Colaborador:') !!}
                                {!! Form::select('colaborador_id',[],null,['class'=>'custom-select', 'placeholder'=>'Cliente']) !!}
                            </div>
                            <div class="col-md-7">
                                <div class="row">                                    
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('area_id', 'Área:') !!}
                                        {!! Form::select('area_id',$area,'1',['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('puesto_id', 'Ocupación:') !!}
                                        {!! Form::select('puesto_id',$puesto,'1',['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('ocuactual', 'Ocupación Actual:') !!}
                                        {!! Form::text('ocuactual', null, ['class'=>'form-control mayuscula','maxlength'=>'30']) !!}
                                    </div>
                                </div>
                                
                            </div>                            
                            <div class="col-md-1">
                                {!! Form::submit('Agregar', ['class'=>'btn btn-convertir mt-4']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-responsive-md table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th width="30%">Colaborador</th>
                                        <th width="20%">Área</th>
                                        <th width="20%">Ocupación</th>
                                        <th width="20%">Ocupación Actual</th>
                                        <th width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($servicio->detservicios as $det)
                                    <tr>
                                        <td>{{ $det->colaborador->nombres }}</td>
                                        <td>{{ $det->area->nombre }}</td>
                                        <td>{{ $det->puesto->nombre }}</td>
                                        <td>{{ $det->ocuactual }}</td>
                                        <td>
                                            <div class="opts">
                                                <a href="{{ route('admin.servicios.destroycolaborador',$det) }}" datatoggle="tooltip" data-placement="top" title="Eliminar" onclick="return confirm('Desea eliminar el registro?')"><i class="fas fa-trash-alt"></i></a>
                                                {{-- <form action="{{ route('admin.servicios.destroycolaborador',$det) }}" method="POST" class="formulario_eliminar">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form> --}}
                                                {{-- <button type="button" class="btn btn-convertir" id='btndestroycol' title="Eliminar" onclick="destroycol('{{ $det->id }}');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button> --}}
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

        $('#area_id').select2({
            placeholder:"Área"
        });
        $('#puesto_id').select2({
            placeholder:"Ocupación"
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
</script>
@endsection