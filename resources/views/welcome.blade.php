@extends('master')
@section('title','CSO San Miguel Arcangel')


@section('content')
<div class="mtop30">
</div>
<div class="carro">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('static/images/carr1.png') }}" class=" w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ url('static/images/carr2.jpg') }}" class=" w-100" alt="...">
            </div>       
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span><i class="fas fa-chevron-left"></i></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span><i class="fas fa-chevron-right"></i></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
<div class="mtop30">
</div>
@endsection