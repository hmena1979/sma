@extends('admin.master')
@section('title','Sedes')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.sedes.index') }}"><i class="fas fa-boxes"></i> Sedes</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        {!! Form::open(['route'=>'admin.sedes.store']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-boxes"></i> Sedes</h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('activo', 'Activo:') !!}
                                {!! Form::select('activo',[1=>'Si',2=>'No'],1,['class'=>'custom-select']) !!}
							</div>
							<div class="col-md-5 form-group">
                                {!! Form::label('nombre', 'Nombre:') !!}
								{!! Form::text('nombre', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-5 form-group">
                                {!! Form::label('direccion', 'Dirección:') !!}
								{!! Form::text('direccion', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('telefono', 'Teléfono:') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control numero','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('celular', 'Celular:') !!}
								{!! Form::text('celular', null, ['class'=>'form-control numero','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('email', 'E-mail:') !!}
                                {!! Form::text('email', null, ['class'=>'form-control','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="colorprin">
                            <h4>Audiometro</h4>
                        </div>
						<div class="row">
							<div class="col-md-2 form-group">
                                {!! Form::label('aud_marca', 'Marca:') !!}
								{!! Form::text('aud_marca', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('aud_modelo', 'Modelo:') !!}
								{!! Form::text('aud_modelo', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('aud_calibra', 'Calibración:') !!}
								{!! Form::text('aud_calibra', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
						</div>
                        <div class="colorprin mt-1">
                            <h4>Ubicación por defecto para Colaboradores</h4>
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
        $('#departamento').select2({
            placeholder:"Departamento"
        });

        $('#provincia').select2({
            placeholder:"Provincia"
        });

        $('#ubigeo').select2({
            placeholder:"Ubigeo"
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
            });
        });
    });
</script>
@endsection