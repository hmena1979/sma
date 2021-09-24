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
                {!! Form::model($detservicio->exaconfinado, ['route'=>['admin.examens.updatexaconfinado',$detservicio->exaconfinado], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Espacios Confinados
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
                                <a class="nav-item nav-link active" id="nav-antecedente-tab" data-toggle="tab" href="#nav-antecedente" role="tab" aria-controls="nav-antecedente" aria-selected="true">Antecedentes Personales del Trabajador</a>
                                <a class="nav-item nav-link" id="nav-hallazgo-tab" data-toggle="tab" href="#nav-hallazgo" role="tab" aria-controls="nav-hallazgo" aria-selected="false">Hallazgos Positivos al Examen Físico</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-antecedente" role="tabpanel" aria-labelledby="nav-antecedente-tab">
                                @include('admin.examens.confinado.antecedentes')
                            </div>
                            <div class="tab-pane fade" id="nav-hallazgo" role="tabpanel" aria-labelledby="nav-hallazgo-tab">
                                @include('admin.examens.confinado.hallazgo')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.confinado.resultado')
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