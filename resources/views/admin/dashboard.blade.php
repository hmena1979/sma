{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title', 'Inicio')

{{-- @section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin/terapias') }}"><i class="fas fa-procedures"></i> Accesos</a>
	</li>
@endsection --}}

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
						<h2 class="title"><i class="fas fa-home"></i><strong> Inicio</strong></h2>
						<ul>
							{{-- @if(kvfj(Auth::user()->permissions,'terapia_add')) --}}
							<li>
								{{-- <a class="btn btn-agregar mt-2" href="{{ route('admin.permisosfaltantes') }}"> --}}
								<a class="btn btn-agregar mt-2" href="{{ route('admin.permisosfaltantes') }}">
									Agregar Permisos
								</a>
                            </li>
							{{-- @endif --}}
						</ul>
					</div>
					<div class="inside">

					</div>				
				</div>
			</div>

		</div>		
	</div>
@endsection

