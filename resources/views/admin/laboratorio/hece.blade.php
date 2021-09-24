{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.evaluacion',$detservicio) }}"><i class="fas fa-address-card"></i> Evaluación</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid mb-4">
		@include('admin.examens.cabecera')
        <div class="row mtop16">
            <div class="col-md-12">
                {!! Form::model($detservicio->hece, ['route'=>['admin.laboratorio.updathece',$detservicio->hece], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Examen de Heces Completa
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2','id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha', 'Fecha:',['class' => 'colorprin']) !!}
                                {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3">
                                {!! Form::label('muestra_id', 'MUESTRA:',['class' => 'colorprin']) !!}
                                {!! Form::select('muestra_id',$muestra,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('examen', 'EXAMEN:',['class' => 'colorprin']) !!}
                                {!! Form::text('examen', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                RESULTADOS:
                            </h5>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                EXAMEN FÍSICO
                            </h5>
                        </div>
                        <div class="row">                                                   
                            <div class="col-md-2 form-group">
                                {!! Form::label('consistencia', 'Consistencia:') !!}
                                {!! Form::text('consistencia', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('color', 'Color:') !!}
                                {!! Form::text('color', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('olor', 'Olor:') !!}
                                {!! Form::text('olor', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('mucus', 'Mucus:') !!}
                                {!! Form::text('mucus', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('reaccion', 'Reaccion:') !!}
                                {!! Form::text('reaccion', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('sangre', 'Sangre:') !!}
                                {!! Form::text('sangre', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                EX. QUÍMICO
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                {!! Form::label('thevenon', 'Thevenon:') !!}
                                {!! Form::text('thevenon', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('sreductoras', 'Sust.Reductoras:') !!}
                                {!! Form::text('sreductoras', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="colorprin ml-2">
                                EXAMEN MICROSCÓPICO
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('cepiteliales', 'CELULAS EPITELIALES:') !!}
                                {!! Form::text('cepiteliales', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('hematies', 'HEMATIES:') !!}
                                {!! Form::text('hematies', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('leucocitos', 'LEUCOCITOS:') !!}
                                {!! Form::text('leucocitos', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('fond', 'FIB. ORG. NO DIGERIDA:') !!}
                                {!! Form::text('fond', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('mond', 'MAT. ORG. NO DIGERIDA:') !!}
                                {!! Form::text('mond', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('vlipidas', 'VESICULAS LIPIDICAS:') !!}
                                {!! Form::text('vlipidas', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('levaduras', 'CELULAS LEVADURIFORMES:') !!}
                                {!! Form::text('levaduras', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="colorprin ml-2">
                                PARÁSITOS
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('parasito1',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dparasito1',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('parasito2',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dparasito2',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('parasito3',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dparasito3',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('parasito4',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dparasito4',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('parasito5',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dparasito5',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 form-group">
                                {!! Form::label('observaciones', 'OBSERVACIONES:',['class' => 'colorprin']) !!}
                                {!! Form::textarea('observaciones',null,['class'=>'form-control mayuscula', 'rows'=>'4','autocomplete'=>'off']) !!}
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
    $(document).ready(function(){
    });
    
</script>
@endsection