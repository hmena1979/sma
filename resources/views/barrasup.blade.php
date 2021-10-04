<nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-md botsup">
	<a class="" href=" {{ url('/') }} ">
		<img src="{{ url('static/images/logobar_3.png') }}" width="290" height="70" class="d-inline-block align-top" alt="">
	</a>

	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<ul class="navbar-nav ml-auto text-center">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('company.login') }}">Clientes</a>
			</li>
			<li class="nav-item">
				{{-- <a class="nav-link" href="{{ url('/admin') }}">Corporativo</a> --}}
				@auth
					<a href="{{ route('admin.inicio') }}" class="nav-link">Intranet</a>
				@else
					<a href="{{ route('login') }}" class="nav-link">Corporativo</a>
				@endauth
			</li>
		</ul>
	</div>
</nav>
