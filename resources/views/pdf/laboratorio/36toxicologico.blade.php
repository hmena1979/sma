<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="10%" class="text-left">
                <img src="{{ url('/static/images/logo.jpg') }}" width="80px" alt="">
            </td>
            <td width="30%" class="text-left lchicas negrita">
                {{ $param->razsoc }}
            </td>
            <td width="60%" valign='top'>
                <div class="text-right lchicas">
                    COLABORADOR: <strong>{{ $detservicio->colaborador->nombres }}</strong>
                </div>
            </td>
        </tr>
    </thead>
</table>
<br>
<div class="text-center letra12 negrita">
    TOXICOLÓGICO
</div>
<br>
<br>
<div class="tablasinbordes letra9">
    <table class="">
        <tbody>
            <tr>
                <th width='10%'>Código</th>
                <td width='60%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='10%'>Fecha</th>
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->fecha_tox)) }}</td>
            </tr>
            <tr>
                <th>Paciente</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th>Sexo</th>
                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
                <th>Chequeo</th>
                <td>{{ $detservicio->servicio->eval->nombre }}</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <div class="text-justify letra10">
        SE REALIZÓ ESTUDIO TOXICOLÓGICO EN ORINA OBTENIDA DEL PACIENTE. SE OBTUVIERON LOS SIGUIENTES RESULTADOS:
    </div>
    <br>
    <table class="espaciado">
        <thead>
            <tr>
                <th width='35%' class="lineasupinf">PRUEBA</th>
                <th width='15%' class="lineasupinf text-center">RESULTADO</th>
                <th width='35%' class="lineasupinf text-center">VALORES REFERENCIALES</th>
                <th width='15%' class="lineasupinf text-center">MÉTODO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detservicio->toxicologico as $tox)
            <tr>
                <td>{{ $tox->prueba->nombre }}</td>
                <td class="text-center">{{ $tox->resultado==1?'POSITIVO':'NEGATIVO'.' '.$tox->prueba->medida }}</td>
                <td class="text-center">
                    {{ valreferencial($tox->prueba->tipo, \Carbon\Carbon::parse($tox->detservicio->colaborador->fecnac)->age,
                    $tox->detservicio->colaborador->sexo_id,$tox->prueba->valorref01,$tox->prueba->valorref02) }}
                </td>
                <td class="text-center">{{ $tox->prueba->metodo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
<br>

<div class="altura50"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center"></td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->doctor_tox))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->doctor_tox]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->doctor_tox]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>