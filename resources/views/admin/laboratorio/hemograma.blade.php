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
        <div class="row mtop16 mb-4">
            <div class="col-md-12">
                {!! Form::model($detservicio->hemograma, ['route'=>['admin.laboratorio.updathemograma',$detservicio->hemograma], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Hemograma
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
                                HEMOGRAMA COMPLETO
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        {!! Form::label('gb', 'Leucocitos') !!}<strong>(x10<sup>3</sup>Cel/ul):</strong>
                                        {!! Form::text('gb', null, ['class'=>'form-control decimal conscor','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        {!! Form::label('gr', 'Hematies') !!}<strong>(x10<sup>6</sup>Cel/ul):</strong>
                                        {!! Form::text('gr', null, ['class'=>'form-control decimal conscor','autocomplete'=>'off']) !!}
                                    </div>  
                                </div>
                            </div>                                                      
                            <div class="col-md-2 form-group">
                                {!! Form::label('hemoglobina', 'Hemoglobina(g/dl):') !!}
                                {!! Form::text('hemoglobina', $detservicio->hemoglobina, ['class'=>'form-control decimal','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hematocrioto', 'Hematocrito(%):') !!}
                                {!! Form::text('hematocrioto', null, ['class'=>'form-control decimal conscor','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                CONSTANTES CORPUSCULARES
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('vcm', 'VCM(fl):') !!}
                                {!! Form::text('vcm', null, ['class'=>'form-control decimal','autocomplete'=>'off', 'disabled']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('hcm', 'HCM(pg):') !!}
                                {!! Form::text('hcm', null, ['class'=>'form-control decimal','autocomplete'=>'off', 'disabled']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('chcm', 'CHCM(g/dl):') !!}
                                {!! Form::text('chcm', null, ['class'=>'form-control decimal','autocomplete'=>'off', 'disabled']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                DIFERENCIACIÓN CITOMORFOLÓGICA
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('abastonados', 'Abastonados(%):') !!}
                                {!! Form::text('abastonados', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('segmentados', 'Segmentados(%):') !!}
                                {!! Form::text('segmentados', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('eosinofilos', 'Eosinofilos(%):') !!}
                                {!! Form::text('eosinofilos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('basofilos', 'Basofilos(%):') !!}
                                {!! Form::text('basofilos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('monocitos', 'Monocitos(%):') !!}
                                {!! Form::text('monocitos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('linfocitos', 'Linfocitos(%):') !!}
                                {!! Form::text('linfocitos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('metamielocitos', 'Metamielocitos(%):') !!}
                                {!! Form::text('metamielocitos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('mielocitos', 'Mielocitos(%):') !!}
                                {!! Form::text('mielocitos', null, ['class'=>'form-control decimal difcito','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('conteo', 'Conteo(%):') !!}
                                {!! Form::text('conteo', null, ['class'=>'form-control decimal','autocomplete'=>'off','disabled']) !!}
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <span class="colorprin">{!! Form::label('plaquetas', 'Plaquetas') !!}<strong>(x10<sup>3</sup>Cel/ul):</strong></span>
                                {!! Form::text('plaquetas', null, ['class'=>'form-control decimal','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <h5 class="colorprin ml-2">
                                        OBSERVACIONES:
                                    </h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Form::select('observa01',$obshemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::select('obscruz01',['+'=>'+','++'=>'++','+++'=>'+++'],null,['class'=>'custom-select','placeholder'=>'']) !!}
                                    </div>                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        {!! Form::select('observa02',$obshemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::select('obscruz02',['+'=>'+','++'=>'++','+++'=>'+++'],null,['class'=>'custom-select','placeholder'=>'']) !!}
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        {!! Form::select('observa03',$obshemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::select('obscruz03',['+'=>'+','++'=>'++','+++'=>'+++'],null,['class'=>'custom-select','placeholder'=>'']) !!}
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        {!! Form::select('observa04',$obshemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::select('obscruz04',['+'=>'+','++'=>'++','+++'=>'+++'],null,['class'=>'custom-select','placeholder'=>'']) !!}
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        {!! Form::select('observa05',$obshemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::select('obscruz05',['+'=>'+','++'=>'++','+++'=>'+++'],null,['class'=>'custom-select','placeholder'=>'']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <h5 class="colorprin ml-2">
                                        OTROS:
                                    </h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        {!! Form::select('otro01',$otrhemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::text('otrdescrip01', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
                                    </div>                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        {!! Form::select('otro02',$otrhemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::text('otrdescrip02', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
                                    </div>                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        {!! Form::select('otro03',$otrhemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::text('otrdescrip03', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
                                    </div>                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        {!! Form::select('otro04',$otrhemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::text('otrdescrip04', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
                                    </div>                                    
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        {!! Form::select('otro05',$otrhemograma,null,['class'=>'custom-select']) !!}
                                    </div>                                    
                                    <div class="col-md-3">
                                        {!! Form::text('otrdescrip05', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
                                    </div>                                    
                                </div>
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
        cuenta();
        $('#guardar').click(function(){
            $('#vcm').prop('disabled',false);
            $('#hcm').prop('disabled',false);
            $('#chcm').prop('disabled',false);
        });

        $('.conscor').blur(function(){
            var gr, hb, hto, vcm, hcm, chcm;
            gr = Number($('#gr').val());
            hb = Number($('#hemoglobina').val());
            hto = Number($('#hematocrioto').val());
            if(gr!=0 && hb!=0 && hto!=0){
                vcm = Redondea(((hto/gr)*100)/10,1);
                hcm = Redondea(((hb/gr)*100)/10,1);
                chcm = Redondea(((hb/hto)*100),1);

                $('#vcm').val(vcm);
                $('#hcm').val(hcm);
                $('#chcm').val(chcm);
            }
        });

        $('.difcito').blur(function(){
            cuenta();
        });
    });
    function cuenta(){
        var abastonados,segmentados,eosinofilos,basofilos,monocitos,linfocitos,metamielocitos,mielocitos,conteo;
        abastonados = Number($('#abastonados').val());
        segmentados = Number($('#segmentados').val());
        eosinofilos = Number($('#eosinofilos').val());
        basofilos = Number($('#basofilos').val());
        monocitos = Number($('#monocitos').val());
        linfocitos = Number($('#linfocitos').val());
        metamielocitos = Number($('#metamielocitos').val());
        mielocitos = Number($('#mielocitos').val());
        conteo = abastonados+segmentados+eosinofilos+basofilos+monocitos+linfocitos+metamielocitos+mielocitos;
        $('#conteo').val(conteo);
    }
    
</script>
@endsection