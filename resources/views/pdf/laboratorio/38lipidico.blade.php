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
    PERFIL LIPÍDICO
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->fecha_bio)) }}</td>
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
                <th valign='top'>Colesterol Total</th>
                <td class="text-center" valign='top'>Enzimático AA</td>
                <td class="text-center" valign='top'>{{ $laboratorio['Colesterol'] }}</td>
                <td class="text-center">
                    Deseable: &lt;= 200 mg/dl <br>
                    Moderado alto: 200 - 239 mg/dl <br>
                    Elevado: &gt;= 240 mg/dl
                </td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>Colesterol - HDL</th>
                <td class="text-center" valign='top'>Enzimático</td>
                <td class="text-center" valign='top'>{{ $laboratorio['HDL'] }}</td>
                <td class="text-center">
                    Deseable: &gt;= 60 mg/dl <br>
                    Intermedio: 40 - 59 mg/dl
                </td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th valign='top'>Colesterol - LDL</th>
                <td class="text-center" valign='top'>Enzimático</td>
                <td class="text-center" valign='top'>{{ $laboratorio['LDL'] }}</td>
                <td class="text-center">
                    Riesgo Bajo: &lt;= 129 mg/dl <br>
                    Elevado: 130 - 189 mg/dl <br>
                    Muy elevado: &gt;= 190 mg/dl
                </td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            @if (array_key_exists('VLDL', $laboratorio))
            <tr>
                <th valign='top'>Colesterol - VLDL</th>
                <td class="text-center" valign='top'>Enzimático</td>
                <td class="text-center" valign='top'>{{ $laboratorio['VLDL']  }}</td>
                <td class="text-center">
                    2 - 30 mg/dl
                </td>
            </tr>
            <tr><td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            @endif
            <tr>
                <th valign='top'>Trigliceridos</th>
                <td class="text-center" valign='top'>GPO/PAP AA</td>
                <td class="text-center" valign='top'>{{ $laboratorio['Trigliceridos'] }}</td>
                <td class="text-center">
                    Deseable: &lt;= 150 mg/dl <br>
                    Intermedio: 150 - 199 mg/dl <br>
                    Elevado: 200 - 499 mg/dl <br>
                    Muy elevado: &gt;= 500 mg/dl
                </td>
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
                    @if (empty($detservicio->doctor_bio))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->doctor_bio]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->doctor_bio]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>