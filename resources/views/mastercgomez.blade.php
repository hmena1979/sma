<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Abogado, Servicios Legales, Jurista, Especialista inyermediación laboral"/>
    <meta name="keywords" content="Abogado, judicial, laboral"/>

        {{-- <title>CNN Respira</title> --}}

	{{-- <meta charset="utf-8"> --}}
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">

	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
	<link rel="stylesheet" href="{{ url('/static/css/cgomez.css?v='.time()) }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    {{-- <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet"> --}}

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/static/js/admin.js') }}"></script>
    {{-- <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script> --}}
    <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/js/all.js') }}"></script>
    <script>
		$(function () {
        	$('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</head>
<body>
    <div class="container-md">
        @include('nav-superior')
        @section('content')
        @show
        <div class="menu-bar">
            @if(Session::has('message'))
                    <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
                        {{ Session::get('message') }}
                        @if ($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <script>
                            $('.alert').slideDown();
                            setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                        </script>                
                    </div>
            @endif
        </div>
    </div>
</body>
</html>