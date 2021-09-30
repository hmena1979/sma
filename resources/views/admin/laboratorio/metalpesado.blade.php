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
                {!! Form::model($detservicio->metalpesado, ['route'=>['admin.laboratorio.updatmetalpesado',$detservicio->metalpesado], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Metales Pesados
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
                            <div class="col-md-6">
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th width='50%'>EXAMEN REALIZADO</th>
                                            <th width='25%'>METODO</th>
                                            <th width='25%'>RESULTADO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>COBRE SERICO</th>
                                            <td>{!! Form::text('cobre_met', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}</td>
                                            <td>{!! Form::text('cobre_res', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}</td>
                                        </tr>
                                        <tr>
                                            <th>PLOMO</th>
                                            <td>{!! Form::text('plomo_met', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}</td>
                                            <td>{!! Form::text('plomo_res', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}</td>
                                        </tr>
                                        <tr>
                                            <th>CADMIO</th>
                                            <td>{!! Form::text('cadmio_met', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}</td>
                                            <td>{!! Form::text('cadmio_res', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}</td>
                                        </tr>
                                        <tr>
                                            <th>ZINC</th>
                                            <td>{!! Form::text('zinc_met', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}</td>
                                            <td>{!! Form::text('zinc_res', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}</td>
                                        </tr>
                                        <tr>
                                            <th>MERCURIO</th>
                                            <td>{!! Form::text('mercurio_met', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}</td>
                                            <td>{!! Form::text('mercurio_res', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
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