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
                {!! Form::model($detservicio->orina, ['route'=>['admin.laboratorio.updatorina',$detservicio->orina], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Examen de Orina
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
                            <div class="col-md-4">
                                {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                EX. FÍSICO
                            </h5>
                        </div>
                        <div class="row">                                                   
                            <div class="col-md-2 form-group">
                                {!! Form::label('reaccion', 'Reaccion:') !!}
                                {!! Form::text('reaccion', null, ['class'=>'form-control mayuscula','maxlength'=>'5','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('color', 'Color:') !!}
                                {!! Form::text('color', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('aspecto_id', 'Aspecto:') !!}
                                {!! Form::select('aspecto_id',$aspecto,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('densidad', 'Densidad:') !!}
                                {!! Form::text('densidad', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('olor', 'Olor:') !!}
                                {!! Form::text('olor', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                EX. QUÍMICO
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('glucosa', 'Glucosa:') !!}
                                        {!! Form::select('glucosa',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('proteinas', 'Proteinas:') !!}
                                        {!! Form::select('proteinas',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('nitritos', 'Nitritos:') !!}
                                        {!! Form::select('nitritos',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('pbiliares', 'P.Biliares:') !!}
                                        {!! Form::select('pbiliares',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('thevenon', 'Thevenon:') !!}
                                        {!! Form::select('thevenon',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::label('urobilinogeno', 'Urobilinogeno:') !!}
                                        {!! Form::select('urobilinogeno',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('cetonas', 'Cetonas:') !!}
                                {!! Form::select('cetonas',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h5 class="colorprin ml-2">
                                EXAMEN DE SEDIMENTO 450 X
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('leucocitos', 'Leucocitos:') !!}
                                {!! Form::text('leucocitos', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('piocitos', 'Piocitos:') !!}
                                {!! Form::select('piocitos',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hematies', 'Hematies:') !!}
                                {!! Form::text('hematies', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('bacteria_id', 'Bacterias:') !!}
                                {!! Form::select('bacteria_id',$cantidad,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('epiteliales', 'C.Epiteliales:') !!}
                                {!! Form::text('epiteliales', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('cristales_id', 'Cristales:') !!}
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        {!! Form::select('cristales_id',$cristales,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-5">
                                        {!! Form::select('ccristales_id',$cantidad,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('otrcristal', 'Otros Cristales:') !!}
                                {!! Form::text('otrcristal', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-1">
                            <h5 class="colorprin ml-2">
                                OTROS
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('otr1_id',$otros,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-2 form-group">
                                        {!! Form::text('otrdet1', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::select('otrcant1_id',$cantidad,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('otr2_id',$otros,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-2 form-group">
                                        {!! Form::text('otrdet2', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::select('otrcant2_id',$cantidad,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::select('otr3_id',$otros,null,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-2 form-group">
                                        {!! Form::text('otrdet3', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::select('otrcant3_id',$cantidad,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
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