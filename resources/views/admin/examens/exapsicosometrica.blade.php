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
                {!! Form::model($detservicio->exapsicosometrica, ['route'=>['admin.examens.updatexapsicosometrica',$detservicio->exapsicosometrica], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Psicosometrica
                        </h2>
                        <ul>
                            @can('admin.psicosometrica.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha', 'Fecha:') !!}
                                {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('clase', 'Clase y Categoria:') !!}
                                {!! Form::text('clase', null, ['class'=>'form-control','maxlength'=>'5','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                TEST DE PUNTEADO
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('tpunt_aciertos', 'ACIERTOS:') !!}
                                {!! Form::text('tpunt_aciertos', null, ['class'=>'form-control numero','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tpunt_errores', 'ERRORES') !!}
                                {!! Form::text('tpunt_errores', null, ['class'=>'form-control numero','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('tpunt_aprobado', 'RESULTADO:',['class' => '']) !!}
                                {!! Form::select('tpunt_aprobado',['0'=>'Pendiente','1'=>'Aprobado','2'=>'Desaprobado'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                TEST DE PALANCA
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('tpalan_permanencia', 'PERMANENCIA EN EL ERROR:') !!}
                                {!! Form::text('tpalan_permanencia', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('tpalan_tiempo', 'TIEMPO DE EXAMEN') !!}
                                {!! Form::text('tpalan_tiempo', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('tpalan_aprobado', 'RESULTADO:',['class' => '']) !!}
                                {!! Form::select('tpalan_aprobado',['0'=>'Pendiente','1'=>'Aprobado','2'=>'Desaprobado'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                TEST DE REACCIÓN
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('treac_intentos', 'INTENTOS:') !!}
                                {!! Form::text('treac_intentos', null, ['class'=>'form-control numeri','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('treac_tiempo', 'TIEMPO DE RESPUESTA') !!}
                                {!! Form::text('treac_tiempo', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3">
                                {!! Form::label('treac_aprobado', 'RESULTADO:',['class' => '']) !!}
                                {!! Form::select('treac_aprobado',['0'=>'Pendiente','1'=>'Aprobado','2'=>'Desaprobado'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('observaciones', 'OBSERVACIONES:',['class' => 'colorprin']) !!}
                                {!! Form::textarea('observaciones',null,['class'=>'form-control mayuscula','maxlength'=>'255', 'rows'=>'2','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('aprobado', 'CONDICIÓN FINAL:',['class' => 'colorprin']) !!}
                                {!! Form::select('aprobado',['0'=>'Pendiente','1'=>'Aprobado','2'=>'Desaprobado'],null,['class'=>'custom-select']) !!}
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