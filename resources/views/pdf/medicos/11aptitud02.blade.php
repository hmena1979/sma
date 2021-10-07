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
<div class="text-center letra12 negrita">
    CERTIFICADO DE APTITUD MÉDICO OCUPACIONAL
</div>
<br>
<div class="text-right letra10 negrita">
    CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}
</div>
<div class="letra7">{!! htmlspecialchars_decode("&nbsp;") !!}</div>
<div class="text-center letra10 negrita">
    CERTIFICA que el Sr.(a):
</div>
<div class="letra7">{!! htmlspecialchars_decode("&nbsp;") !!}</div>
<div class="text-left letra10 negrita">
    TIPO DE EVALUACIÓN:
</div>
<table class="cuadrosborde letra9 text-left">
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
                            <td><strong>APTO</strong><br>(Para el puesto en el que trabaja o postula)</td><strong></strong> 
                            <td class="celda text-center">
                                @if ($detservicio->resultado==1)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td><strong>APTO CON RESTRICCIÓN</strong><br>(Para el puesto en el que trabaja o postula)</td><strong></strong> 
                            <td class="celda text-center">
                                @if ($detservicio->resultado==2)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td><strong>NO APTO</strong><br>(Para el puesto en el que trabaja o postula)</td><strong></strong> 
                            <td class="celda text-center">
                                @if ($detservicio->resultado==3)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td valign='top' rowspan="2" width='50%' class="filacolumna">
                <table class="cuadrosborde">
                    <tbody>
                        <tr>
                            <td class="aptitudrestriccion2" valign='top'>
                                <div class="negrita">Restricciones:</div>
                                <div class="letra9">{{ $detservicio->restricciones }}</div>
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
                <div class="aptitudrecomendacion2 letra9">
                    {!! htmlspecialchars_decode(nl2br($detservicio->recomendaciones)) !!}
                </div>
            </td>
        </tr>
        <tr>
            <td class="filacolumna"><strong>FECHA: </strong>{{ date('d-m-Y',strtotime($detservicio->servicio->fecha)) }}</td>
            <th class="filacolumna text-center">Sello y Firma del Médico que CERTIFICA</th>
        </tr>
    </tbody>
</table>
<div class="detalleocupacional">
<table>
    <tbody>
        <tr>
            <td width='30%'>Examen Médico Ocupacional</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'medica')?'X':'' }}</td>
            <td width='30%'>Examen de Altura</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'altura')?'X':'' }}
            <td width='30%'>Carboxihemoglobina</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'carboxihemoglobina')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Oftalmológica</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'oftalmo')?'X':'' }}</td>
            <td width='30%'>Prueba de Esfuerzo</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'esfuerzo')?'X':'' }}
            <td width='30%'>PSA</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'psa')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Dermatológica</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'derma')?'X':'' }}</td>
            <td width='30%'>Luz de WOOD</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'wood')?'X':'' }}
            <td width='30%'>Examen de Orina</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'orina')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Osteomuscular</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'osteo')?'X':'' }}</td>
            <td width='30%'>Maniobra de NIKOLSKY</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'nikolsky')?'X':'' }}
            <td width='30%'>Examen de Parasitológico</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'parasitologico')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Neurológica</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'neuro')?'X':'' }}</td>
            <td width='30%'>Hemograma Completo</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'hemograma')?'X':'' }}
            <td width='30%'>Dosaje de Drogas en Orina</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'drogas')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Audiometría </td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'audio')?'X':'' }}</td>
            <td width='30%'>Glucosa</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'glucosa')?'X':'' }}
            <td width='30%'>Basiloscopia: Bk en Esputo</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'esputo')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Espirometria</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'espiro')?'X':'' }}</td>
            <td width='30%'>Urea</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'urea')?'X':'' }}
            <td width='30%'>Grupo Sanguineo y Factor</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'psf')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Electrocardiograma</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'electro')?'X':'' }}</td>
            <td width='30%'>Creatinina</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'creatina')?'X':'' }}
            <td width='30%'>VDRL cuantitativo</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'vdrl')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Odontológica</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'odonto')?'X':'' }}</td>
            <td width='30%'>Perfil Lipido</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'lipido')?'X':'' }}
            <td width='30%'>Test para espacios confinados</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'confinado')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Evaluación Psicológica</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'psicologica')?'X':'' }}</td>
            <td width='30%'>Transaminasas</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'transaminasas')?'X':'' }}
            <td width='30%'>Riesgo Coronario</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'coronario')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'>Examen Psicosensométrico</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'psicosometrico')?'X':'' }}</td>
            <td width='30%'>Aglutinaciones</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'aglutinaciones')?'X':'' }}
            <td width='30%'>Test de Embarazo</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'embarazo')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'></td>
            <td width='3%' class="text-center"></td>
            <td width='30%'>Radiografia de Torax</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'rtorax')?'X':'' }}
            <td width='30%'>Radiografia de Columna Lumbar</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'rlumbar')?'X':'' }}
        </tr>
        <tr>
            <td width='30%'></td>
            <td width='3%' class="text-center"></td>
            <td width='30%'>Rx de Columna Lumbar F</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'rlumbarf')?'X':'' }}
            <td width='30%'>Rx de Columna Lumbar L</td>
            <td width='3%' class="text-center">{{ kvfa($detservicio->informe->examenes,'rlumbarl')?'X':'' }}
        </tr>
    </tbody>
</table>
</div>
<table class="cuadrosborde letra10">
    <tbody>
        <tr>
            <td width='10%'>
                <img src="data:image/png;base64,{!! $qrcode !!}" alt="">
            </td>
            <td width='90%'>
                PUEDE VERIFICAR ESTE DOCUMENTO  EN: <br>
                {{ $param->dominio.'/verifica' }} <br>
                CON EL CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'10' }}
            </td>
        </tr>
    </tbody>

</table>




{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 2 --------------------------------------------------------}}
{{---------------------------------------------------------------------------------------------------------------}}
