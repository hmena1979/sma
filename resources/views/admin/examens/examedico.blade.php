{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	{{-- <li class="breadcrumb-item">
		<a href="{{ route('admin.inicio') }}"><i class="fas fa-address-card"></i> Servicios</a>
	</li> --}}
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
                        {{-- {{ dd($detservicio->colaborador->nombres) }} --}}
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Colaborador: <strong> {{ $detservicio->colaborador->numdoc.'-'.$detservicio->colaborador->nombres }}</strong>
                             / Edad: <strong>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}} años</strong>
                        </h2>
                    </div>
					<div class="inside">
						{{-- {!! Form::open(['url'=>'/admin/categoria/add/'.$module]) !!} --}}
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('departamento', 'Departamento:') !!}
								{!! Form::text('departamento', $detservicio->colaborador->depart->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('provincia', 'Provincia:') !!}
								{!! Form::text('provincia', $detservicio->colaborador->prov->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ubigeo', 'Ubigeo:') !!}
								{!! Form::text('ubigeo', $detservicio->colaborador->ubig->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('domicilio', 'Domicilio:') !!}
								{!! Form::text('domicilio', $detservicio->colaborador->domicilio, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('telefono', 'Telefono:') !!}
								{!! Form::text('telefono', $detservicio->colaborador->telefono, ['class'=>'form-control', 'disabled']) !!}
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('residencia', 'Residencia:') !!}
								{!! Form::text('residencia', $detservicio->colaborador->residencia = 1 ? 'SI' : 'NO', ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tieresi', 'Tiempo Residencia:') !!}
								{!! Form::text('tieresi', $detservicio->colaborador->tieresi, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('lugnac', 'Lugar Nacimiento:') !!}
								{!! Form::text('lugnac', $detservicio->colaborador->lugnac, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('estciv_id', 'Estado Civil:') !!}
								{!! Form::text('estciv_id', $detservicio->colaborador->estciv->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('gradinst_id', 'Grado Instrucción:') !!}
								{!! Form::text('gradinst_id', $detservicio->colaborador->gradinst->nombre, ['class'=>'form-control', 'disabled']) !!}
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		{{-- <div class="row mtop16">
			<div class="col-md-12">
				<div class="panelprin shadow">
                    {!! Form::model($detservicio, ['route'=>['admin.servicios.updatevaluacion',$detservicio], 'method'=> 'put']) !!}
                    <div class="headercontent">
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Información del Puesto al que postula
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
                        <div class="row">                                    
                            <div class="col-md-4 form-group">
                                {!! Form::label('area_id', 'Área:') !!}
                                {!! Form::select('area_id',$area,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('puesto_id', 'Ocupación:') !!}
                                {!! Form::select('puesto_id',$puesto,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('ocuactual', 'Ocupación Actual:') !!}
                                {!! Form::text('ocuactual', null, ['class'=>'form-control mayuscula','maxlength'=>'30']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('lugar', 'Lugar:') !!}
                                {!! Form::select('lugar',[1=>'SUPERFICIE',2=>'SUBSUELO'],null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('tielabor', 'Tiempo Laborado:') !!}
								{!! Form::text('tielabor', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('riesgos', 'Principales Riesgos:') !!}
								{!! Form::text('riesgos', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('seguridad', ' Medidas de Seguridad:') !!}
								{!! Form::text('seguridad', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                        </div>
                    </div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div> --}}
        <div class="row mtop16 mb-5">
            <div class="col-md-12">
                {!! Form::model($detservicio->examedico, ['route'=>['admin.examens.updatexamed',$detservicio->examedico], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Médica
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
                                <a class="nav-item nav-link active" id="nav-evaluacion-tab" data-toggle="tab" href="#nav-evaluacion" role="tab" aria-controls="nav-evaluacion" aria-selected="true">Evaluación</a>
                                <a class="nav-item nav-link" id="nav-cuestionario-tab" data-toggle="tab" href="#nav-cuestionario" role="tab" aria-controls="nav-cuestionario" aria-selected="false">Cuestionario de Síntomas</a>
                                <a class="nav-item nav-link" id="nav-exploracion-tab" data-toggle="tab" href="#nav-exploracion" role="tab" aria-controls="nav-exploracion" aria-selected="false">Exploración Física</a>
                                <a class="nav-item nav-link" id="nav-columna-tab" data-toggle="tab" href="#nav-columna" role="tab" aria-controls="nav-columna" aria-selected="false">Columna Vertebral</a>
                                <a class="nav-item nav-link" id="nav-musculo-tab" data-toggle="tab" href="#nav-musculo" role="tab" aria-controls="nav-musculo" aria-selected="false">Músculo Esqueletico</a>
                                <a class="nav-item nav-link" id="nav-resultado-tab" data-toggle="tab" href="#nav-resultado" role="tab" aria-controls="nav-resultado" aria-selected="false">Resultado</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                                @include('admin.examens.medico.evaluacion')
                            </div>
                            <div class="tab-pane fade" id="nav-cuestionario" role="tabpanel" aria-labelledby="nav-cuestionario-tab">
                                @include('admin.examens.medico.cuestionario')
                            </div>
                            <div class="tab-pane fade" id="nav-exploracion" role="tabpanel" aria-labelledby="nav-exploracion-tab">
                                @include('admin.examens.medico.exploracion')
                            </div>
                            <div class="tab-pane fade" id="nav-columna" role="tabpanel" aria-labelledby="nav-columna-tab">
                                @include('admin.examens.medico.columna')
                            </div>
                            <div class="tab-pane fade" id="nav-musculo" role="tabpanel" aria-labelledby="nav-musculo-tab">
                                @include('admin.examens.medico.musculo')
                            </div>
                            <div class="tab-pane fade" id="nav-resultado" role="tabpanel" aria-labelledby="nav-resultado-tab">
                                @include('admin.examens.medico.resultado')
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
        $('#colaborador_id').select2({
            placeholder:"Ingrese 4 dígitos del Documento o Nombre",
            minimumInputLength: 4,
            ajax:{
                url: "{{ route('admin.busquedas.colaborador') }}",
                dataType:'json',
                delay:250,
                processResults:function(response){
                    return{
                        results: response
                    };
                },
                cache: true,
            }
        });

        $('#talla').blur(function(){
            if($('#talla').val().length != 0 && $('#peso').val().length != 0){
                var imc = parseFloat($('#peso').val()) /(parseFloat($('#talla').val()) * parseFloat($('#talla').val()));
                imc = Redondea(imc,2);
                $('#imc').val(imc);
            }
        });
        $('#peso').blur(function(){
            if($('#talla').val().length != 0 && $('#peso').val().length != 0){
                var imc = parseFloat($('#peso').val()) /(parseFloat($('#talla').val()) * parseFloat($('#talla').val()));
                imc = Redondea(imc,2);
                $('#imc').val(imc);
            }
        });

        $('#pasisto').blur(function(){
            if($('#pasisto').val().length != 0 && $('#padisto').val().length != 0){
                var pa =$('#pasisto').val() + '/'+ $('#padisto').val();
                $('#pa').val(pa);
            }
        });
        $('#padisto').blur(function(){
            if($('#pasisto').val().length != 0 && $('#padisto').val().length != 0){
                var pa =$('#pasisto').val() + '/'+ $('#padisto').val();
                $('#pa').val(pa);
            }
        });


        $('#area_id').select2({
            placeholder:"Área"
        });
        $('#puesto_id').select2({
            placeholder:"Ocupación"
        });

        actualizapuntos();
        actualizapuntos2();

        $('#h1_11').click(function(){
            $('#h1_1pto').val(1);
            actualizapuntos();
        });
        $('#h1_12').click(function(){
            $('#h1_1pto').val(2);
            actualizapuntos();
        });
        $('#h1_13').click(function(){
            $('#h1_1pto').val(3);
            actualizapuntos();
        });
        $('#h1_14').click(function(){
            $('#h1_1pto').val(4);
            actualizapuntos();
        });

        $('#h1_21').click(function(){
            $('#h1_2pto').val(1);
            actualizapuntos();
        });
        $('#h1_22').click(function(){
            $('#h1_2pto').val(2);
            actualizapuntos();
        });
        $('#h1_23').click(function(){
            $('#h1_2pto').val(3);
            actualizapuntos();
        });
        $('#h1_24').click(function(){
            $('#h1_2pto').val(4);
            actualizapuntos();
        });

        $('#h1_31').click(function(){
            $('#h1_3pto').val(1);
            actualizapuntos();
        });
        $('#h1_32').click(function(){
            $('#h1_3pto').val(2);
            actualizapuntos();
        });
        $('#h1_33').click(function(){
            $('#h1_3pto').val(3);
            actualizapuntos();
        });
        $('#h1_34').click(function(){
            $('#h1_3pto').val(4);
            actualizapuntos();
        });

        $('#h1_41').click(function(){
            $('#h1_4pto').val(1);
            actualizapuntos();
        });
        $('#h1_42').click(function(){
            $('#h1_4pto').val(2);
            actualizapuntos();
        });
        $('#h1_43').click(function(){
            $('#h1_4pto').val(3);
            actualizapuntos();
        });
        $('#h1_44').click(function(){
            $('#h1_4pto').val(4);
            actualizapuntos();
        });

        $('#h2_11').click(function(){
            $('#h2_1pto').val(1);
            actualizapuntos2();
        });
        $('#h2_12').click(function(){
            $('#h2_1pto').val(2);
            actualizapuntos2();
        });
        $('#h2_13').click(function(){
            $('#h2_1pto').val(3);
            actualizapuntos2();
        });

        $('#h2_21').click(function(){
            $('#h2_2pto').val(1);
            actualizapuntos2();
        });
        $('#h2_22').click(function(){
            $('#h2_2pto').val(2);
            actualizapuntos2();
        });
        $('#h2_23').click(function(){
            $('#h2_2pto').val(3);
            actualizapuntos2();
        });

        $('#h2_31').click(function(){
            $('#h2_3pto').val(1);
            actualizapuntos2();
        });
        $('#h2_32').click(function(){
            $('#h2_3pto').val(2);
            actualizapuntos2();
        });
        $('#h2_33').click(function(){
            $('#h2_3pto').val(3);
            actualizapuntos2();
        });

        $('#h2_41').click(function(){
            $('#h2_4pto').val(1);
            actualizapuntos2();
        });
        $('#h2_42').click(function(){
            $('#h2_4pto').val(2);
            actualizapuntos2();
        });
        $('#h2_43').click(function(){
            $('#h2_4pto').val(3);
            actualizapuntos2();
        });

        
    });

    function actualizapuntos(){
        $('#h1_11').removeClass('btn-primary btn-default');
        $('#h1_12').removeClass('btn-primary btn-default');
        $('#h1_13').removeClass('btn-primary btn-default');
        $('#h1_14').removeClass('btn-primary btn-default');

        $('#h1_21').removeClass('btn-primary btn-default');
        $('#h1_22').removeClass('btn-primary btn-default');
        $('#h1_23').removeClass('btn-primary btn-default');
        $('#h1_24').removeClass('btn-primary btn-default');

        $('#h1_31').removeClass('btn-primary btn-default');
        $('#h1_32').removeClass('btn-primary btn-default');
        $('#h1_33').removeClass('btn-primary btn-default');
        $('#h1_34').removeClass('btn-primary btn-default');

        $('#h1_41').removeClass('btn-primary btn-default');
        $('#h1_42').removeClass('btn-primary btn-default');
        $('#h1_43').removeClass('btn-primary btn-default');
        $('#h1_44').removeClass('btn-primary btn-default');
        if($('#h1_1pto').val() == 1){
            $('#h1_11').removeClass('btn-primary btn-default');
            $('#h1_11').addClass('btn btn-primary');
        }
        if($('#h1_1pto').val() == 2){
            $('#h1_12').removeClass('btn-primary btn-default');
            $('#h1_12').addClass('btn btn-primary');
        }
        if($('#h1_1pto').val() == 3){
            $('#h1_13').removeClass('btn-primary btn-default');
            $('#h1_13').addClass('btn btn-primary');
        }
        if($('#h1_1pto').val() == 4){
            $('#h1_14').removeClass('btn-primary btn-default');
            $('#h1_14').addClass('btn btn-primary');
        }

        if($('#h1_2pto').val() == 1){
            $('#h1_21').removeClass('btn-primary btn-default');
            $('#h1_21').addClass('btn btn-primary');
        }
        if($('#h1_2pto').val() == 2){
            $('#h1_22').removeClass('btn-primary btn-default');
            $('#h1_22').addClass('btn btn-primary');
        }
        if($('#h1_2pto').val() == 3){
            $('#h1_23').removeClass('btn-primary btn-default');
            $('#h1_23').addClass('btn btn-primary');
        }
        if($('#h1_2pto').val() == 4){
            $('#h1_24').removeClass('btn-primary btn-default');
            $('#h1_24').addClass('btn btn-primary');
        }

        if($('#h1_3pto').val() == 1){
            $('#h1_31').removeClass('btn-primary btn-default');
            $('#h1_31').addClass('btn btn-primary');
        }
        if($('#h1_3pto').val() == 2){
            $('#h1_32').removeClass('btn-primary btn-default');
            $('#h1_32').addClass('btn btn-primary');
        }
        if($('#h1_3pto').val() == 3){
            $('#h1_33').removeClass('btn-primary btn-default');
            $('#h1_33').addClass('btn btn-primary');
        }
        if($('#h1_3pto').val() == 4){
            $('#h1_34').removeClass('btn-primary btn-default');
            $('#h1_34').addClass('btn btn-primary');
        }

        if($('#h1_4pto').val() == 1){
            $('#h1_41').removeClass('btn-primary btn-default');
            $('#h1_41').addClass('btn btn-primary');
        }
        if($('#h1_4pto').val() == 2){
            $('#h1_42').removeClass('btn-primary btn-default');
            $('#h1_42').addClass('btn btn-primary');
        }
        if($('#h1_4pto').val() == 3){
            $('#h1_43').removeClass('btn-primary btn-default');
            $('#h1_43').addClass('btn btn-primary');
        }
        if($('#h1_4pto').val() == 4){
            $('#h1_44').removeClass('btn-primary btn-default');
            $('#h1_44').addClass('btn btn-primary');
        }
        var total = parseInt($('#h1_1pto').val())+parseInt($('#h1_2pto').val())+parseInt($('#h1_3pto').val())+parseInt($('#h1_4pto').val());
        $('#h1_tpto').val(total);
    }

    function actualizapuntos2(){
        $('#h2_11').removeClass('btn-primary btn-default');
        $('#h2_12').removeClass('btn-primary btn-default');
        $('#h2_13').removeClass('btn-primary btn-default');

        $('#h2_21').removeClass('btn-primary btn-default');
        $('#h2_22').removeClass('btn-primary btn-default');
        $('#h2_23').removeClass('btn-primary btn-default');

        $('#h2_31').removeClass('btn-primary btn-default');
        $('#h2_32').removeClass('btn-primary btn-default');
        $('#h2_33').removeClass('btn-primary btn-default');

        $('#h2_41').removeClass('btn-primary btn-default');
        $('#h2_42').removeClass('btn-primary btn-default');
        $('#h2_43').removeClass('btn-primary btn-default');
        if($('#h2_1pto').val() == 1){
            $('#h2_11').removeClass('btn-primary btn-default');
            $('#h2_11').addClass('btn btn-primary');
        }
        if($('#h2_1pto').val() == 2){
            $('#h2_12').removeClass('btn-primary btn-default');
            $('#h2_12').addClass('btn btn-primary');
        }
        if($('#h2_1pto').val() == 3){
            $('#h2_13').removeClass('btn-primary btn-default');
            $('#h2_13').addClass('btn btn-primary');
        }

        if($('#h2_2pto').val() == 1){
            $('#h2_21').removeClass('btn-primary btn-default');
            $('#h2_21').addClass('btn btn-primary');
        }
        if($('#h2_2pto').val() == 2){
            $('#h2_22').removeClass('btn-primary btn-default');
            $('#h2_22').addClass('btn btn-primary');
        }
        if($('#h2_2pto').val() == 3){
            $('#h2_23').removeClass('btn-primary btn-default');
            $('#h2_23').addClass('btn btn-primary');
        }

        if($('#h2_3pto').val() == 1){
            $('#h2_31').removeClass('btn-primary btn-default');
            $('#h2_31').addClass('btn btn-primary');
        }
        if($('#h2_3pto').val() == 2){
            $('#h2_32').removeClass('btn-primary btn-default');
            $('#h2_32').addClass('btn btn-primary');
        }
        if($('#h2_3pto').val() == 3){
            $('#h2_33').removeClass('btn-primary btn-default');
            $('#h2_33').addClass('btn btn-primary');
        }

        if($('#h2_4pto').val() == 1){
            $('#h2_41').removeClass('btn-primary btn-default');
            $('#h2_41').addClass('btn btn-primary');
        }
        if($('#h2_4pto').val() == 2){
            $('#h2_42').removeClass('btn-primary btn-default');
            $('#h2_42').addClass('btn btn-primary');
        }
        if($('#h2_4pto').val() == 3){
            $('#h2_43').removeClass('btn-primary btn-default');
            $('#h2_43').addClass('btn btn-primary');
        }
        var total = parseInt($('#h2_1pto').val())+parseInt($('#h2_2pto').val())+parseInt($('#h2_3pto').val())+parseInt($('#h2_4pto').val());
        $('#h2_tpto').val(total);
    }

    function destroycol(){
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
               this.submit();
            }
            })
    }

</script>
@endsection