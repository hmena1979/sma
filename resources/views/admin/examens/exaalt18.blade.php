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
                {!! Form::model($detservicio->exaalt18, ['route'=>['admin.examens.updatexaalt18',$detservicio->exaalt18], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Trabajo de Altura - A partir de 1.8 metros
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        <nav>
                            <div class="nav nav-tabs" id="nav-medico" role="tablist">
                                <a class="nav-item nav-link active" id="nav-arm-tab" data-toggle="tab" href="#nav-arm" role="tab" aria-controls="nav-arm" aria-selected="true">Antecedentes - Registro médico</a>
                                <a class="nav-item nav-link" id="nav-aep-tab" data-toggle="tab" href="#nav-aep" role="tab" aria-controls="nav-aep" aria-selected="false">Antecedentes - Entrevista Paciente</a>
                                <a class="nav-item nav-link" id="nav-ef-tab" data-toggle="tab" href="#nav-ef" role="tab" aria-controls="nav-ef" aria-selected="false">Examen Físico</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-arm" role="tabpanel" aria-labelledby="nav-arm-tab">
                                @include('admin.examens.altura18.arm')
                            </div>
                            <div class="tab-pane fade" id="nav-aep" role="tabpanel" aria-labelledby="nav-aep-tab">
                                @include('admin.examens.altura18.aep')
                            </div>
                            <div class="tab-pane fade" id="nav-ef" role="tabpanel" aria-labelledby="nav-ef-tab">
                                @include('admin.examens.altura18.ef')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.altura18.resultado')
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