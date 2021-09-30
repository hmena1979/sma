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
                {!! Form::model($detservicio->exaderma, ['route'=>['admin.examens.updatexaderma',$detservicio->exaderma], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Dermatológica
                        </h2>
                        <ul>
                            @can('admin.derma.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <div class="inside">
                        <nav>
                            <div class="nav nav-tabs" id="nav-medico" role="tablist">
                                <a class="nav-item nav-link active" id="nav-evaluacion-tab" data-toggle="tab" href="#nav-evaluacion" role="tab" aria-controls="nav-evaluacion" aria-selected="true">Evaluación</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                                @include('admin.examens.derma.evaluacion')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.derma.resultado')
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
        elasticidad();
        textura();
        coloracion();
        cicatrices();
        tatuajes();
        tumor();
        edema();

        $('#elasticidad').change(function(){
            elasticidad();
        });
        $('#textura').change(function(){
            textura();
        });
        $('#coloracion').change(function(){
            coloracion();
        });
        $('#cicatrices').change(function(){
            cicatrices();
        });
        $('#tatuajes').change(function(){
            tatuajes();
        });
        $('#tumor').change(function(){
            tumor();
        });
        $('#edema').change(function(){
            edema();
        });
    
    });
    function elasticidad(){
        if($('#elasticidad').val() == 1){
            $('#elasticidadp').hide();
            $('#elasticidadp').val(null);
        }else{
            $('#elasticidadp').show();
        }
    }
    function textura(){
        if($('#textura').val() == 1){
            $('#texturap').hide();
            $('#texturap').val(null);
        }else{
            $('#texturap').show();
        }
    }
    function coloracion(){
        if($('#coloracion').val() != 4){
            $('#coloracionotr').hide();
            $('#coloracionotr').val(null);
        }else{
            $('#coloracionotr').show();
        }
    }
    function cicatrices(){
        if($('#cicatrices').val() != 4){
            $('#cicatricesotr').hide();
            $('#cicatricesotr').val(null);
        }else{
            $('#cicatricesotr').show();
        }
    }
    function tatuajes(){
        if($('#tatuajes').val() == 2){
            $('#tatuajesd').hide();
            $('#tatuajesd').val(null);
        }else{
            $('#tatuajesd').show();
        }
    }
    function tumor(){
        if($('#tumor').val() != 4){
            $('#tumorotr').hide();
            $('#tumorotr').val(null);
        }else{
            $('#tumorotr').show();
        }
    }
    function edema(){
        if($('#edema').val() != 4){
            $('#edemaotr').hide();
            $('#edemaotr').val(null);
        }else{
            $('#edemaotr').show();
        }
    }
</script>
@endsection