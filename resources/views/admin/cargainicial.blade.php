{{-- @extends('adminlte::page') --}}
@extends('admin.master')

@section('title', 'Parámetros del Sistema')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin') }}"><i class="fas fa-cogs"></i> Parámetros del Sistema</a>
	</li>
@endsection

{{-- @section('content_header')
    <h1>Inicio</h1>
@stop --}}

{{-- @section('content')
    <p>Contenido.</p>
@stop --}}
@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-cogs"></i><strong> Parámetros del Sistema</strong></h2>
						<ul>
							{{-- @if(kvfj(Auth::user()->permissions,'terapia_add')) --}}
							{{-- <li>
								<a class="btn btn-agregar mt-2" href="{{ url('/admin/terapia/add') }}">
									Agregar Evaluación
								</a>
                            </li> --}}
							{{-- @endif --}}
						</ul>
					</div>
					<div class="inside">
                        {!! Form::open(['route'=>'admin.cargainicial']) !!}
                        <label class="h2 mb-3">DATOS DE LA EMPRESA:</label>
                        <div class="row">
                            <div class="col-md-2 form-group">
								{!! Form::label('ruc', 'RUC') !!}
								{!! Form::text('ruc', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-10 form-group">
								{!! Form::label('razsoc', 'Razón Social:') !!}
								{!! Form::text('razsoc', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
								{!! Form::label('apitoken', 'Token API(RENIEC/SUNAT):') !!}
								{!! Form::text('apitoken', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-4 form-group">
								{!! Form::label('dominio', 'Dominio(www):') !!}
								{!! Form::text('dominio', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-2 form-group">
								{!! Form::label('periodo', 'Periodo(Mes Año):') !!}
								{!! Form::text('periodo', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
								{!! Form::label('direccion', 'Dirección:') !!}
								{!! Form::text('direccion', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-2 form-group">
								{!! Form::label('telefono', 'Teléfono:') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-2 form-group">
								{!! Form::label('celular', 'Celular:') !!}
								{!! Form::text('celular', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                            <div class="col-md-4 form-group">
								{!! Form::label('email', 'E-mail:') !!}
								{!! Form::text('email', null, ['class'=>'form-control','autocomplete'=>'off']) !!}	
							</div>
                        </div>
                        {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mtop16']) !!}
						{!! Form::close() !!}
                        
						
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
        $(document).ready(function(){
            document.getElementById('razsoc').addEventListener("blur",function(){
                this.value = this.value.toUpperCase();
            });
            document.getElementById('direccion').addEventListener("blur",function(){
                this.value = this.value.toUpperCase();
            });
        });
    </script>
@stop