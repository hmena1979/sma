@extends('connect.master')
@section('title','CSO SMA - Ingreso')

@section('content')
<div class="box box_login shadow">
	<div class="header">
		<a href="{{ url('/') }}">
			<img src="{{ url('/static/images/logo.png') }}" alt="">
		</a>
	</div>
	<div class="inside">
		{!! Form::open(['route' => 'resultado']) !!}
		<label for="codigo">Código</label>
		<div class="input-group">
			<div class="input-group-text"><i class="fas fa-book-medical"></i></div>
			{!! Form::text('codigo', null, ['class'=>'form-control numero','autocomplete'=>'off']) !!}
		</div>
		{!! Form::submit('Buscar',['class'=>'btn btn-login btn-block mtop16']) !!}
		{!! Form::close() !!}

		<div class="footer">
		</div>
	</div>
</div>
@stop