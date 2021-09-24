{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.evaluacion',$exacovid->detservicio) }}"><i class="fas fa-address-card"></i> Evaluación</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		@include('admin.examens.cabecera')
        <div class="row mtop16 mb-5">
            <div class="col-md-12">
                {!! Form::model($exacovid, ['route'=>['admin.examens.updatexacovid',$exacovid], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            @if ($exacovid->examen == 1)
                            Prueba Covid19 - Antígeno
                            @endif
                            @if ($exacovid->examen == 2)
                            Prueba Covid19 - Prueba Rápida
                            @endif
                            @if ($exacovid->examen == 3)
                            Prueba Covid19 - PCR
                            @endif
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        @if ($exacovid->examen == 1)
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_tm', 'Fecha Ingreso:') !!}
                                {!! Form::date('fecha_tm', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_val', 'Fecha Emisión:') !!}
                                {!! Form::date('fecha_val', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('antigeno', 'RESULTADO:',['class' => 'colorprin']) !!}
                                {!! Form::select('antigeno',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        @endif
                        @if ($exacovid->examen == 2)
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_tm', 'Fecha Atención:') !!}
                                {!! Form::date('fecha_tm', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_val', 'Fecha Reporte:') !!}
                                {!! Form::date('fecha_val', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('igg', 'IgG:',['class' => 'colorprin']) !!}
                                {!! Form::select('igg',[1=>'REACTIVO',2=>'NO REACTIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('igm', 'IgM:',['class' => 'colorprin']) !!}
                                {!! Form::select('igm',[1=>'REACTIVO',2=>'NO REACTIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        @endif
                        @if ($exacovid->examen == 3)
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_tm', 'Fecha Toma Muestra:') !!}
                                {!! Form::date('fecha_tm', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hora_tm', 'Hora Toma Muestra:') !!}
                                {!! Form::time('hora_tm', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_rec', 'Fecha Recepción:') !!}
                                {!! Form::date('fecha_rec', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hora_rec', 'Hora Recepción:') !!}
                                {!! Form::time('hora_rec', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_val', 'Fecha Validación:') !!}
                                {!! Form::date('fecha_val', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hora_val', 'Hora Validación:') !!}
                                {!! Form::time('hora_val', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('pcr', 'RESULTADO:',['class' => 'colorprin']) !!}
                                {!! Form::select('pcr',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-4">
                                {!! Form::label('biologo_id', 'BIÓLOGO:',['class' => 'colorprin']) !!}
                                {!! Form::select('biologo_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
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