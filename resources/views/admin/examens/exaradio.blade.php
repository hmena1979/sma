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
                {!! Form::model($detservicio->exaradio, ['route'=>['admin.examens.updatexaradio',$detservicio->exaradio], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            RADIOGRAFIA DE TORAX
                        </h2>
                        <ul>
                            @can('admin.radio.edit')
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
                                {!! Form::label('calidad', 'Calidad:') !!}
                                {!! Form::text('calidad', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('simbolos', 'Simbolos:') !!}
                                {!! Form::text('simbolos', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('vertice', 'Vértices:') !!}
                                {!! Form::text('vertice', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                CAMPOS PULMONARES
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('cphilios', 'HILIOS:') !!}
                                {!! Form::text('cphilios', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('cpsenos', 'SENOS:') !!}
                                {!! Form::text('cpsenos', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('cpmedia', 'MEDIASTINOS:') !!}
                                {!! Form::text('cpmedia', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('informe', 'INFORME:',['class' => 'colorprin']) !!}
                                {!! Form::textarea('informe',null,['class'=>'form-control mayuscula', 'rows'=>'5','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('silcardio', 'SILUETA CARDIOVASCULAR:',['class' => 'colorprin']) !!}
                                {!! Form::text('silcardio', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
                                {!! Form::text('conclusion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('resultado', 'RESULTADO:',['class' => 'colorprin']) !!}
                                {!! Form::select('resultado',$resultado,null,['class'=>'custom-select']) !!}
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