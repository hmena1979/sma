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
    FICHA PSICOLÓGICA OCUPACIONAL
</div>
<br>
<div class="detalleocupacional espaciadomedio">
    <table>
        <tbody>
            <tr>
                <th valign='bottom' rowspan="2" width="10%">Nro. Inf:</th>
                <td valign='bottom' rowspan="2" width="10%">{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th valign='bottom' rowspan="2" width="10%">Nro:</th>
                <td valign='bottom' rowspan="2" width="10%">{{ str_pad($detservicio->exapsico->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th valign='bottom' rowspan="2" width="40%" class="text-right">Fecha  de evaluación:</th>
                <th width="5%" class="text-center">DIA</th>
                <th width="10%" class="text-center">MES</th>
                <th width="5%" class="text-center">AÑO</th>
            </tr>
            <tr>
                <td class="text-center">{{ substr($detservicio->exapsico->fecha,8,2) }}</td>
                <td class="text-center">{{ strtoupper($meses[substr($detservicio->exapsico->fecha,5,2)]) }}</td>
                <td class="text-center">{{ substr($detservicio->exapsico->fecha,0,4) }}</td>
            </tr>
            <tr>
                <th colspan="8">
                    I.- DATOS GENERALES:
                </th>
            </tr>
            <tr>
                <th colspan="2">Apellidos y Nombres:</th>
                <td colspan="6">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='10%'>Edad:</th>
                <td width='10%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th width='20%'>Lugar de Nacimiento:</th>
                <td width='30%'>{{ $detservicio->colaborador->lugnac }}</td>
                <th width='20%'>Fecha de Nacimiento:</th>
                <td width='10%'>{{date('d-m-Y',strtotime($detservicio->colaborador->fecnac))}}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Grado de Instrucción:</th>
                <td width='30%'>{{ $detservicio->colaborador->gradinst->nombre }}</td>
                <th width='20%'>Lugar de Residencia:</th>
                <td width='30%'>{{ $detservicio->colaborador->ubig->nombre }}</td>
            </tr>
            <tr>
                <th>Puesto de trabajo:</th>
                <td colspan="3">{{ $detservicio->puesto->nombre }}</td>
            </tr>
            <tr>
                <th>Empresa donde labora:</th>
                <td colspan="3">{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
            <tr>
                <th colspan="4">II.- MOTIVO DE EVALUACIÓN:</th>
            </tr>
            <tr>
                <td colspan="4">
                    {{ $detservicio->exapsico->motivo }}
                </td>
            </tr>
            <tr>
                <th colspan="4">III.- OBSERVACIÓN DE CONDUCTAS:</th>
            </tr>
            <tr>
                <td colspan="4">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width="20%">- Presentación:</th>
                                <td width="10%">Adecuado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->presentacion==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                    {{-- {{ $detservicio->exapsico->presentacion==1?'X':htmlspecialchars_decode("&nbsp;") }} --}}
                                <td width="10%">Inadecuado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->presentacion==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="50%"></td>
                            </tr>
                            <tr><td colspan="6"></td></tr>
                            <tr>
                                <th width="20%">- Postura:</th>
                                <td width="10%">Erguida</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->postura==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="10%">Encorvada</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->postura==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="50%"></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th rowspan="3" width="20%">- Discurso:</th>
                                <th width="10%">Ritmo:</th>
                                <td width="12%">Lento</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->disc_ritmo==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="12%">Rápido</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->disc_ritmo==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="8%">Fluido</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->disc_ritmo==3) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="23%"></td>
                            </tr>
                            <tr>
                                <th>Tono:</th>
                                <td>Bajo</td>
                                <td>
                                    ( @if($detservicio->exapsico->disc_tono==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td>Moderado</td>
                                <td>
                                    ( @if($detservicio->exapsico->disc_tono==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td>Alto</td>
                                <td>
                                    ( @if($detservicio->exapsico->disc_tono==3) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Articulación:</th>
                                <td>Con dificultad</td>
                                <td>
                                    ( @if($detservicio->exapsico->disc_articula==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td>Sin Dificultad</td>
                                <td>
                                    ( @if($detservicio->exapsico->disc_articula==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th rowspan="3" width="20%">- Orientación:</th>
                                <th width="11%">Tiempo:</th>
                                <td width="12%">Orientado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->ori_tiempo==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="12%">Desorientado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->ori_tiempo==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="34%"></td>
                            </tr>
                            <tr>
                                <th>Espacio:</th>
                                <td>Orientado</td>
                                <td>
                                    ( @if($detservicio->exapsico->ori_espacio==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td>Desorientado</td>
                                <td>
                                    ( @if($detservicio->exapsico->ori_espacio==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Persona:</th>
                                <td>Orientado</td>
                                <td>
                                    ( @if($detservicio->exapsico->ori_persona==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td>Desorientado</td>
                                <td>
                                    ( @if($detservicio->exapsico->ori_persona==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="4">IV.- RESULTADO DE EVALUACIÓN:</th>
            </tr>
            <tr>
                <td colspan="4">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='25%'>- Nivel Intelectual</th>
                                <td width='75%'>: {{ $inteligencia[$detservicio->exapsico->inteligencia] }}</td>
                            </tr>
                            <tr>
                                <th>- Coordinación Visomotriz</th>
                                <td>: {{ $detservicio->exapsico->visomotriz }}</td>
                            </tr>
                            <tr>
                                <th>- Nivel de Memoria</th>
                                <td>: {{ $memoria[$detservicio->exapsico->memoria] }}</td>
                            </tr>
                            <tr>
                                <th>- Personalidad</th>
                                <td>: {{ $detservicio->exapsico->personalidad }}</td>
                            </tr>
                            <tr>
                                <th>- Afectividad</th>
                                <td>: {{ $detservicio->exapsico->afectividad }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="4">V.- CONCLUSIONES:</th>
            </tr>
            <tr>
                <td colspan="4">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>Área Cognitiva:</th>
                            </tr>
                            <tr>
                                <td class="text-justify">
                                    {{ $detservicio->exapsico->conc_congnitiva }}
                                </td>
                            </tr>
                            <tr>
                                <th>Área Emocional:</th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->conc_emocional }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th colspan="4">VI.- RECOMENDACIONES:</th>
            </tr>
            <tr>
                <td colspan="4">{{ $detservicio->exapsico->recomendaciones }}</td>
            </tr>
        </tbody>
    </table>
</div>
<table class="cuadrosborde letra10">
    <thead>
        <tr>
            <td width="50%" class="text-center">
            </td>
            <td width="50%" class="text-center letra10">
                <div>
                    @if (empty($detservicio->exapsico->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->exapsico->doctor_id))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exapsico->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                        @endif
                    @endif
                    .......................................................
                    <div class="lchicas">
                        Nombre, Firma y sello del médico Evaluador
                    </div>
                </div>
            </td>
        </tr>
    </thead>
</table>