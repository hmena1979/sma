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
                {!! Form::model($detservicio->parasitologia, ['route'=>['admin.laboratorio.updatparasitologia',$detservicio->parasitologia], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Parasitología Clínica
                        </h2>
                        <ul>
                            @can('admin.laboratorio.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2','id'=>'guardar']) !!}
                            </li>                                
                            @endcan
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
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-7 form-group">
                                        {!! Form::label('examen', 'EXAMEN:',['class' => 'colorprin']) !!}
                                        {!! Form::text('examen', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-5 form-group">
                                        {!! Form::label('numero', '# MUESTRAS:',['class' => 'colorprin']) !!}
                                        {!! Form::text('numero', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="colorprin ml-2">
                                HECES PARASITOLÓGICAS
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('hp1',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dhp1',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('hp2',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dhp2',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('hp3',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dhp3',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="colorprin ml-2">
                                REACCIÓN INFLAMATORIA
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('ri1',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dri1',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('ri2',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dri2',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('ri3',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dri3',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('ri4',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dri4',$dparasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 mt-1">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('ri5',$parasito,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select('dri5',$dparasito,null,['class'=>'custom-select']) !!}
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