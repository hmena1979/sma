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
    DECLARACIÓN JURADA
</div>
<br><br><br>
<br>
<div class="letra11">
    {!! htmlspecialchars_decode($detservicio->informe->dj) !!}
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="50%" class="text-center letra10"></td>
            <td width="30%" class="text-center">
                <br><br><br><br>
                ..............................................<br>
                Firma<br>
                N° Documento: <strong>{{ $detservicio->colaborador->numdoc }}</strong>
            </td>
            <td width="20%" class="text-right letra12 negrita">
                <div class="huella"></div>
            </td>
        </tr>
    </thead>
</table>
<br><br><br><br><br>
<div class="text-right letra12">
    PIURA, {{ substr($detservicio->servicio->fecha,8,2) }} DEL MES DE {{ strtoupper($meses[substr($detservicio->servicio->fecha,5,2)]) }} DE {{ substr($detservicio->servicio->fecha,0,4) }}
</div>