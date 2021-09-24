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
    INFORME PSICOLÓGICO OCUPACIONAL
</div>
<br>
<div class="detalleocupacional espaciadomedio fondofirma">
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='10%'></th>
                                <td width='10%'></td>
                                <th width='60%' class="text-right">Fecha  de evaluación</th>
                                <td>
                                    <div class="tablatodobordes">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>{{ substr($detservicio->exapsico->fecha,8,2) }}</td>
                                                    <td>{{ strtoupper($meses[substr($detservicio->exapsico->fecha,5,2)]) }}</td>
                                                    <td>{{ substr($detservicio->exapsico->fecha,0,4) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Día</th>
                                                    <th>Mes</th>
                                                    <th>Año</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tr>
                            <th>
                                I.- DATOS GENERALES:
                            </th>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tr>
                            <th width='25%'>Apellidos y Nombres</th>
                            <td width='2%'>:</td>
                            <td colspan="4" width='73%'>{{ $detservicio->colaborador->nombres }}</td>
                        </tr>
                        <tr>
                            <th width='25%'>Fecha de Nacimiento</th>
                            <td width='2%'>:</td>
                            <td width='15%'>{{ date('d-m-Y',strtotime($detservicio->colaborador->fecnac)) }}</td>
                            <th width='10%'>Edad</th>
                            <td width='2%'>:</td>
                            <td width='46%' class="text-leftr">{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                        </tr>
                        <tr>
                            <th>Grado de Instrucción</th>
                            <td>:</td>
                            <td colspan="4">{{ $detservicio->colaborador->gradinst->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Puesto de trabajo</th>
                            <td>:</td>
                            <td colspan="4">{{ $detservicio->puesto->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Empresa donde labora</th>
                            <td>:</td>
                            <td colspan="4">{{ $detservicio->servicio->cliente->razsoc }}</td>
                        </tr>
                        <tr>
                            <th>Evaluación</th>
                            <td>:</td>
                            <td colspan="4">{{ $detservicio->servicio->eval->nombre }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th>
                    II.- EVALUACIÓN:
                </th>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='15%'>Pre-Ocupacional</th>
                                <td width='5%'>
                                    <div class="celda">
                                        @if ($detservicio->servicio->evaluacion==1)
                                            X
                                        @else
                                        {!! htmlspecialchars_decode("&nbsp;") !!}
                                        @endif
                                    </div>
                                </td>
                                <td width='5%'></td>
                                <th width='12%'>Ocupacional</th>
                                <td width='5%'>
                                    <div class="celda">
                                        @if ($detservicio->servicio->evaluacion==2)
                                            X
                                        @else
                                        {!! htmlspecialchars_decode("&nbsp;") !!}
                                        @endif
                                    </div>
                                </td>
                                <td width='5%'></td>
                                <th width='16%'>Post-Ocupacional</th>
                                <td width='5%'>
                                    <div class="celda">
                                        @if ($detservicio->servicio->evaluacion==3)
                                            X
                                        @else
                                        {!! htmlspecialchars_decode("&nbsp;") !!}
                                        @endif
                                    </div>
                                </td>
                                <td width='5%'></td>
                                <th width='5%'>Otro</th>
                                <td width='5%'>
                                    <div class="celda">
                                        @if ($detservicio->servicio->evaluacion==4)
                                            X
                                        @else
                                        {!! htmlspecialchars_decode("&nbsp;") !!}
                                        @endif
                                    </div>
                                </td>
                                <td width='17%'></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th>
                    III.- OBSERVACIÓN DE CONDUCTAS:
                </th>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width="20%">- Presentación:</th>
                                <td width="10%">Adecuado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->presentacion==1) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="10%">Inadecuado</td>
                                <td width="5%">
                                    ( @if($detservicio->exapsico->presentacion==2) X @else {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!} @endif )
                                </td>
                                <td width="50%"></td>
                            </tr>
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
                <th>
                    IV.- RESULTADO DE EVALUACIÓN:
                </th>
            </tr>
            <tr>
                <td>
                    <table class="">
                        <thead>
                            <tr>
                                <th width="7%">A/NA</th>
                                <th width="15%">ÁREA</th>
                                <th width="15%">NIVEL</th>
                                <th width="63%">CARACTERISTICAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->dfinteligencia_ana==1?'A':'NA' }}
                                </td>
                                <td>Inteligencia</td>
                                <td>
                                    {{ $detservicio->exapsico->dfinteligencia_nivel }}
                                </td>
                                <td>
                                    {{ $detservicio->exapsico->dfinteligencia_carac }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->dfpersonalidad_ana==1?'A':'NA' }}
                                </td>
                                <td>Personalidad</td>
                                <td>
                                    {{ $detservicio->exapsico->dfpersonalidad_nivel }}
                                </td>
                                <td>
                                    {{ $detservicio->exapsico->dfpersonalidad_carac }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->dfansiedad_ana==1?'A':'NA' }}
                                </td>
                                <td>Ansiedad</td>
                                <td>
                                    {{ $detservicio->exapsico->dfansiedad_nivel }}
                                </td>
                                <td>
                                    {{ $detservicio->exapsico->dfansiedad_carac }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->dfpatologias_ana==1?'A':'NA' }}
                                </td>
                                <td>Patologías</td>
                                <td>
                                    {{ $detservicio->exapsico->dfpatologias_nivel }}
                                </td>
                                <td>
                                    {{ $detservicio->exapsico->dfpatologias_carac }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th>
                    V.- CONCLUSIONES:
                </th>
            </tr>
            <tr>
                <td>
                    {{ $detservicio->exapsico->conclusion }}
                </td>
            </tr>
            <tr>
                <th>
                    VII.- RECOMENDACIONES:
                </th>
            </tr>
            <tr>
                <td>
                    {{ $detservicio->exapsico->recomendaciones }}
                </td>
            </tr>
            <tr>
                <th>
                    VII.- RESPONSABLE:
                </th>
            </tr>
            <tr>
                <td>
                    @if (empty($detservicio->exapsico->doctor_id))
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @else
                    {{ $detservicio->exapsico->doctor->nombre }}
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <div class="firmapsico">
        @if (empty($detservicio->exapsico->doctor_id))
        <br>
        @else
            @if (empty($detservicio->exapsico->doctor->firma))
            <br>
            @else
            <img src="{{ url('firmas/'.$detservicio->exapsico->doctor->firma) }}" width="180px" height="100px" alt=""><br>
            @endif
        @endif
    </div>
</div>