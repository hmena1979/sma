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
    METALES PESADOS
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->metalpesado->fecha)) }}</td>
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
    <br>
    <table class="espaciado">
        <thead>
            <tr>
                <th width='35%' class="lineasupinf">EXAMEN REALIZADO</th>
                <th width='15%' class="lineasupinf text-center">METODO</th>
                <th width='15%' class="lineasupinf text-center">RESULTADO</th>
                <th width='35%' class="lineasupinf text-center">RANGO REFERENCIAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>COBRE SERICO</th>
                <td class="text-center">{{ $detservicio->metalpesado->cobre_met }}</td>
                <td class="text-center">{{ $detservicio->metalpesado->cobre_res }}</td>
                <td class="text-center">17 - 70 años: 70-155mg/dl.</td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>PLOMO</th>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->plomo_met }}</td>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->plomo_res }}</td>
                <td class="text-center">ADULTOS:&lt;10 Ug/dl. <br>Exposision No significativa</td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>CADMIO</th>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->cadmio_met }}</td>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->cadmio_res }}</td>
                <td class="text-center">&lt;=1.7Ug/L Adultos No</td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>ZINC</th>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->zinc_met }}</td>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->zinc_res }}</td>
                <td class="text-center">70 - 115Ug/dl.</td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>MERCURIO</th>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->mercurio_met }}</td>
                <td valign='top' class="text-center">{{ $detservicio->metalpesado->mercurio_res }}</td>
                <td class="text-center"> &lt;10ug/L.</td>
            </tr>
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
                    @if (empty($detservicio->metalpesado->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->metalpesado->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->metalpesado->doctor_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>