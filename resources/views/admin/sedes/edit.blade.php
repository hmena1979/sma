@extends('admin.master')
@section('title','Sedes')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.sedes.index') }}"><i class="fas fa-boxes"></i> Sedes</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        {!! Form::model($sede,['route'=>['admin.sedes.update',$sede],'method'=>'put']) !!}
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
        // document.getElementById('guardar').addEventListener("click",function(){
        //     // document.getElementById("ape_pat").disabled = false;
        //     // document.getElementById("ape_mat").disabled = false;
        //     // document.getElementById("nombres").disabled = false;
        // });
    });
</script>
@endsection