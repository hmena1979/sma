{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.evaluacion',$detservicio) }}"><i class="fas fa-address-card"></i> Evaluación</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		@include('admin.examens.cabecera')
        <div class="row mtop16 mb-5">
            <div class="col-md-12">
                {!! Form::model($detservicio->exaalt25, ['route'=>['admin.examens.updatexaalt25',$detservicio->exaalt25], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Médica para Ascenso a Grandes Superficies(2,500 msnm)
                        </h2>
                        <ul>
                            @can('admin.altura25.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <div class="inside">
                        <nav>
                            <div class="nav nav-tabs" id="nav-medico" role="tablist">
                                <a class="nav-item nav-link active" id="nav-cuestionario-tab" data-toggle="tab" href="#nav-cuestionario" role="tab" aria-controls="nav-cuestionario" aria-selected="true">Cuestionario</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-cuestionario" role="tabpanel" aria-labelledby="nav-cuestionario-tab">
                                @include('admin.examens.altura25.cuestionario')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.altura25.resultado')
                            </div>
                        </div>
                        
                    </div>

                </div>
                {!! Form::close() !!}
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

</script>
@endsection