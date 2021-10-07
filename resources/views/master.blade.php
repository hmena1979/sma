<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>

    <meta name="description" content="Centro de Salud Ocupacional San Miguel de Arcangel, Salud Ocupacional"/>
    <meta name="keywords" content="San Miguel, Salud Ocupacional, Examen Covid-19, Evaluación Ocupacional"/>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">

	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
	<link rel="stylesheet" href="{{ url('/static/css/inicio.css?v='.time()) }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    {{-- <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet"> --}}

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/static/js/admin.js') }}"></script>
    {{-- <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"></script> --}}
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/all.js') }}"></script>
    <script>
		$(function () {
        	$('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</head>
<body>
    <!--
    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
        }
    </style>
    -->
	<div class="menu-bar">
	    @include('barrasup')
        @if(Session::has('message'))
            <div class="container">
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
            </div>        
        @endif
	    @section('content')
		@show
        @include('barrainf')
    </div>
</body>
</html>