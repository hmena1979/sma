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
    PRUEBA RÁPIDA SARS-CoV-2
</div>
<br>
<br>
<div class="detalleocupacional letra11">
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde letra9">
                        <tbody>
                            <tr>
                                <th width='20%'>PACIENTE:</th>
                                <td width='40%'>{{ $detservicio->colaborador->nombres }}</td>
                                <th width='25%'>EDAD:</th>
                                <td width='15%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                            </tr>
                            <tr>
                                <th>SEXO:</th>
                                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
                                <th>DOCUMENTO N°:</th>
                                <td>{{ $detservicio->colaborador->numdoc }}</td>
                            </tr>
                            <tr>
                                <th>INDICADO Dr(a):</th>
                                <td>MÉDICO TRATANTE</td>
                                <th>CÓDIGO DE ATENCIÓN:</th>
                                <td>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}27</td>
                            </tr>
                            <tr>
                                <th>TIPO DE ATENCIÓN:</th>
                                <td>AMBULATORIO</td>
                                <th>TIPO DE PACIENTE:</th>
                                <td>{{ $detservicio->servicio->cliente->tipo==1?'EMPRESA':'PARTICULAR' }}</td>
                            </tr>
                            <tr>
                                <th>FECHA DE ATENCION:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidpr->fecha_tm)) }}</td>
                                <th>FECHA DE REPORTE:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidpr->fecha_val)) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>
<table class="cuadrosborde letra9">
    <tbody>
        <tr>
            <th width='20%' class="text-left">MUESTRA:</th>
            <td width='80%'>SANGRE TOTAL</td>
        </tr>
        <tr>
            <th class="text-left">TIPO DE EXAMEN:</th>
            <td>PRUEBA RAPIDA PARA COVID-19</td>
        </tr>
        <tr>
            <th class="text-left">METODO:</th>
            <td>INMUNOCROMATOGRAFICO CUALITATIVO</td>
        </tr>
    </tbody>
</table>
<br><br>
<table class="cuadrosborde">
    <tbody>
        <tr>
            <td width='70%'>
                <table class="cuadro letra9 espaciado">
                    <thead>
                        <tr>
                            <th width='60%' class="lineainferior">ANALISIS</th>
                            <th width='40%' class="lineainferior">RESULTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">AC ANTI COVID-19 IgG (PRUEBA RÁPIDA)</td>
                            <td class="text-center">{{ $detservicio->exacovidpr->igg==1?'REACTIVO':'NO REACTIVO' }}</td>
                        </tr>
                        <tr>
                            <td class="text-center">AC ANTI COVID-19 IgM (PRUEBA RÁPIDA)</td>
                            <td class="text-center">{{ $detservicio->exacovidpr->igm==1?'REACTIVO':'NO REACTIVO' }}</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td width='30%'></td>
        </tr>
    </tbody>
</table>

<div class="altura100"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center">
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
                    @if (!empty($detservicio->exacovidant->doctor_id))
                    ...........................................................
                    <div class="lchicas">
                        Nombre, Firma y sello del médico Evaluador
                    </div>
                    @endif
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
                <img src="data:image/png;base64,{!! $qrcodec19pr !!}" alt="">
            </td>
            <td width='90%'>
                PUEDE VERIFICAR ESTE DOCUMENTO  EN: <br>
                {{ $param->dominio.'/verificar/' }} <br>
                CON EL CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'27' }}
            </td>
        </tr>
    </tbody>
</table>