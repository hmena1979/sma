<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<img src="{{ url('static/images/logo.png') }}" class="img img-fluid">
		</div>
		<div class="user">
			<span class="subtyitle">Cliente:</span>
			<div class="name">
				{{ $cliente->razsoc }}
				<a href=" {{ route('company.logout') }} " data-toggle="tooltip" data-placement="top" title = 'Salir'>

					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
			{{-- {{ $cliente->numdoc }} --}}
		</div>
	</div>
	<div class="main">
		<ul>
			@foreach ($sedes as $sede)
			<li>
				<a href="{{ route('company.reportes.index',$sede->id) }}"><i class="fas fa-chalkboard-teacher"></i> {{ ucwords(strtolower($sede->nombre)) }}</a>
			</li>				
			@endforeach
			{{-- <li>
				<a href="{{ url('/admin/servicios') }}"><i class="fas fa-file-medical"></i> Servicios</a>
			</li>
			<li>
				<a href="{{ url('/admin/especialidads') }}"><i class="fas fa-hand-holding-medical"></i> Especialidades</a>
			</li>
			<li>
				<a href="{{ url('/admin/sedes') }}"><i class="fas fa-city"></i> Sedes</a>
			</li>
			<li>
				<a href="{{ url('/admin/noticias') }}"><i class="far fa-newspaper"></i> Noticias</a>
			</li>
			<div class="dropdown-divider"></div>						
			<li>
				<a href="{{ url('/admin/import') }}"><i class="fas fa-file-medical"></i> Importar Aptitud</a>
			</li>
			<div class="dropdown-divider"></div>						
			<li>
				<a href="{{ url('/admin/usuarios') }}"><i class="fas fa-user-friends"></i> Usuarios</a>
			</li> --}}
			
		</ul>
	</div>
</div>
