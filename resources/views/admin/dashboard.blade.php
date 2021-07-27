{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title', 'Inicio')

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-home"></i><strong> Inicio</strong></h2>
						<ul>
							<li>
                                <div class="periodo mt-2">
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
						</ul>
					</div>
					<div class="inside">
						<table id= "grid" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="10%">Fecha</th>
									<th width="40%">Cliente</th>
									<th width="40%">Colaborador</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($servicios as $servicio)
								<tr>
									<td>{{ $servicio->fecha }}</td>
									<td>{{ $servicio->cliente->razsoc }}</td>
									<td>{{ $servicio->nombres }}</td>
									<td>
										<div class="opts">
											<a class="" href="{{ route('admin.colaboradors.edit',$servicio->colaborador_id) }}"datatoggle="tooltip" data-placement="top" title="Antecedentes Colaboradores"><i class="far fa-user"></i></a>
											@can('admin.servicios.edit')
											<a class="" href="{{ route('admin.servicios.evaluacion',$servicio->id) }}"datatoggle="tooltip" data-placement="top" title="Evaluación"><i class="fas fa-laptop-medical"></i></a>
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

