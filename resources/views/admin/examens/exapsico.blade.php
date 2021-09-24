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
                {!! Form::model($detservicio->exapsico, ['route'=>['admin.examens.updatexapsico',$detservicio->exapsico], 'method'=> 'put']) !!}
                {!! Form::hidden('colaborador_id',$detservicio->colaborador->id,['id' => 'colaborador_id']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Psicológica
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        <nav>
                            <div class="nav nav-tabs" id="nav-medico" role="tablist">
                                <a class="nav-item nav-link active" id="nav-antecedente-tab" data-toggle="tab" href="#nav-antecedente" role="tab" aria-controls="nav-antecedente" aria-selected="true">Antecedentes</a>
                                <a class="nav-item nav-link" id="nav-evaluacion-tab" data-toggle="tab" href="#nav-evaluacion" role="tab" aria-controls="nav-evaluacion" aria-selected="true">Evaluación</a>
                                <a class="nav-item nav-link" id="nav-mental-tab" data-toggle="tab" href="#nav-mental" role="tab" aria-controls="nav-mental" aria-selected="true">Examen Mental</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-antecedente" role="tabpanel" aria-labelledby="nav-antecedente-tab">
                                @include('admin.examens.psico.antecedente')
                            </div>
                            <div class="tab-pane fade" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                                @include('admin.examens.psico.evaluacion')
                            </div>
                            <div class="tab-pane fade" id="nav-mental" role="tabpanel" aria-labelledby="nav-mental-tab">
                                @include('admin.examens.psico.mental')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.psico.resultado')
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
        verao();

        $('#addantecedente').click(function(){
            var ant = {
                'tipo':$('#tipo_i').val(),
                'id':$('#id_i').val(),
                'empresa':$('#empresa_i').val(),
                'area':$('#area_i').val(),
                'puesto':$('#puesto_id_i').val(),
                'fecha':$('#fecha_i').val(),
                'tiempo':$('#tiempo_i').val(),
                'exposicion':$('#exposicion_i').val(),
                'epp':$('#epp_i').val(),
                'cretiro':$('#cretiro_i').val()
            };

            var envio = JSON.stringify(ant);

            $.get(url_global+"/admin/colaboradors/"+envio+"/addao/",function(response){
                verao();
            });
        });
    });

    function verao(){
        var colaborador = $('#colaborador_id').val();
        $.get(url_global+"/admin/colaboradors/"+colaborador+"/tabla_ao/",function(response){
            $('#tantocupa').empty();
            $('#tantocupa').html(response);
        });
    }

    function editao(id){
        $('#tipo_i').val(2),
        $.get(url_global+"/admin/colaboradors/"+id+"/busao/",function(response){
            $('#id_i').val(id),
            $('#empresa_i').val(response['empresa']),
            $('#area_i').val(response['area_id']),
            $('#area_i').select2();
            $('#area_i').select2({
                placeholder:"Área",
                dropdownParent: $('#ingantecedente')
            });
            $('#puesto_id_i').val(response['puesto_id']),
            $('#puesto_id_i').select2();
            $('#puesto_id_i').select2({
                placeholder:"Ocupación",
                dropdownParent: $('#ingantecedente')
            });
            $('#fecha_i').val(response['fecha']),
            $('#tiempo_i').val(response['tiempo']),
            $('#exposicion_i').val(response['exposicion']),
            $('#epp_i').val(response['epp']),
            $('#cretiro_i').val(response['cretiro'])
        });
    }

    function destroyao(id){
        // e.preventDefault();
            Swal.fire({
            title: 'Está Seguro de Eliminar el Registro?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.value) {
                $.get(url_global+"/admin/colaboradors/"+id+"/destroyao/",function(response){
                    verao();
                });
            }
            })
    }

    function limpia(id){
        $('#tipo_i').val(1);
        $('#id_i').val(id);
        $('#empresa_i').val(null);
        $('#area_i').val('1');
        $('#area_i').select2();
        $('#area_i').select2({
                placeholder:"Área",
                dropdownParent: $('#ingantecedente')
            });
        $('#puesto_id_i').val('1');
        $('#puesto_id_i').select2();
        $('#puesto_id_i').select2({
                placeholder:"Ocupación",
                dropdownParent: $('#ingantecedente')
            });
        $('#fecha_i').val(null);
        $('#tiempo_i').val(null);
        $('#exposicion_i').val(null);
        $('#epp_i').val(null);
        $('#cretiro_i').val(null);
    }
</script>
@endsection