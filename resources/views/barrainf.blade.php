@if ($param)
<div class="footer mtop16">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 text-center">
			{{-- <img src="{{ url('static/images/logo.png') }}" class="figure-img img-fluid rounded ml-2 mtop16" alt=""> --}}
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
			<h3 class="mtop30 titfoot">CONTACTO</h3>
			<h3 class="mtop16">Llámanos al:</h3>
			<p class="lisfoot">{{ $param->telefono }}</p>
			 @foreach($sedes as $sede)
				 <h3 class="mtop30">{{ $sede->nombre }} </h3>
				<p>{{ $sede->direccion }}</p>
			 @endforeach
			 <br><br>
		</div>
		<div class="col-md-3">
			<h3 class="mtop30 titfoot">SÍGUENOS</h3>
			<a href=""><i class="fab fa-facebook-square icofoot"></i></a>
			<a href=""><i class="fab fa-youtube icofoot"></i></a>
			<a href=""><i class="fab fa-instagram-square icofoot"></i></a>
			<p class="lisfoot mtop30">{{$param->razsoc}} <br/> RUC: {{$param->ruc}}</p>
		</div>
	</div>
	</div>
</div>
<nav class="navbar fixed-bottom botinf nav justify-content-center">
	<a class="btn telfinf" href="#"><i class="fas fa-phone-alt"></i> {{ $param->telefono }}</a>
	<a class="btn telfinf ml-4" href="{{ route('verifica') }}"><i class="fas fa-check-double"></i> Verifica tu examen</a>
</nav>
@endif