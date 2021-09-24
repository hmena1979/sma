<div class="text-right lchicas">
    COLABORADOR: <strong>{{ $detservicio->colaborador->nombres }}</strong>
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="10%" class="text-left">
                <img src="{{ url('/static/images/logo.jpg') }}" width="80px" alt="">
            </td>
            <td width="30%" class="text-left lchicas negrita">
                {{ $param->razsoc }}
            </td>
            <td width="60%"></td>
        </tr>
    </thead>
</table>
<br><br>
<div class="text-center letra12 negrita">
    AUTORIZACION PARA EXAMEN EN DROGAS EN ORINA
</div>
<br><br><br>
<br>
<div class="letra11 text-justify">
    {!! htmlspecialchars_decode($detservicio->informe->drogas) !!}
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->novocaina==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                NOVOCAINA
            </td>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->dextrometorfano==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                DEXTROMETORFANO
            </td>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->ibuprofeno==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                IBUPROFENO
            </td>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->naproxeno==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                NAPROXENO
            </td>
        </tr>
        <tr>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->ranitidina==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                RANITIDINA
            </td>
            <td width="25%" class="text-left letra10">
                ( @if($detservicio->informe->penicilina==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                PENICILINA
            </td>
            <td width="25%" class="text-left letra10">
                @if(empty($detservicio->informe->otros))
                ( {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} ) OTROS
                @else
                ( X ) {{$detservicio->informe->otros}}
                @endif
            </td>
        </tr>
    </thead>
</table>

<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="50%" class="text-left letra12">
                <br><br><br><br><br><br>
                ..................................................................<br>
                Firma del paciente o responsable legal<br>
                N° Documento: <strong>{{ $detservicio->colaborador->numdoc }}</strong>
            </td>
            <td width="30%" class="text-left letra12">
                <br><br><br><br><br><br>
                ..............................................<br>
                Firma de un testigo<br>
                N° Documento:
            </td>
            <td width="20%" class="text-right letra12 negrita">
                
            </td>
        </tr>
    </thead>
</table>
<br><br><br><br><br><br><br><br>
<div class="text-right letra12">
    PIURA, {{ substr($detservicio->servicio->fecha,8,2) }} DEL MES DE {{ strtoupper($meses[substr($detservicio->servicio->fecha,5,2)]) }} DE {{ substr($detservicio->servicio->fecha,0,4) }}
</div>

