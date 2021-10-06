{{-- @extends('adminlte::page') --}}
@extends('admin.master')

@section('title','Pruebas Bioquímica')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.pruebas.index') }}"><i class="fas fa-microscope"></i> Pruebas Bioquímica</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        {!! Form::open(['route'=>'admin.pruebas.store']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-microscope"></i> Pruebas Bioquímica</h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
                            <div class="col-md-5 form-group">
                                {!! Form::label('nombre', 'Nombre:') !!}
								{!! Form::text('nombre', null, ['class'=>'form-control','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-5 form-group">
                                {!! Form::label('medida', 'Medida:') !!}
								{!! Form::text('medida', null, ['class'=>'form-control','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tipo', 'Tipo:') !!}
                                {!! Form::select('tipo',[1=>'NORMAL',2=>'SEXO',3=>'EDAD'],1,['class'=>'custom-select']) !!}
                            </div>
						</div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('valorref01', 'Valor Referencial I:') !!}
								{!! Form::text('valorref01', null, ['class'=>'form-control','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('valorref02', 'Valor Referencial II:') !!}
								{!! Form::text('valorref02', null, ['class'=>'form-control','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('metodo', 'Método:') !!}
								{!! Form::text('metodo', 'BIOQUIMICA', ['class'=>'form-control','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('toxicologico', 'Toxicológico:') !!}
                                {!! Form::select('toxicologico',[1=>'SI',2=>'NO'],2,['class'=>'custom-select']) !!}
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
        
    });
</script>
@endsection