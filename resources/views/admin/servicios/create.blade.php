{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.index') }}"><i class="fas fa-address-card"></i> Servicios</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        {!! Form::open(['route'=>'admin.servicios.store']) !!}
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-address-card"></i> Servicios</h2>
                            <ul>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </ul>
                        </div>
					<div class="inside">
						{{-- {!! Form::open(['url'=>'/admin/categoria/add/'.$module]) !!} --}}
						<div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('evaluacion', 'Evaluación:') !!}
								{!! Form::select('evaluacion',$evaluacion,'2',['class'=>'custom-select']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('fecha', 'Fecha:') !!}
								{!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-7 form-group">
                                {!! Form::label('cliente_id', 'Cliente:') !!}
								{!! Form::select('cliente_id',$clientes,null,['class'=>'custom-select', 'placeholder'=>'Cliente']) !!}
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('departamento', 'Departamento:') !!}
                                {!! Form::select('departamento',$departamentos,'20',['class'=>'custom-select', 'id'=>'departamento']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('provincia', 'Provincia:') !!}
                                {!! Form::select('provincia',$provincias,null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ubigeo', 'Ubigeo:') !!}
                                {!! Form::select('ubigeo',[],null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('ubicacion', 'Ubicación:') !!}
								{!! Form::text('ubicacion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('glosa', 'Glosa:') !!}
								{!! Form::text('glosa', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('examenes', 'Examenes:') !!}
                                {!! Form::select('examenes',$examen,null,['class'=>'custom-select', 'multiple'=>'multiple']) !!}
							</div>
                        </div>                       
					</div>				
				</div>
			</div>
            
		</div>		
        {!! Form::close() !!}
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')
<script>
    var url_global='{{url("/")}}';
	$(document).ready(function(){
        $('#cliente_id').select2({
            placeholder:"Cliente"
        });
        $('#departamento').select2({
            placeholder:"Departamento"
        });

        $('#provincia').select2({
            placeholder:"Provincia"
        });

        $('#ubigeo').select2({
            placeholder:"Ubigeo"
        });
        $('#examenes').select2({
            placeholder:"Exámenes"
        });

        $('#departamento').on('select2:close',function(){
            var departamento = this.value;
            $.get(url_global+"/admin/busquedas/"+departamento+"/provincia/",function(response){
                $('#provincia').empty();
                for(i=0;i<response.length;i++){
                    $('#provincia').append("<option value='"+response[i].codigo+"'>"
                        + response[i].nombre
                        + "</option>");
                }
                $('#provincia').val(null);
                $('#ubigeo').empty();
            });
        });

        $('#provincia').on('select2:close',function(){
            var provincia = this.value;
            $.get(url_global+"/admin/busquedas/"+provincia+"/ubigeo/",function(response){
                $('#ubigeo').empty();
                for(i=0;i<response.length;i++){
                    $('#ubigeo').append("<option value='"+response[i].codigo+"'>"
                        + response[i].nombre
                        + "</option>");
                }
                // $('#ubigeo').val(null);
            });
        });

    });
</script>
@endsection