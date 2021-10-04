@extends('company.master')
@section('title','CSO San Miguel Arcangel')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('company.reportes.index',$sede->id) }}"><i class="fas fa-chalkboard-teacher"></i> {{ $sede->nombre }}</a>
	</li>
@endsection
@section('content')
<div class="container-fluid mtop16">
	<div class="row">
		<div class="col-md-12">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title">
						{{ $sede->nombre }}
					</h2>
				</div>
				<div class="inside">
                    <div class="row">
                        <div class="col-md-12">
                            <table id= "grid" class="table table-responsive-sm table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th width='10%'>Fecha</th>
                                        <th width='20%'>Evaluación</th>
                                        <th width='30%'>Ubicación</th>
                                        <th width='32%'>Referencia</th>
                                        <th width='8%'></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ $servicio->fecha }}</td>
                                            <td>{{ $servicio->eval->nombre }}</td>
                                            <td>{{ $servicio->ubicacion }}</td>
                                            <td>{{ $servicio->glosa }}</td>
                                            <td>
                                                <div class="opts">
                                                    <a class="" href="{{ route('company.reportes.detalle',$servicio->id) }}"datatoggle="tooltip" data-placement="top" title="Ver Evaluación"><i class="fas fa-search"></i></a>
                                                    <a class="" href="{{ route('company.reportes.listcolaboradores',$servicio->id) }}" target="_blank" datatoggle="tooltip" data-placement="top" title="Listar Colaboradores"><i class="fas fa-print"></i></a>
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

</div>
@endsection