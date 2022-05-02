<nav class="mt-2">
	<div class="mobile">
		<div class="header">
			<div class="logo">
				<img src="{{ url('/static/images/logo4.png') }}" alt="">
			</div>
			<div class="more">
				<button id="bmore"><i class="fas fa-bars"></i></button>
			</div>
		</div>
		<div id="links" class="link collapsed">
			<a class="btn" href="#">Nosotros</a>
			<a class="btn" href="#">Servicios</a>
			<a class="btn" href="#">Casos</a>
			<a class="btn" href="#">Contacto</a>
			<a class="btn" href="#">Login</a>
		</div>
	</div>

	<div class="desktop">
		<div class="logo">
			<img src="{{ url('/static/images/logo4.png') }}" alt="">
		</div>
		<div class="primary">
			<a class="btn" href="#">Nosotros</a>
			<a class="btn" href="#">Servicios</a>
			<a class="btn" href="#">Casos</a>
		</div>

		<div class="secondary full">
			<a class="btn" href="#">Contacto</a>
			<a class="btn" href="#">Login</a>
		</div>

		<div class="secondary mini">
			<a href="#" class="more"><i class="fas fa-bars"></i></a>
			<div class="submenu">
				<a class="btn" href="#">Contacto</a>
				<a class="btn" href="#">Login</a>
			</div>
		</div>
	</div>
</nav>
<script>
	const bmore = document.querySelector('#bmore');
	const links = document.querySelector('#links');
	bmore.addEventListener('click',(e) => {
		links.classList.toggle('collapsed')
	});
</script>