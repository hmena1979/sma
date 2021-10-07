@extends('master')
@section('title','CSO San Miguel Arcangel')


@section('content')
<div class="mtop30">
</div>
<div class="row">
	{{-- <div class="col-5 text-center">
		<a href="{{ url('/') }}">
			<img class="img-fluid" src="{{ url('/static/images/logo.png') }}" alt="">
		</a>
	</div> --}}
	<div class="col-12 text-center">
		@if ($valida == 0)
		<br>
		<h1 class="especial mr-1">EVALUACIÓN NO ENCONTRADA</h1>
		<p class="lisfoot">Puede comunicarse con nosotros al número de contacto o visitarnos en nuestras sedes. <br> Información que se encuentra en la parte inferior de la página .</p>
		@else
		<h1 class="especial mr-1">{{ $titulo }}</h1><br>
		<p class="lisfoot">
			<strong>FECHA</strong><br>
			{{ $fecha }}<br><br>
			<strong>EMPRESA</strong><br>
			{{ $empresa }}<br><br>
			<strong>NOMBRE</strong><br>
			{{ $nombre }}<br><br>
			<strong>RESULTADO</strong><br>
			{{ $resultado }}<br>
		</p>
		
		@endif
	</div>
</div>
<div class="mtop30">
</div>
@endsection