{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title', 'Inicio')

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<div class="row">
							<div class="col-md-7">
								<h2 class="title"><i class="fas fa-home"></i><strong> Inicio</strong></h2>
							</div>
							<div class="col-md-5 mt-2">
								{!! Form::open(['route'=>'admin.inicio.change']) !!}
								@can('admin.pendientes')
								<div class="row no-gutters mr-2">
									<div class="col-md-4 input-group">
										{!! Form::select('mes',getMeses(),substr($periodo,0,2),['class'=>'custom-select']) !!}
									</div>
									<div class="col-md-2">
										{!! Form::text('año', substr($periodo,2,4), ['class'=>'form-control','maxlength'=>'4','autocomplete'=>'off']) !!}
									</div>
									<div class="col-md-4">
										{!! Form::select('finalizado',[1=>'Finalizado',2=>'Pendiente',3=>'Todos'],$finalizado,['class'=>'custom-select']) !!}
									</div>
									<div class="col-md-1">
										{!! Form::submit('Mostar', ['class'=>'btn btn-convertir']) !!}
									</div>
								</div>
								{!! Form::close() !!}
								@endcan
								{{-- @if (Auth::user()->can('admin.pendientes'))
									{{ Auth::user()->can('admin.pendientes') }}
								@else
									'No Puede'
								@endif --}}
									
								
								
								{{-- <ul>
									<li>
										<div class="mt-2">
											{!! Form::open(['route'=>'admin.inicio.change']) !!}
											<div class="input-group tamvar">
												{!! Form::select('mes',getMeses(),substr($periodo,0,2),['class'=>'custom-select']) !!}
												{!! Form::text('año', substr($periodo,2,4), ['class'=>'form-control','maxlength'=>'4','autocomplete'=>'off']) !!}
												{!! Form::select('finalizado',[1=>'Finalizado',2=>'Pendiente'],2,['class'=>'custom-select']) !!}
												<div class="input-group-append">
													{!! Form::submit('Mostar', ['class'=>'btn btn-convertir']) !!}
												</div>
											</div>
											{!! Form::close() !!}
										</div>
									</li>
								</ul> --}}
							</div>
						</div>
						
					</div>
					<div class="inside">
						<table id= "grid" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="40%">Colaborador</th>
									<th width="10%">Fecha</th>
									<th width="40%">Cliente</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($servicios as $servicio)
								<tr>
									<td>{{ $servicio->nombres }}</td>
									<td>{{ $servicio->fecha }}</td>
									<td>{{ $servicio->cliente->razsoc }}</td>
									<td>
										<div class="opts">
											@can('admin.colaboradors.edit')
											<a class="" href="{{ route('admin.colaboradors.edit',$servicio->colaborador_id) }}"datatoggle="tooltip" data-placement="top" title="Antecedentes Colaboradores"><i class="far fa-user"></i></a>												
											@endcan
											@can('admin.evaluacion')
											<a class="" href="{{ route('admin.servicios.evaluacion',$servicio->id) }}"datatoggle="tooltip" data-placement="top" title="Evaluación"><i class="fas fa-laptop-medical"></i></a>
											@endcan
											<a class="" href="{{ route('admin.reportes.listado',$servicio->id) }}"datatoggle="tooltip" data-placement="top" title="Reportes"><i class="fas fa-print"></i></a>
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

