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
                {!! Form::model($detservicio->bacteriologia, ['route'=>['admin.laboratorio.updatbacteriologia',$detservicio->bacteriologia], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Microbiología Clínica
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
                                {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('muestra_id', 'Muestra:') !!}
                                {!! Form::select('muestra_id',$muestra,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2">
                                {!! Form::label('cultivo', 'Cultivo:') !!}
                                {!! Form::select('cultivo',[1=>'POSITIVO',2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('colonias', 'Recuento Colonias:') !!}
                                {!! Form::text('colonias', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3">
                                {!! Form::label('germen_id', 'Germen Aislado:') !!}
                                {!! Form::select('germen_id',$germen,null,['class'=>'custom-select']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('exadirecto', 'Examen Directo:') !!}
                                {!! Form::text('exadirecto', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('gram', 'Coloración GRAM:') !!}
                                {!! Form::text('gram', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('ziehl', 'Coloración ZIEHL NEELSEN:') !!}
                                {!! Form::text('ziehl', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="antibiograma">
                            <div class="row mt-3">
                                <h5 class="colorprin ml-2">
                                    ANTIBIOGRAMA
                                </h5>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio01', 'Ac.nalidixico:') !!}
                                    {!! Form::select('antbio01',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio02', 'Ac.pipemidico:') !!}
                                    {!! Form::select('antbio02',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio03', 'Amikacina:') !!}
                                    {!! Form::select('antbio03',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio04', 'Amox/Ac.clavul:') !!}
                                    {!! Form::select('antbio04',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio05', 'Amoxicilina:') !!}
                                    {!! Form::select('antbio05',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio06', 'Ampicilina:') !!}
                                    {!! Form::select('antbio06',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio07', 'Azitromicina:') !!}
                                    {!! Form::select('antbio07',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio08', 'Aztreonam:') !!}
                                    {!! Form::select('antbio08',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio09', 'Bacitracina:') !!}
                                    {!! Form::select('antbio09',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio10', 'Carbencilina:') !!}
                                    {!! Form::select('antbio10',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio11', 'Cefaclor:') !!}
                                    {!! Form::select('antbio11',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio12', 'Cefadroxilo:') !!}
                                    {!! Form::select('antbio12',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio13', 'Cefalotina:') !!}
                                    {!! Form::select('antbio13',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio14', 'Cefazolina:') !!}
                                    {!! Form::select('antbio14',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio15', 'Cefepime:') !!}
                                    {!! Form::select('antbio15',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio16', 'Cefotaxima:') !!}
                                    {!! Form::select('antbio16',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio17', 'Ceftazidima:') !!}
                                    {!! Form::select('antbio17',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio18', 'Ceftriaxona:') !!}
                                    {!! Form::select('antbio18',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio19', 'Ceftrizona:') !!}
                                    {!! Form::select('antbio19',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio20', 'Cefuroxima:') !!}
                                    {!! Form::select('antbio20',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio21', 'Ciprofloxacina:') !!}
                                    {!! Form::select('antbio21',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio22', 'Clindamicina:') !!}
                                    {!! Form::select('antbio22',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio23', 'Cloranfenicol:') !!}
                                    {!! Form::select('antbio23',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio24', 'Dicloxacilina:') !!}
                                    {!! Form::select('antbio24',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio25', 'Eritomicina:') !!}
                                    {!! Form::select('antbio25',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio26', 'Fosfomicina:') !!}
                                    {!! Form::select('antbio26',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio27', 'Gentamicina:') !!}
                                    {!! Form::select('antbio27',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio28', 'Impenem:') !!}
                                    {!! Form::select('antbio28',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio29', 'Meropenem:') !!}
                                    {!! Form::select('antbio29',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio30', 'Nitrofurantoina:') !!}
                                    {!! Form::select('antbio30',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('antbio31', 'Norfloxacina:') !!}
                                    {!! Form::select('antbio31',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio32', 'Oxacilina:') !!}
                                    {!! Form::select('antbio32',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio33', 'Penicilina:') !!}
                                    {!! Form::select('antbio33',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio34', 'Sulbactam:') !!}
                                    {!! Form::select('antbio34',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio35', 'Sultamicilina:') !!}
                                    {!! Form::select('antbio35',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio36', 'Tetraciclina:') !!}
                                    {!! Form::select('antbio36',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
                                </div>
                                <div class="col-md-2">
                                    {!! Form::label('antbio37', 'Trimet/sulfamet:') !!}
                                    {!! Form::select('antbio37',$antibiograma,null,['class'=>'custom-select valanti','placeholder' => '']) !!}
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
        if($('#cultivo').val() == 2){
            $('.antibiograma').hide();
        }else{
            $('.antibiograma').show();
        }
        $('#cultivo').change(function(){
            if($('#cultivo').val() == 2){
                $('.antibiograma').hide();
                $('.valanti').val(null);
            }else{
                $('.antibiograma').show();
            }
        });
    });
    
</script>
@endsection