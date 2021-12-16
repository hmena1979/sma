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
                <div class="text-right lchicas">
                    PÁGINA: <strong>01</strong>
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
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='10%'>N° Ficha</th>
                                <td width='10%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
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
                    <table class="sinborde">
                        <tr>
                            <th>
                                I.- Datos Generales
                            </th>
                        </tr>
                    </table>
                    <table class="sinborde">
                        <tr>
                            <th width='25%'>Apellidos y Nombres</th>
                            <td width='2%'>:</td>
                            <td width='73%'>{{ $detservicio->colaborador->nombres }}</td>
                        </tr>
                        <tr>
                            <th>Edad</th>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                        </tr>
                        <tr>
                            <th>Fecha de Nacimiento</th>
                            <td>:</td>
                            <td>{{ date('d-m-Y',strtotime($detservicio->colaborador->fecnac)) }}</td>
                        </tr>
                        <tr>
                            <th>Lugar de Nacimiento</th>
                            <td>:</td>
                            <td>{{ $detservicio->colaborador->lugnac }}</td>
                        </tr>
                        <tr>
                            <th>Estado Civil</th>
                            <td>:</td>
                            <td>{{ $detservicio->colaborador->estciv->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Grado de Instrucción</th>
                            <td>:</td>
                            <td>{{ $detservicio->colaborador->gradinst->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Lugar de Residencia</th>
                            <td>:</td>
                            <td>{{ $detservicio->colaborador->ubig->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Evaluación</th>
                            <td>:</td>
                            <td>{{ $detservicio->servicio->eval->nombre }}</td>
                        </tr>
                    </table>
                    <table class="sinborde">
                        <tr>
                            <th>
                                III.- Datos Ocupacionales
                            </th>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign='top' class="psicomotivo">
                    <table class="sinborde">
                        <tr>
                            <th>
                                II.- Motivo de Evaluación
                            </th>
                        </tr>
                        <tr>
                            <td>
                                {{ $detservicio->exapsico->motivo }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    III.- Datos Ocupacionales
                                </th>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <th>3.1- Empresa Actual (postula, trabaja o trabajó)</th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='25%'>Nombre de la Empresa</th>
                                <td width='2%'>:</td>
                                <td width='73%'>{{ $detservicio->servicio->cliente->razsoc }}</td>
                            </tr>
                            <tr>
                                <th>Actividad de la Empresa</th>
                                <td>:</td>
                                <td>{{ $detservicio->servicio->cliente->actividad }}</td>
                            </tr>
                            <tr>
                                <th>Área del Trabajo</th>
                                <td>:</td>
                                <td>{{ $detservicio->area->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Puesto</th>
                                <td>:</td>
                                <td>{{ $detservicio->puesto->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Principales Riesgos:</th>
                                <td>:</td>
                                <td class="espaciado">{{ priesgos($detservicio->riesgos) }}</td>
                            </tr>
                            <tr>
                                <th>Medidas de Seguridad:</th>
                                <td>:</td>
                                <td>{{ $detservicio->seguridad }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="sinborde">
                        <tbody>
                            <tr><td></td></tr>
                            <tr>
                                <th>3.2- Anteriores Empresas:(experiencia laboral)</th>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th width='5%'>Año</th>
                                <th width='25%'>Nombre de la Empresa</th>
                                <th width='20%'>Act. de la Empresa</th>
                                <th width='25%'>Puesto</th>
                                <th width='10%'>Tiempo</th>
                                <th width='15%'>Causas del Retiro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detservicio->colaborador->colantocupacionals as $ant)
                            <tr>
                                <td>{{ $ant->fecha }}</td>
                                <td>{{ $ant->empresa }}</td>
                                <td>{{ $ant->area->nombre }}</td>
                                <td>{{ $ant->puesto->nombre }}</td>
                                <td>{{ $ant->tiempo }}</td>
                                <td>{{ $ant->cretiro }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign='top' class="psicomotivo">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    IV. Historia Familiar
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->hisfamiliar }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign='top' class="psicomotivo">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    V. Accidentes y Enfermedades(Durante el tiempo de trabajo)
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->accidentes }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign='top' class="psicomotivo">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    VI. Hábitos(Pasatiempo, consumo de tabaco, alcohol y/o drogas
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->habitos }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always;"></div>
{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 2 --------------------------------------------------------}}
{{---------------------------------------------------------------------------------------------------------------}}
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
                <div class="text-right lchicas">
                    PÁGINA: <strong>02</strong>
                </div>
            </td>
        </tr>
    </thead>
</table>
<br>
<div class="detalleocupacional espaciadomedio">
    <table>
        <tbody>
            <tr>
                <td valign='top' class="psicomotivo">
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    VII.- Otras Observaciones:
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $detservicio->exapsico->otros }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    VIII.- Examen Mental
                                </th>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <th>
                                    Observaciones de Conducta
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
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    IX Procesos Cognitivos
                                </th>
                            </tr>
                            <tr><td></td></tr>
                        </tbody>
                    </table>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='25%'>Lucido, atento</th>
                                <td width='2%'>:</td>
                                <td width='73%'>{{ $detservicio->exapsico->lucido }}</td>
                            </tr>
                            <tr>
                                <th>Pensamiento</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->pensamiento }}</td>
                            </tr>
                            <tr>
                                <th>Percepción</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->percepcion }}</td>
                            </tr>
                            <tr>
                                <th>Memoria</th>
                                <td>:</td>
                                <td>{{ $memoria[$detservicio->exapsico->memoria] }}</td>
                            </tr>
                            <tr>
                                <th>Inteligencia</th>
                                <td>:</td>
                                <td>{{ $inteligencia[$detservicio->exapsico->inteligencia] }}</td>
                            </tr>
                            <tr>
                                <th>Apetito</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->apetito }}</td>
                            </tr>
                            <tr>
                                <th>Sueño</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->sueño }}</td>
                            </tr>
                            <tr>
                                <th>Personalidad</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->personalidad }}</td>
                            </tr>
                            <tr>
                                <th>Afectividad</th>
                                <td>:</td>
                                <td>{{ $detservicio->exapsico->afectividad }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>
                                    X. Diagnóstico Final
                                </th>
                            </tr>
                            <tr><td></td></tr>
                        </tbody>
                    </table>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th>Área Cognitiva:</th>
                            </tr>
                            <tr>
                                <td class="text-justify espaciado">{{ $detservicio->exapsico->conc_congnitiva }}</td>
                            </tr>
                            <tr>
                                <th>Área Emocional:</th>
                            </tr>
                            <tr>
                                <td valign='top' class="psicomotivo text-justify espaciado">
                                    {{ $detservicio->exapsico->conc_emocional }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
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
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>