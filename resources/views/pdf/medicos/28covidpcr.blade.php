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
    PRUEBA PCR SARS-CoV-2
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
                                <td>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}28</td>
                            </tr>
                            <tr>
                                <th>TIPO DE PACIENTE:</th>
                                <td>{{ $detservicio->servicio->cliente->razsoc}}</td>
                                <th>TIPO DE ATENCIÓN:</th>
                                <td>AMBULATORIO</td>
                            </tr>
                            <tr>
                                <th>FECHA DE ATENCION:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_tm)) }}</td>
                                <th>FECHA TOMA DE MUESTRA:</th>
                                <td>{{ date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_tm)) }}</td>
                            </tr>
                            <tr>
                                <th>LOCALIDAD:</th>
                                <td>{{ $detservicio->servicio->ubig->nombre }}</td>
                                <th>PRIORIDAD:</th>
                                <td>URGENCIAS</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<table class="cuadro letra9">
    <tbody>
        <tr>
            <th width='30%' class="text-left">FECHA TOMA MUESTRA:</th>
            <td width='10%'>
                @if (!empty($detservicio->exacovidpcr->fecha_tm))
                {{ date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_tm)) }}                    
                @endif
            </td>
            <td width='60%'>{{ $detservicio->exacovidpcr->hora_tm }}</td>
        </tr>
        <tr>
            <th class="text-left">FECHA RECEPCIÓN:</th>
            <td>
                @if (!empty($detservicio->exacovidpcr->fecha_rec))
                {{ date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_rec)) }}                    
                @endif
            </td>
            <td>{{ $detservicio->exacovidpcr->hora_rec }}</td>
        </tr>
        <tr>
            <th class="text-left">FECHA VALIDACIÓN:</th>
            <td>
                @if (!empty($detservicio->exacovidpcr->fecha_val))
                {{ date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_val)) }}                    
                @endif
            </td>
            <td>{{ $detservicio->exacovidpcr->hora_val }}</td>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadro letra9 espaciado">
    <thead>
        <tr>
            <th width='30%' class="lineainferior">EXAMENES REALIZADOS</th>
            <th width='20%' class="lineainferior">RESULTADO ACTUAL</th>
            <th width='38%' class="lineainferior">VALOR REFERENCIAL</th>
            <th width='12%' class="lineainferior">UNIDADES</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td  valign='bottom' class="letra7">
                CORONAVIRUS SARS COV-2 PCR-RT, EXUDADO RESPIRATORIO ( METODO:PCR-RT)
            </td>
            <td  valign='bottom' class="letra7 text-center negrita">
                {{ $detservicio->exacovidpcr->pcr==1?'POSITIVO':'NEGATIVO' }}
            </td>
            <td class="letra7">
                METODOLOGIA: ENSAYO DE REACCION EN CADENA DE LA POLIMERASA CON TRANSCRIPTASA INVERSA EN 
                TIEMPO REAL ( rRT-PCR) QUE SE PROCESA EN EL SISTEMA Abbott m2000. Abbott RealTime SARS-COV-2 
                ES UN ENSAYO DE DOBLE DIANA PARA LOS GENES RdRP y N.<br>INTERPRETACION: LOS RESULTADOS 
                POSITIVOS INDICAN LA PRESENCIA DE RNA DEL SARS–COV-2; NO OBSTANTE, LA CORRELACION CLINICACON 
                EL HISTORIAL DEL PACIENTE, ASI COMO OTRA INFORMACION DIAGNOSTICA, SON NECESARIAS PARA DETERMINAR 
                EL ESTADO DE INFECCION DEL PACIENTE. LA OBTENCION DE RESULTADOS NEGATIVOS NO EXCLUYEN LA 
                INFECCION POR SARS-COV-2 EN PERIODOS TEMPRANO EN INICIO DE LA INFECCION 
                (APROXIMADAMENTE < A 5 DIAS) Y NO SE DEBE SER UTILIZADO COMO UNICO CRITERIO DURANTE LA TOMA DE 
                DESICIONES MEDICAS. LOS RESULTADOS NEGATIVOS SE DEBEN UTILIZAR JUNTO CON LAS OBSERVACIONES 
                CLINICAS, EL HISTORIAL DEL PACIENTE Y LA INFORMACION EPIDEMIOLOGICA.
            </td>
            <td  valign='bottom' class="letra7 text-center">S/U</td>
        </tr>
    </tbody>
</table>
<br>

<div class="altura100"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->exacovidpcr->biologo_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->exacovidpcr->biologo_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->exacovidpcr->biologo_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                    @if (!empty($detservicio->exacovidpcr->biologo_id))
                    ...........................................................
                    <div class="lchicas">
                        Biólogo
                    </div>
                    @endif
                </div>
            </td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->exacovidpcr->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->exacovidpcr->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->exacovidpcr->doctor_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                    @if (!empty($detservicio->exacovidpcr->doctor_id))
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
                <img src="data:image/png;base64,{!! $qrcodec19pcr !!}" alt="">
            </td>
            <td width='90%'>
                PUEDE VERIFICAR ESTE DOCUMENTO  EN: <br>
                {{ $param->dominio.'/verifica' }} <br>
                CON EL CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'28' }}
            </td>
        </tr>
    </tbody>
</table>