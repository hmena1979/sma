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
						<ul>
							<li>
                                <div class="periodo">
                                    {!! Form::open(['route'=>'admin.servicios.change']) !!}
                                    <div class="input-group tamvar">
                                        {!! Form::select('mes',getMeses(),substr($periodo,0,2),['class'=>'custom-select']) !!}
                                        {!! Form::text('año', substr($periodo,2,4), ['class'=>'form-control','maxlength'=>'4','autocomplete'=>'off']) !!}
                                        <div class="input-group-append">
                                            {!! Form::submit('Mostar', ['class'=>'btn btn-convertir']) !!}
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </li>
							@can('admin.servicios.create')
							<li>
								<a href="{{ route('admin.servicios.create') }}">
									Agregar registro
								</a>
							</li>
							@endcan
							
							{{-- <li>
								<a class="mt-1" href="#">
									Filtrar <i class="fas fa-angle-down"></i></a>
								<ul class="shadow">
									<li><a href="{{ url('/admin/usuarios/1') }}"><i class="fas fa-eye"></i> Activos</a></li>
									<li><a href="{{ url('/admin/usuarios/2') }}"><i class="fas fa-eye-slash"></i> No Activos</a></li>
									<li><a href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-globe"></i> Todos</a></li>
								</ul>
							</li> --}}
						</ul>
					</div>
					<div class="inside">
						<table id= "grid" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="10%">Fecha</th>
									<th width="15%">Evaluación</th>
									<th width="35%">Cliente</th>
									<th width="30%">Ubicación</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($servicios as $servicio)
								{{-- {{ dd($servicio->eval()) }} --}}
								<tr>
									<td>{{ $servicio->fecha }}</td>
									<td>{{ $servicio->eval->nombre }}</td>
									<td>{{ substr($servicio->cliente->razsoc,0,42) }}</td>
									<td>{{ $servicio->ubicacion }}</td>
									<td>
										<div class="opts">
											@can('admin.servicios.edit')
											<a class="" href="{{ route('admin.servicios.edit',$servicio) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
											<a class="" href="{{ route('admin.servicios.addcolaborador',$servicio) }}"datatoggle="tooltip" data-placement="top" title="Asignar Colaboradores"><i class="far fa-user"></i></a>
											@can('admin.servicios.destroy')
											<form action="{{ route('admin.servicios.destroy',$servicio) }}" method="POST" class="formulario_eliminars">
												@csrf
												@method('delete')
												<button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
													<i class="fas fa-trash-alt"></i>
												</button>
											</form>
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