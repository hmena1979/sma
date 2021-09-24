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
    CERTIFICADO DE APTITUD MÉDICO OCUPACIONAL
</div>
<br><br>
<div class="text-right letra11 negrita">
    CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}
</div>
<div class="letra7">{!! htmlspecialchars_decode("&nbsp;") !!}</div>
<div class="text-center letra11 negrita">
    CERTIFICA que el Sr.(a):
</div>
<div class="letra7">{!! htmlspecialchars_decode("&nbsp;") !!}</div>
<div class="text-left letra11 negrita">
    TIPO DE EVALUACIÓN:
</div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th width='20%'>Pre Ocupacional:</th>
            <td width='5%' class="celda text-center">
                @if ($detservicio->servicio->evaluacion==1)
                    X
                @else
                {!! htmlspecialchars_decode("&nbsp;") !!}
                @endif
            </td>
            <td width='5%'></td>
            <th width='10%'>Anual:</th>
            <td width='5%' class="celda text-center">
                @if ($detservicio->servicio->evaluacion==2)
                    X
                @else
                {!! htmlspecialchars_decode("&nbsp;") !!}
                @endif
            </td>
            <td width='5%'></td>
            <th width='10%'>Retiro:</th>
            <td width='5%' class="celda text-center">
                @if ($detservicio->servicio->evaluacion==3)
                    X
                @else
                {!! htmlspecialchars_decode("&nbsp;") !!}
                @endif
            </td>
            <td width='5%'></td>
            <th width='10%'>Otros:</th>
            <td width='5%' class="celda text-center">
                @if ($detservicio->servicio->evaluacion==4)
                    X
                @else
                {!! htmlspecialchars_decode("&nbsp;") !!}
                @endif
            </td>
            <td width='15%'></td>
        </tr>
        <tr><td colspan="12"></td></tr>
        <tr>
            <th colspan="3">APELLIDOS Y NOMBRES:</th>
            <td colspan="9" class="celda">{{ $detservicio->colaborador->nombres }}</td>
        </tr>
        <tr><td colspan="12"></td></tr>
        <tr>
            <th>N° DOCUMENTO:</th>
            <td colspan="3" class="celda">{{ $detservicio->colaborador->numdoc }}</td>
            <td></td>
            <th>EDAD:</th>
            <td class="celda">{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
            <td></td>
            <th>GÉNERO:</th>
            <td colspan="2" class="celda">{{ $detservicio->colaborador->sexo->nombre }}</td>
            <td colspan="1"></td>
        </tr>
        <tr><td colspan="12"></td></tr>
    </tbody>
</table>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th width='10%'>EMPRESA:</th>
            <td width='30%' class="celda">{{ $detservicio->servicio->cliente->razsoc }}</td>
            <th width='27%' class=" text-right">PUESTO AL QUE POSTULA:</th>
            <td width='33%' class="celda">{{ $detservicio->puesto->nombre }}</td>
        </tr>
        <tr><td colspan="4"></td></tr>
    </tbody>
</table>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th width='34%'>Ocupación actual o última ocupación:</th>
            <td width='31%' class="celda">{{ $detservicio->ocuactual }}</td>
            <th width='20%' class=" text-right">GRUPO SANGUÍNEO Y FACTOR RH:</th>
            <td width='15%' class="celda">{{ $laboratorio['GrupoSan'].' '.$laboratorio['FactorRH'] }}</td>
        </tr>
        <tr><td colspan="4"></td></tr>
    </tbody>
</table>
<table class="cuadrosborde letra10 text-left" cellspacing="0">
    <tbody>
        <tr>
            <td width='50%'>
                <table class="cuadrosborde">
                    <tbody>
                        <tr>
                            <th>APTO</th>
                            <td class="celda text-center" rowspan="2">
                                @if ($detservicio->resultado==1)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>(Para el puesto en el que trabaja o postula)</td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <th>APTO CON RESTRICCIÓN</th>
                            <td class="celda text-center" rowspan="2">
                                @if ($detservicio->resultado==2)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>(Para el puesto en el que trabaja o postula)</td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <th>NO APTO</th>
                            <td class="celda text-center" rowspan="2">
                                @if ($detservicio->resultado==3)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>(Para el puesto en el que trabaja o postula)</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td valign='top' rowspan="2" width='50%' class="filacolumna">
                <table class="cuadrosborde">
                    <tbody>
                        <tr>
                            <td class="aptitudrestriccion" valign='top'>
                                <div class="negrita">Restricciones:</div>
                                <div>{{ $detservicio->restricciones }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="aptitudfirma text-center" valign='bottom'>
                                @if (empty($detservicio->doctor->firma))
                                <br><br><br><br>
                                @else
                                <img src="{{ url('firmas/'.$detservicio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="filacolumna">
                <div class="negrita">RECOMENDACIONES:</div>
                <div class="aptitudrecomendacion">{{ $detservicio->recomendaciones }}</div>
            </td>
        </tr>
        <tr>
            <td class="filacolumna"><strong>FECHA: </strong>{{ date('d-m-Y',strtotime($detservicio->servicio->fecha)) }}</td>
            <th class="filacolumna text-center">Sello y Firma del Médico que CERTIFICA</th>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra10">
    <tbody>
        <tr>
            <td width='10%'>
                <img src="data:image/png;base64,{!! $qrcode !!}" alt="">
            </td>
            <td width='90%'>
                PUEDE VERIFICAR ESTE DOCUMENTO  EN: <br>
                {{ $param->dominio.'/verificar/' }} <br>
                CON EL CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'10' }}
            </td>
        </tr>
    </tbody>
</table>




{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 2 --------------------------------------------------------}}
{{---------------------------------------------------------------------------------------------------------------}}
