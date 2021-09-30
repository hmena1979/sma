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
        <div class="row mtop16">
            <div class="col-md-12">
                {!! Form::model($detservicio, ['route'=>['admin.laboratorio.updatbioquimica',$detservicio], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Laboratorio Bioquímica
                        </h2>
                        <ul>
                            @can('admin.laboratorio.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha_bio', 'Fecha:',['class' => 'colorprin']) !!}
                                {!! Form::date('fecha_bio', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('doctor_bio', 'DOCTOR:',['class' => 'colorprin']) !!}
                                {!! Form::select('doctor_bio',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="panelprin shadow">
                                    <div class="headercontent">
                                        <h2 class="title">Pruebas Realizadas:</h2>
                                        <ul>
                                            <li>
                                                <button type="button" class="btn btn-convertir mt-2" data-toggle="modal" data-target="#ingpruebai" onclick="limpia('{{ $detservicio->id }}');">
                                                    Agregar Prueba
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inside">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="" id="tpruebas">
                                                    {{-- @include('admin.colaboradors.antocupacional')    --}}
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
                {!! Form::close() !!}
                <!-- Modal -->
                <div class="modal fade" id="ingpruebai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title colorprin" id="exampleModalLabel">Bioquímica - Pruebas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        {!! Form::hidden('tipo_i', 1, ['id'=>'tipo_i']) !!}
                                        {!! Form::hidden('id_i', 1, ['id'=>'id_i']) !!}
                                        {!! Form::hidden('detservicio_id_i', $detservicio->id, ['id'=>'detservicio_id_i']) !!}
                                        {!! Form::label('prueba_idi', 'Prueba:') !!}
                                        {!! Form::select('prueba_idi',$pruebas,null,['class'=>'custom-select','id'=>'prueba_idi','placeholder' => 'Prueba']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('valor_i', 'Valor:') !!}
                                        {!! Form::text('valor_i', null, ['class'=>'form-control mayuscula','id'=>'valor_i','maxlength'=>'20','autocomplete'=>'off']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id='addpruebai' class="btn btn-convertir" data-dismiss="modal">Guardar</button>
                                {{-- {!! Form::submit('Guardar', ['class'=>'btn btn-convertir', 'id'=>'addantecedente']) !!} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal -->
                <!-- Modal -->
                <div class="modal fade" id="ingpruebae" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title colorprin" id="exampleModalLabel">Bioquímica - Pruebas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        {!! Form::hidden('tipo_e', 1, ['id'=>'tipo_e']) !!}
                                        {!! Form::hidden('id_e', 1, ['id'=>'id_e']) !!}
                                        {!! Form::hidden('detservicio_id_e', $detservicio->id, ['id'=>'detservicio_id_e']) !!}
                                        {!! Form::label('prueba_ide', 'Prueba:') !!}
                                        {!! Form::select('prueba_ide',$pruebast,null,['class'=>'custom-select','id'=>'prueba_ide','placeholder' => 'Prueba']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label('valor_e', 'Valor:') !!}
                                        {!! Form::text('valor_e', null, ['class'=>'form-control mayuscula','id'=>'valor_e','maxlength'=>'20','autocomplete'=>'off']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id='addpruebae' class="btn btn-convertir" data-dismiss="modal">Guardar</button>
                                {{-- {!! Form::submit('Guardar', ['class'=>'btn btn-convertir', 'id'=>'addantecedente']) !!} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal -->
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
    verpr();
    // $('#ingprueba').on('show.bs.modal',function(){
    //     $('#prueba_idi').trigger('focus');
    // });
    $('#addpruebai').click(function(){
        var ant = {
            'tipo':$('#tipo_i').val(),
            'id':$('#id_i').val(),
            'prueba_id':$('#prueba_idi').val(),
            'valor':$('#valor_i').val(),
        };

        var envio = JSON.stringify(ant);

        $.get(url_global+"/admin/laboratorio/"+envio+"/addpr/",function(response){
            verpr();
        });
    });

    $('#addpruebae').click(function(){
        var ant = {
            'tipo':$('#tipo_e').val(),
            'id':$('#id_e').val(),
            'prueba_id':$('#prueba_ide').val(),
            'valor':$('#valor_e').val(),
        };

        var envio = JSON.stringify(ant);

        $.get(url_global+"/admin/laboratorio/"+envio+"/addpr/",function(response){
            verpr();
        });
    });
    function verpr(){
        var detservicio = $('#detservicio_id_i').val();
        $.get(url_global+"/admin/laboratorio/"+detservicio+"/tabla_pr/",function(response){
            $('#tpruebas').empty();
            $('#tpruebas').html(response);
        });
    }

    function editpr(id){
        $('#tipo_e').val(2),
        $.get(url_global+"/admin/laboratorio/"+id+"/buspr/",function(response){
            $('#id_e').val(id),
            $('#prueba_ide').val(response['prueba_id']),
            $('#prueba_ide').select2();
            $('#prueba_ide').select2({
                placeholder:"Prueba",
                dropdownParent: $('#ingpruebae')
            });
            // alert(response['prueba_id']);
            if(response['prueba_id'] <= 12){
                $('#prueba_ide').prop('disabled',true);
            }else{
                $('#prueba_ide').prop('disabled',false);
            }
            $('#valor_e').val(response['valor'])
        });
    }

    function destroypr(id){
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
                $.get(url_global+"/admin/laboratorio/"+id+"/destroypr/",function(response){
                    verpr();
                });
            }
            })
    }

    function limpia(id){
        $('#tipo_i').val(1);
        $('#id_i').val(id);
        $('#prueba_idi').val(null);
        $('#prueba_idi').select2();
        $('#prueba_idi').select2({
            placeholder:"Seleccione Prueba Realizada",
            dropdownParent: $('#ingpruebai')
        });
        $('#valor_i').val(null);
    }

</script>
@endsection