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
<div class="text-center letra12 negrita">
    CONFIDENCIAL
</div>
<br><br><br>
<div class="detallegrande">
    <table class="">
        <tbody>
            <tr>
                <th class="text-left" width='30%'>EMPRESA</th>
                <td class="text-left" width='70%'>{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
            <tr>
                <th class="text-left" width='30%'>R.U.C.</th>
                <td class="text-left" width='70%'>{{ $detservicio->servicio->cliente->numdoc }}</td>
            </tr>
            <tr>
                <th class="text-left" width='30%'>DIRECCIÓN</th>
                <td class="text-left" width='70%'>{{ $detservicio->servicio->cliente->direccion }}</td>
            </tr>
            <tr>
                <th class="text-left" width='30%'>FECHA DE EVALUACIÓN</th>
                <td class="text-left" width='70%'>{{ date('d-m-Y',strtotime($detservicio->servicio->fecha)) }}</td>
            </tr>
            <tr>
                <th class="text-left" width='30%'>TIPO DE EXAMEN</th>
                <td class="text-left" width='70%'>{{ $detservicio->diagocu.' '.$detservicio->diagcie }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="text-center letra12 negrita">
    INFORME MEDICO DE RESULTADOS DEL PACIENTE
</div>
<div class="letra11">
    {!! htmlspecialchars_decode($detservicio->informe->confidencial) !!}
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="50%" class="text-left">
                <div class="letra12 negrita">
                    RECOMENDACIONES:
                </div>
            </td>
            <td width="50%" class="text-right letra12 negrita">
                Dia {{ substr($detservicio->servicio->fecha,8,2) }} del mes {{ $meses[substr($detservicio->servicio->fecha,5,2)] }} de {{ substr($detservicio->servicio->fecha,0,4) }}
            </td>
        </tr>
    </thead>
</table>
<div class="letra11 cuadro120">
    {{ $detservicio->recomendaciones }}
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="30%" class="text-center">
                <br><br><br><br>
                .....................................<br>
                Firma
            </td>
            <td width="20%" class="text-right letra12 negrita">
                <div class="huella"></div>
            </td>
            <td width="50%" class="text-center letra10">
                <div>
                    @if (empty($detservicio->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                        @endif
                    @endif
                    __________________________________ <br>
                    MEDICO RESPONSABLE<br>
                    FIRMA Y SELLO
                </div>
            </td>
        </tr>
    </thead>
</table>
<br><br>
<div class="text-justify piechico">
    POR CUANTO: EL PACIENTE TIENE DERECHO A LA RESERVA DE SU INFORMACIÓN CLÍNICA, CON LAS EXCEPCIONES QUE ESTABLECE LA LEY 26842, LEY GENERAL DE SALUD, Y EN ESPECIAL DE LA INFORMACIÓN CLÍNICA SENSIBLE RELATIVA A SU SALUD 
    FÍSICA O MENTAL, CARACTERÍSTICAS FÍSICAS, MORALES O EMOCIONALES, HECHOS O CIRCUNSTANCIAS DE SU VIDA AFECTIVA O FAMILIAR, HÁBITOS PERSONALES Y OTRAS QUE CORRESPONDEN A SU ESFERA ÍNTIMA.
</div>