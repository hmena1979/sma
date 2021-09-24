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
    PRUEBA SARS-CoV-2 ANTIGENO
</div>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <td width='78%'></td>
            <th width='22%' class="celda text-center">Código: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}26</th>
        </tr>
    </tbody>
</table>
<br>
<div class="detalleocupacional letra11">
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde letra9">
                        <tbody>
                            <tr>
                                <th width='15%'>PACIENTE:</th>
                                <td width='55%'>{{ $detservicio->colaborador->nombres }}</td>
                                <th width='10%'>EDAD:</th>
                                <td width='20%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                            </tr>
                            <tr>
                                <th>DOCUMENTO N°:</th>
                                <td>{{ $detservicio->colaborador->numdoc }}</td>
                                <th>SEXO:</th>
                                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
                            </tr>
                            <tr>
                                <th>MEDICO:</th>
                                <td>
                                    @if (!empty($detservicio->exacovidant->doctor_id))
                                        {{ $doctor[$detservicio->exacovidant->doctor_id] }}
                                    @endif
                                </td>
                                <th>INGRESO:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidant->fecha_tm)) }}</td>
                            </tr>
                            <tr>
                                <th>CLIENTE:</th>
                                <td>{{ $detservicio->servicio->cliente->tipo==1?'EMPRESA':'PARTICULAR' }}</td>
                                <th>EMISIÓN:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidant->fecha_val)) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>
<table class="cuadrosborde letra10">
    <tbody>
        <tr>
            <th width='25%'>Examen</th>
            <th width='25%'>Resultado</th>
            <th width='25%'>Unidades</th>
            <th width='25%'>Valor referencial</th>
        </tr>
        <tr>
            <td class="text-center">SARS-CoV-2 (COVID-19) ANTIGENO</td>
            <td class="text-center">{{ $detservicio->exacovidant->antigeno==1?'POSITIVO':'NEGATIVO' }}</td>
            <td class="text-center"></td>
            <td class="text-center">Normal: negativo</td>
        </tr>
    </tbody>
</table>
<br><br>
<div class="letra10 negrita">
    METODO
</div>
<br>
<div class="letra10 text-justify">
    La prueba SARS-CoV-2 ANTIGENO está basado en tecnología de inmunoensayo. Sirve 
    para la detección rápida y cualitativa del antígeno de la proteína de la nucleocápside del SARS-CoV-2.
</div>
<div class="altura100"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->exacovidant->biologo_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->exacovidant->biologo_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->exacovidant->biologo_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                    ...........................................................
                    <div class="lchicas">
                        Biólogo
                    </div>
                </div>
            </td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->exacovidant->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->exacovidant->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->exacovidant->doctor_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                    ...........................................................
                    <div class="lchicas">
                        Nombre, Firma y sello del médico Evaluador
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<br><br><br><br>
<table class="cuadrosborde letra10">
    <tbody>
        <tr>
            <td width='10%'>
                <img src="data:image/png;base64,{!! $qrcodec19ant !!}" alt="">
            </td>
            <td width='90%'>
                PUEDE VERIFICAR ESTE DOCUMENTO  EN: <br>
                {{ $param->dominio.'/verificar/' }} <br>
                CON EL CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'26' }}
            </td>
        </tr>
    </tbody>
</table>