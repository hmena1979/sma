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
                {!! Form::model($detservicio->urocultivo, ['route'=>['admin.laboratorio.updaturocultivo',$detservicio->urocultivo], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Urocultivo
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
                                EXAMEN REALIZADO
                            </h5>
                        </div>
                        <div class="row">                                                   
                            <div class="col-md-2 form-group">
                                {!! Form::label('leucocitos', 'Leucocitos:') !!}
                                {!! Form::text('leucocitos', null, ['class'=>'form-control mayuscula','maxlength'=>'5','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hematies', 'Hematies:') !!}
                                {!! Form::text('hematies', null, ['class'=>'form-control mayuscula','maxlength'=>'15','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('cepiteliales', 'C.Epiteliales:') !!}
                                {!! Form::select('cepiteliales',$cantidad,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('germenes', 'Germenes:') !!}
                                {!! Form::select('germenes',$cantidad,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('cristales', 'Cristales:') !!}
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        {!! Form::text('cristales', null, ['class'=>'form-control','maxlength'=>'20','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-7">								
                                        {!! Form::select('ccristales',$cantidad, null, ['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('otros', 'Otros:') !!}
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        {!! Form::select('otros01',$otros, null, ['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-5">								
                                        {!! Form::select('otrcantidad01',$cantidad, null, ['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                {{-- {!! Form::label('otros', 'Otros:') !!} --}}
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        {!! Form::select('otros02',$otros, null, ['class'=>'custom-select mtop23']) !!}
                                    </div>
                                    <div class="col-md-5">								
                                        {!! Form::select('otrcantidad02',$cantidad, null, ['class'=>'custom-select mtop23']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                {{-- {!! Form::label('otros', 'Otros:') !!} --}}
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        {!! Form::select('otros03',$otros, null, ['class'=>'custom-select mtop23']) !!}
                                    </div>
                                    <div class="col-md-5">								
                                        {!! Form::select('otrcantidad03',$cantidad, null, ['class'=>'custom-select mtop23']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('c', 'C:') !!}
                                {!! Form::select('c',[1=>'POSITIVO', 2=> 'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('germen_id', 'Germen Aislado') !!}
                                {!! Form::select('germen_id',$germen,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('rcolonias', 'Recuento Colonias:') !!}
                                {!! Form::text('rcolonias', null, ['class'=>'form-control mayuscula','maxlength'=>'5','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                ANTIBIOGRAMA
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant01', 'AMICACINA') !!}
                                {!! Form::select('ant01',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant02', 'IMIPENEN') !!}
                                {!! Form::select('ant02',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant03', 'CEFTRIAXONA') !!}
                                {!! Form::select('ant03',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant04', 'AMPICILINA+SULBATAM') !!}
                                {!! Form::select('ant04',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('ant05', 'AMOXICILINA+AC. CALVULA') !!}
                                {!! Form::select('ant05',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant06', 'LEVOFLOXACINO') !!}
                                {!! Form::select('ant06',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('ant07', 'SULFAMETOXAZOL+TRIMET') !!}
                                {!! Form::select('ant07',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant08', 'NITROFURANTOINA') !!}
                                {!! Form::select('ant08',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant09', 'CIPROFLOXACINO') !!}
                                {!! Form::select('ant09',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant10', 'CEFTAZIDIMA') !!}
                                {!! Form::select('ant10',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant11', 'GENTAMICINA') !!}
                                {!! Form::select('ant11',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant12', 'ACIDO NALIDIXICO') !!}
                                {!! Form::select('ant12',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant13', 'CEFRADINA') !!}
                                {!! Form::select('ant13',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant14', 'CEFADROXILO') !!}
                                {!! Form::select('ant14',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant15', 'CEFALEXINA') !!}
                                {!! Form::select('ant15',$antibiograma,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ant16', 'NORFLOXACINO') !!}
                                {!! Form::select('ant16',$antibiograma,null,['class'=>'custom-select']) !!}
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