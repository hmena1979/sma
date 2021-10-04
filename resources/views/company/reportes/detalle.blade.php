@extends('company.master')
@section('title','CSO San Miguel Arcangel')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('company.reportes.index',$sede->id) }}"><i class="fas fa-chalkboard-teacher"></i> {{ $sede->nombre }}</a>
	</li>
	<li class="breadcrumb-item">
		<a href="{{ route('company.reportes.detalle',$servicio->id) }}"><i class="fas fa-search"></i> {{ $servicio->glosa }}</a>
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
                            <table id= "grid" class="table table-responsive-sm table-hover table-sm table-estrecha">
                                <thead>
                                    <tr>
                                        <th width='60%'>Colaborador</th>
                                        <th width='10%'>Fecha</th>
                                        <th width='20%'>Resultado</th>
                                        <th width='10%'></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicio->detservicios->where('finalizado',1) as $detservicio)
                                        <tr>
                                            <td>{{ $detservicio->colaborador->nombres }}</td>
                                            <td>{{ $detservicio->servicio->fecha }}</td>
                                            <td>{{ $resultado[$detservicio->resultado] }}</td>
                                            <td>
                                                <div class="opts">
                                                    <a class="" href="{{ route('company.reportes.listado', $detservicio->id) }}"datatoggle="tooltip" data-placement="top" title="Imprimir Evaluación"><i class="fas fa-print"></i></a>
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