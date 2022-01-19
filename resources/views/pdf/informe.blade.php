<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Informe</title>
        <link rel="stylesheet" href="{{ url('/static/css/report.css?v='.time()) }}">
	</head>
	<body>
        <div class="footer letra9">
            {{ $sede->direccion}}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ $param->dominio }}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ $param->email }} &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;marmerimo@hotmail.com<br>
            Telef. {{ $sede->telefono}}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Cel: {{ $sede->celular}}
        </div>
        @php $pagina = 0; @endphp
        @if (kvfa2($detalle,'1'))
            @php $pagina = 1; @endphp
            @include('pdf.medicos.01consentimiento')            
        @endif
        @if (kvfa2($detalle,'2'))
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.02consentimiento')
        @endif
        @if (kvfa2($detalle,'3') && $detservicio->informe()->count() <> 0)
            @if (!empty($detservicio->informe->confidencial))
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.03confidencial')
            @endif
        @endif
        @if (kvfa2($detalle,'4') && $detservicio->informe()->count() <> 0)
            @if (!empty($detservicio->informe->dj))
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.04decljurada')
            @endif
        @endif
        @if (kvfa2($detalle,'5') && $detservicio->informe()->count() <> 0)
            @if (!empty($detservicio->informe->drogas))
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.05drogas')
            @endif
        @endif
        @if (kvfa2($detalle,'6') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.06fchmedocu')
        @endif
        @if (kvfa2($detalle,'7') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.07osteomuscular')
        @endif
        @if (kvfa2($detalle,'8') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.08musculoesqueletica')
        @endif
        @if (kvfa2($detalle,'9') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.09infemo')
        @endif
        @if (kvfa2($detalle,'10') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.10aptitud')
        @endif
        @if (kvfa2($detalle,'11') && $detservicio->examedico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.11aptitud02')
        @endif
        @if (kvfa2($detalle,'12')
                && $detservicio->examedico()->count() <> 0 
                && $detservicio->exaaudio()->count() <> 0
                && $detservicio->exaradio()->count() <> 0
                && $detservicio->exaespiro()->count() <> 0
                && $detservicio->exaoftalmo()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.12fcha16')
        @endif
        @if (kvfa2($detalle,'13') && $detservicio->exapsico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.13psicoformato02')
        @endif
        @if (kvfa2($detalle,'14') && $detservicio->exapsico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.14psicoformato03')
        @endif
        @if (kvfa2($detalle,'15') && $detservicio->exapsico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.15psicoInforme')
        @endif
        @if (kvfa2($detalle,'16') && $detservicio->exaaudio()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.16fchaudio')
        @endif
        @if (kvfa2($detalle,'41') && $detservicio->exaaudio()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.41fchaudioresultado')
        @endif
        @if (kvfa2($detalle,'17') && $detservicio->exaoftalmo()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.17fchoftalmo')
        @endif
        @if (kvfa2($detalle,'18') && $detservicio->exaodonto()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.18odontograma')
        @endif
        @if (kvfa2($detalle,'19') && $detservicio->exaekg()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.19electro')
        @endif
        @if (kvfa2($detalle,'20') && $detservicio->exaderma()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.20derma')
        @endif
        @if (kvfa2($detalle,'21') && $detservicio->exaespiro()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.21infespiro')
        @endif
        @if (kvfa2($detalle,'22') && $detservicio->exaespiro()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.22cueespiro')
        @endif
        @if (kvfa2($detalle,'23') && $detservicio->exaalt18()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.23altura18')
        @endif
        @if (kvfa2($detalle,'24') && $detservicio->exaalt25()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.24altura25')
        @endif
        @if (kvfa2($detalle,'25') && $detservicio->exaconfinado()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.25confinados')
        @endif
        @if (kvfa2($detalle,'40') && $detservicio->exapsicosometrica()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.medicos.40psicosometrica')
        @endif
        @if (kvfa2($detalle,'26') && $detservicio->exacovidant()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @php
                $qrcodec19ant = base64_encode(QrCode::format('svg')
                ->size(100)
                ->errorCorrection('H')
                ->generate($param->dominio.'/verificar/'.str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'26'));
            @endphp
            @include('pdf.medicos.26covidantigeno')
        @endif
        @if (kvfa2($detalle,'27') && $detservicio->exacovidpr()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @php
                $qrcodec19pr = base64_encode(QrCode::format('svg')
                ->size(100)
                ->errorCorrection('H')
                ->generate($param->dominio.'/verificar/'.str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'27'));
            @endphp
            @include('pdf.medicos.27covidpr')
        @endif
        @if (kvfa2($detalle,'28') && $detservicio->exacovidpcr()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @php
                $qrcodec19pcr = base64_encode(QrCode::format('svg')
                ->size(100)
                ->errorCorrection('H')
                ->generate($param->dominio.'/verificar/'.str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'28'));
            @endphp
            @include('pdf.medicos.28covidpcr')
        @endif
        @if (kvfa2($detalle,'29') && $detservicio->bioquimica()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.29bioquimica')
        @endif
        @if (kvfa2($detalle,'30') && $detservicio->hemograma()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.30hemograma')
        @endif
        @if (kvfa2($detalle,'31') && $detservicio->orina()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.31orina')
        @endif
        @if (kvfa2($detalle,'32') && $detservicio->hece()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.32heces')
        @endif
        @if (kvfa2($detalle,'33') && $detservicio->parasitologia()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.33parasitologia')
        @endif
        @if (kvfa2($detalle,'34') && $detservicio->bacteriologia()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.34bacteriologia')
        @endif
        @if (kvfa2($detalle,'35') && $detservicio->urocultivo()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.35urocultivo')
        @endif
        @if (kvfa2($detalle,'36') && $detservicio->toxicologico()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.36toxicologico')
        @endif
        @if (kvfa2($detalle,'37') && $detservicio->metalpesado()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.37metalpesado')
        @endif
        @if (kvfa2($detalle,'38') && $detservicio->bioquimica()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.38lipidico')
        @endif
        @if (kvfa2($detalle,'39') && $detservicio->bioquimica()->count() <> 0)
            @if ($pagina <> 0)
                <div style="page-break-after:always;"></div>
            @endif
            @php $pagina = 1; @endphp
            @include('pdf.laboratorio.39resumen')
        @endif
	</body>
</html>