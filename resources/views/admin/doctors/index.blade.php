{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Doctores')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin/doctors/all') }}"><i class="fas fa-user-md"></i> Doctores</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-user-md"></i> Doctores</h2>
						<ul>
							{{-- @if(kvfj(Auth::user()->permissions,'usuario_add')) --}}
							@can('admin.doctors.create')
							<li>
								<a href="{{ route('admin.doctors.create') }}">
									Agregar registro
								</a>
							</li>
							@endcan
							<li>
								<a href="#">
									Filtrar <i class="fas fa-angle-down"></i></a>
								<ul class="shadow">
									<li><a href="{{ url('/admin/doctors/1') }}"><i class="fas fa-eye"></i> Activos</a></li>
									<li><a href="{{ url('/admin/doctors/2') }}"><i class="fas fa-eye-slash"></i> No Activos</a></li>
									<li><a href="{{ url('/admin/doctors/all') }}"><i class="fas fa-globe"></i> Todos</a></li>
								</ul>
							</li>
							{{-- @endif --}}
							{{--  
							<li>
								<a href="#" id='btn_search'>
									Buscar <i class="fas fa-search"></i>
								</a>
							</li>
							--}}
						</ul>
					</div>
					<div class="inside">
						<table id= "grid" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="35%">Nombre</th>
									<th width="25%">Especialidad</th>
									<th width="30%">Activo</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($doctors as $doctor)
								<tr>
									<td>{{ $doctor->nombre }}@if($doctor->activo==2) <i class="fas fa-eye-slash"></i>@endif</td>
									<td>{{ $doctor->especialidad }}</td>
									<td>{{ ($doctor->activo==1)?"Si":"No" }}</td>
									<td>
										<div class="opts">
											@can('admin.doctors.edit')
											<a class="" href="{{ route('admin.doctors.edit',$doctor) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
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

@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}