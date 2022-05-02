@extends('mastercgomez')
@section('title','CG Abogados')

@section('content')
<div class="row">
    <div class="contenedor">
        <div class="main">
            <div class="row">
                <div class="col-5">
                    <p class="titulo">SERVICIO JURÍDICO<br/>INTEGRAL</p>
                    <p class="text-justify">
                        Somos un grupo de profesionales abogados, consultores y 
                        asesores especializados comprometidos en brindar soluciones legales velando por sus intereses
                    </p>
                </div>
                <div class="col-1"></div>
                <div class="col-6">
                    <div class="qr">
                        {!! QrCode::size(100)->errorCorrection('H')->generate($qr); !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="contenedor">
        <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-archway"></i> <b>PROCESOS</b></h5>
                  <p class="card-text">Patrocinio legal en Procesos Civiles, Penales, Familiares y Laborales.</p>
                  <a href="#" class="btn btn-primary">Conoce más</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-boxes"></i> <b>TRÁMITES</b></h5>
                  <p class="card-text">Gestión profesional de trámites en instituciones públicas y privadas.</p>
                  <a href="#" class="btn btn-primary">Conoce más</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="far fa-file-alt"></i> <b>REDACCIÓN</b></h5>
                  <p class="card-text">Redacción de documentos legales: Memoriales, contratos, cartas, informes, entre otros.</p>
                  <a href="#" class="btn btn-primary">Conoce más</a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="row mtop16">

</div>
@endsection