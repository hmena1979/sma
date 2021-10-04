@extends('connect.master')
@section('title','CSO SMA - Ingreso')

@section('content')
<div class="box box_login shadow">
    <div class="header">
		<a href="#">
			<img src="{{ url('/static/images/logo.png') }}" alt="">
		</a>
	</div>
    <div class="inside">
        {!! Form::open(['route' => 'company.postlogin']) !!}
        <label for="num_doc">RUC o Número de Documento</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">#</div>
            </div>
            {!! Form::text('num_doc', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
        </div>
    
        <label class="mtop16" for="clave">Contraseña</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
            {!! Form::password('clave', ['class'=>'form-control','autocomplete'=>'off']) !!}
        </div>
    
        {!! Form::submit('Ingresar',['class'=>'btn btn-login btn-block mtop16']) !!}
        {!! Form::close() !!}
    </div>
</div>
{{-- <div class="box box_login shadow">
	<div class="header">
		<a href="#">
			<img src="{{ url('/static/images/logo.png') }}" alt="">
		</a>
	</div>
	<div class="inside">
		{!! Form::open(['url' => '/login']) !!}
		<label for="num_doc">RUC o Número de Documento</label>
		<div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">#</div>
            </div>
			{!! Form::text('num_doc', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
		</div>

		<label class="mtop16" for="clave">Contraseña</label>
		<div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
			{!! Form::password('clave', ['class'=>'form-control','autocomplete'=>'off']) !!}
		</div>
		{!! Form::submit('Ingresar',['class'=>'btn btn-danger btn-block mtop16']) !!}
		{!! Form::close() !!}

		<div class="footer">
		</div>
	</div>
</div> --}}
@stop