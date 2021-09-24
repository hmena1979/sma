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
    FICHA DE EVALUACIÓN PARA TRABAJOS EN ESPACIOS CONFINADOS
</div>
<br>
<div class="detalleocupacional letra11">
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <tbody>
                            <tr>
                                <th width='24%'>Fecha Actual:</th>
                                <td width='76%'>{{ date('d-m-Y',strtotime($detservicio->exaconfinado->fecha)) }}</td>
                            </tr>
                            <tr>
                                <th>Apellidos y Nombres:</th>
                                <td>{{ $detservicio->colaborador->nombres }}</td>
                            </tr>
                            <tr>
                                <th>Edad:</th>
                                <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                            </tr>
                            <tr>
                                <th>Puesto:</th>
                                <td>{{ $detservicio->puesto->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Empresa:</th>
                                <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="text-center espaciado letra10">ANTECEDENTES PERSONALES DEL TRABAJADOR</th>
            </tr>
        </tbody>
    </table>
    <table class="letra10 espaciado">
        <tbody>
            <tr>
                <th width='90%' class="celdachica"></th>
                <th width='5%' class="text-center">SI</th>
                <th width='5%' class="text-center">NO</th>
            </tr>
            <tr>
                <th>Diabetes Mellitus o Hipoglicemia</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant1==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant1==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Enfermedad Vertiginosa</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant2==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant2==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Enfermedad Convulsiva</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant3==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant3==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Medicamentos que produzcan somnolencia, mareos o afecten el estado vigente</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant4==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant4==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Alteraciones Pulmonares(Asma)</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant5==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant5==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Alteraciones de la agudeza visual(de lejos) y/o de la visión de profundidad</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant6==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant6==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Enfermedad Cardiovascular, Arritmias, Hipo e Hipertensión Arterial</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant7==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant7==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Enfermedad o Alteración en la Columna Vertebral o Miembros Superiores o Inferiores</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant8==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant8==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>Alcoholismo o abuso de otras sustancias (adicción)</th>
                <td class="text-center">{{ $detservicio->exaconfinado->ant9==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaconfinado->ant9==2?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='15%'>OBSERVACIONES:</th>
                        <td width='85%'>{{ $detservicio->exaconfinado->observaciones }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='38%'>ELECTROCARDIOGRAMA (ULTMO EMO):</th>
                        <td width='62%'>{{ $detservicio->exaconfinado->electro }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='38%'>RADIOGRAFÍA DE TORAX (ULTMO EMO):</th>
                        <td width='62%'>{{ $detservicio->exaconfinado->radio }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='29%'>ESPIROMETRÍA (ULTMO EMO):</th>
                        <td width='71%'>{{ $detservicio->exaconfinado->espiro }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="text-center espaciado letra10">
                    HALLAZGOS POSITIVOS  AL EXAMEN FÍSICO(Realizado por el médico evaluador)
                </th>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='20%'>CARDIOVASCULAR</th>
                        <td width='80%'>{{ kvfj($detservicio->examedico->hallazgos, 'apcardio') }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='20%'>NEUROLÓGICO</th>
                        <td width='80%'>{{ kvfj($detservicio->examedico->hallazgos, 'sisnerv') }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='20%'>OSTEOMUSCULAR</th>
                        <td width='80%'>{{ kvfj($detservicio->examedico->hallazgos, 'refleosteo') }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='20%'>EXTREMIDADES</th>
                        <td width='80%'>{{ 'SUPERIORES: '.kvfj($detservicio->examedico->hallazgos, 'miesup').' / INFERIORES: '.kvfj($detservicio->examedico->hallazgos, 'mieinf') }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde letra10">
                        <th width='20%'>MARCHA</th>
                        <td width='80%'>{{ kvfj($detservicio->examedico->hallazgos, 'marcha') }}</td>
                    </table>
                </td>
            </tr>
            <tr>
                <th class="text-center espaciado letra10">
                    CONCEPTO MÉDICO OCUPACIONAL PARA EL TRABAJO
                </th>
            </tr>
        </tbody>
    </table>
    <table class="letra10 espaciado">
        <tbody>
            <tr>
                <th width='36%'>RESTRICCIONES</th>
                <th width='36%'>RECOMENDACIONES</th>
                <th width='24%'>APTO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaconfinado->resultado==1?'X':'' }}</td>
            </tr>
            <tr>
                <td rowspan="2">{{ $detservicio->exaconfinado->restriccion }}</td>
                <td rowspan="2">{{ $detservicio->exaconfinado->recomendaciones }}</td>
                <th>APTO CON RESTRICCION</th>
                <td class="text-center">{{ $detservicio->exaconfinado->resultado==2?'X':'' }}</td>
            </tr>
            <tr>
                <th>NO APTO</th>
                <td class="text-center">{{ $detservicio->exaconfinado->resultado==3?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='60%'></td>
            <td width='40%' class="text-center">
                <div>
                    @if (empty($detservicio->exaconfinado->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->exaconfinado->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaconfinado->doctor->firma) }}" height="90px" alt=""><br>
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