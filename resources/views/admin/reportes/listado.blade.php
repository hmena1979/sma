{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Reportes')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.evaluacion',$detservicio) }}"><i class="fas fa-address-card"></i> Evaluación</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid mb-4">
		@include('admin.examens.cabecera')
        <div class="row mtop16">
            <div class="col-md-12">
                {!! Form::open(['route'=>['admin.reportes.print',$detservicio],'target'=>"_blank"]) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Reportes
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Generar', ['class'=>'btn btn-convertir mt-2','id'=>'generar']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                <strong>EXÁMENES REALIZADOS:</strong>
                            </h5>
                        </div>
                        {{-- <div class="row">
                            @foreach ($reportes as $reporte)
                                <div class="col-md-4 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header colorprin">
                                            <strong>{{$reporte->nombre}}</strong>
                                        </div>
                                        <div class="card-body">
                                            @foreach ($reporte->detreportes as $det)
                                            <label>
                                                {!! Form::checkbox('detalle[]', $det->id, null,['class' => 'mr-1']) !!}
                                                {{ $det->nombre}}
                                            </label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                        </div> --}}
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>CONSENTIMIENTO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 1, false,['class' => 'mr-1']) !!}
                                            FORMATO 01
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 2, false,['class' => 'mr-1']) !!}
                                            FORMATO 02
                                        </label><br>
                                    </div>
                                </div>
                            </div>
                            @if ($detservicio->informe()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>INFORME</strong>
                                    </div>
                                    <div class="card-body">
                                        @if (!empty($detservicio->informe->confidencial))
                                        <label>
                                            {!! Form::checkbox('detalle[]', 3, false,['class' => 'mr-1']) !!}
                                            INFORME CONFIDENCIAL
                                        </label><br>
                                        @endif
                                        @if (!empty($detservicio->informe->dj))
                                        <label>
                                            {!! Form::checkbox('detalle[]', 4, false,['class' => 'mr-1']) !!}
                                            DECLARACIÓN JURADA
                                        </label><br>
                                        @endif
                                        @if (!empty($detservicio->informe->drogas))
                                        <label>
                                            {!! Form::checkbox('detalle[]', 5, false,['class' => 'mr-1']) !!}
                                            DROGAS EN ORINA
                                        </label><br>                                            
                                        @endif
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->examedico()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>MÉDICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 6, false,['class' => 'mr-1']) !!}
                                            FICHA MEDICO OCUPACIONAL
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 7, false,['class' => 'mr-1']) !!}
                                            EXAMEN OSTEOMUSCULAR
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 8, false,['class' => 'mr-1']) !!}
                                            FICHA MUSCULO ESQUELÉTICA
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 9, false,['class' => 'mr-1']) !!}
                                            INFORME EVALUACIÓN MEDICO
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 10, false,['class' => 'mr-1']) !!}
                                            APTITUD
                                        </label><br>
                                        @if ($detservicio->informe()->count() > 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 11, false,['class' => 'mr-1']) !!}
                                            APTITUD MODELO II
                                        </label><br>                                            
                                        @endif
                                        @if ($detservicio->examedico()->count() <> 0 
                                            && $detservicio->exaaudio()->count() <> 0
                                            && $detservicio->exaradio()->count() <> 0
                                            && $detservicio->exaespiro()->count() <> 0
                                            && $detservicio->exaoftalmo()->count() <> 0)
                                            <label>
                                                {!! Form::checkbox('detalle[]', 12, false,['class' => 'mr-1']) !!}
                                                FICHA N° 16
                                            </label><br>                                            
                                        @endif
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exapsico()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>PSICOLÓGICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 13, false,['class' => 'mr-1']) !!}
                                            FORMATO 02
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 14, false,['class' => 'mr-1']) !!}
                                            FORMATO 03
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 15, false,['class' => 'mr-1']) !!}
                                            INFORME PSICOLÓGICO OCUPACIONAL
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaaudio()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>AUDIOLÓGICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 16, false,['class' => 'mr-1']) !!}
                                            FICHA AUDIOLÓGICA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaoftalmo()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>OFTALMOLÓGICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 17, false,['class' => 'mr-1']) !!}
                                            FICHA OFTALMOLÓGICA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaodonto()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>ODONTOLOGICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 18, false,['class' => 'mr-1']) !!}
                                            ODONTOGRAMA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaekg()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>ELECTROCARDIOGRAMA</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 19, false,['class' => 'mr-1']) !!}
                                            ELECTROCARDIOGRAMA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaderma()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>DERMATOLÓGICO</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 20, false,['class' => 'mr-1']) !!}
                                            FICHA DERMATOLÓGICA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaespiro()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>ESPIROMETRÍA</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 21, false,['class' => 'mr-1']) !!}
                                            INFORME ESPIROMETRÍA
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('detalle[]', 22, false,['class' => 'mr-1']) !!}
                                            CUESTIONARIO ESPIROMETRÍA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exaalt18()->count() <> 0 || $detservicio->exaalt25()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>TRABAJO EN ALTURA</strong>
                                    </div>
                                    <div class="card-body">
                                        @if ($detservicio->exaalt18()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 23, false,['class' => 'mr-1']) !!}
                                            A PARTIR DE 1.8 M
                                        </label><br>
                                        @endif
                                        @if ($detservicio->exaalt25()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 24, false,['class' => 'mr-1']) !!}
                                            MAYOR 2,500 m.s.n.m.
                                        </label><br>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($detservicio->exaconfinado()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>ESPACIOS CONFINADOS</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 25, false,['class' => 'mr-1']) !!}
                                            ESPACIOS CONFINADOS
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exapsicosometrica()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>PSICOSOMÉTRICA</strong>
                                    </div>
                                    <div class="card-body">
                                        <label>
                                            {!! Form::checkbox('detalle[]', 40, false,['class' => 'mr-1']) !!}
                                            EVALUACIÓN PSICOSOMÉTRICA
                                        </label><br>
                                    </div>
                                </div>
                            </div>                                
                            @endif
                            @if ($detservicio->exacovidant()->count() <> 0 || $detservicio->exacovidpr()->count() <> 0 || 
                                $detservicio->exacovidpcr()->count() <> 0)
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>COVID-19</strong>
                                    </div>
                                    <div class="card-body">
                                        @if ($detservicio->exacovidant()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 26, false,['class' => 'mr-1']) !!}
                                            COVID19 - ANTIGENO
                                        </label><br>
                                        @endif
                                        @if ($detservicio->exacovidpr()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 27, false,['class' => 'mr-1']) !!}
                                            COVID19 - PRUEBA RÁPIDA
                                        </label><br>                                            
                                        @endif
                                        @if ($detservicio->exacovidpcr()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 28, false,['class' => 'mr-1']) !!}
                                            COVID19 - PCR
                                        </label><br>                                            
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-4 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header colorprin">
                                        <strong>LABORATORIO</strong>
                                    </div>
                                    <div class="card-body">
                                        @if ($detservicio->bioquimica()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 29, false,['class' => 'mr-1']) !!}
                                            BIOQUIMICA
                                        </label><br>
                                        @endif
                                        @if ($detservicio->hemograma()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 30, false,['class' => 'mr-1']) !!}
                                            HEMOGRAMA
                                        </label><br>                                            
                                        @endif
                                        @if ($detservicio->orina()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 31, false,['class' => 'mr-1']) !!}
                                            ORINA
                                        </label><br>
                                        @endif
                                        @if ($detservicio->hece()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 32, false,['class' => 'mr-1']) !!}
                                            HECES COMPLETA
                                        </label><br>
                                        @endif
                                        @if ($detservicio->parasitologia()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 33, false,['class' => 'mr-1']) !!}
                                            PARASITOLOGIA
                                        </label><br>
                                        @endif
                                        @if ($detservicio->bacteriologia()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 34, false,['class' => 'mr-1']) !!}
                                            BACTERIOLOGIA
                                        </label><br>
                                        @endif
                                        @if ($detservicio->urocultivo()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 35, false,['class' => 'mr-1']) !!}
                                            UROCULTIVO
                                        </label><br>
                                        @endif
                                        @if ($detservicio->toxicologico()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 36, false,['class' => 'mr-1']) !!}
                                            TOXICOLÓGICO
                                        </label><br>
                                        @endif
                                        @if ($detservicio->metalpesado()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 37, false,['class' => 'mr-1']) !!}
                                            METALES PESADOS
                                        </label><br>
                                        @endif
                                        @if ($detservicio->bioquimica()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 38, false,['class' => 'mr-1']) !!}
                                            PERFIL LIPIDICO
                                        </label><br>
                                        @endif
                                        @if ($detservicio->bioquimica()->count() <> 0)
                                        <label>
                                            {!! Form::checkbox('detalle[]', 39, false,['class' => 'mr-1']) !!}
                                            RESUMEN
                                        </label><br>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')

<script>
    var url_global='{{url("/")}}';
    $(document).ready(function(){
    });
</script>
@endsection