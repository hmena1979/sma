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
    INFORME DE ESPIROMETRÍA
</div>
<br>
<div class="detalleocupacional espaciado">
    <table>
        <tbody>
            <tr>
                <th width='20%'>Espirometría  Nº</th>
                <td width='10%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='10%'>Fecha</th>
                <td width='30%'>{{ date('d-m-Y',strtotime($detservicio->exaespiro->fecha)) }}</td>
                <th width='10%'>Hora</th>
                <td width='20%'>{{ $detservicio->exaespiro->hora }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Evaluacion</th>
                <th width='20%'>Pre - Ocupacional</th>
                <td width='6%' class="text-center">
                    {{ $detservicio->servicio->evaluacion==1?'X':'' }}
                </td>
                <th width='12%'>Periódica</th>
                <td width='6%' class="text-center">
                    {{ $detservicio->servicio->evaluacion==2?'X':'' }}
                </td>
                <th width='12%'>Retiro</th>
                <td width='6%' class="text-center">
                    {{ $detservicio->servicio->evaluacion==3?'X':'' }}
                </td>
                <th width='12%'>Otros</th>
                <td width='6%' class="text-center">
                    {{ $detservicio->servicio->evaluacion==4?'X':'' }}
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Lugar del Examen</th>
                <th width='13%'>Departamento</th>
                <td width='17%'>{{ $detservicio->servicio->depart->nombre }}</td>
                <th width='9%'>Provincia</th>
                <td width='16%'>{{ $detservicio->servicio->prov->nombre }}</td>
                <th width='7%'>Ubigeo</th>
                <td width='18%'>{{ $detservicio->servicio->ubig->nombre }}</td>
            </tr>
            <tr>
                <th colspan="7">I. DATOS DE LA EMPRESA</th>
            </tr>
            <tr>
                <th>Razón Social Nombre</th>
                <td colspan="6">{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Actividad Económica</th>
                <td width='30%'>{{ $detservicio->servicio->cliente->actividad }}</td>
                <th width='16%'>Puesto de Trabajo</th>
                <td width='34%'>{{ $detservicio->puesto->nombre }}</td>
            </tr>
            <tr>
                <th>Tiempo de trabajo</th>
                <td colspan="3">{{ $detservicio->tielabor }}</td>
            </tr>
            <tr>
                <th colspan="4">II.  FILIACION DEL PACIENTE</th>
            </tr>
            <tr>
                <th>Nombre y Apellidos</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Edad</th>
                <td width='10%'>{{ \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age }}</td>
                <th width='10%'>Sexo</th>
                <td width='15%'>{{ $detservicio->colaborador->sexo->nombre }}</td>
                <th width='10%'>Altura</th>
                <td width='15%'>{{ $detservicio->examedico->talla }} m</td>
                <th width='10%'>Peso</th>
                <td width='10%'>{{ $detservicio->examedico->peso }} Kg</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>Origen Étnico</th>
                <th width='10%'>Caucásico</th>
                <td width='10%' class="text-center">
                    {{ $detservicio->exaespiro->etnico==1?'X':'' }}
                </td>
                <th width='12%'>No Caucásico</th>
                <td width='8%' class="text-center">
                    {{ $detservicio->exaespiro->etnico==2?'X':'' }}
                </td>
                <th width='10%'>Fumador</th>
                <td width='10%' class="text-center">
                    {{ $detservicio->exaespiro->fumador==1?'X':'' }}
                </td>
                <th width='12%'>No Fumador</th>
                <td width='8%' class="text-center">
                    {{ $detservicio->exaespiro->fumador==2?'X':'' }}
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="3">III. VALORES OBSERVADOS DE ESPIROMETRIA</th>
            </tr>
            <tr>
                <th width='10%'></th>
                <th width='10%' class="text-center">% Pred</th>
                <th width='80%'>Edad Pulmonar Estimada</th>
            </tr>
            <tr>
                <th>FVC</th>
                <td class="text-center">{{ $detservicio->exaespiro->fvc_pred }}</td>
                <td>{{ $detservicio->exaespiro->fvc_edad }}</td>
            </tr>
            <tr>
                <th>FEV<sub>1</sub></th>
                <td class="text-center">{{ $detservicio->exaespiro->fev1_pred }}</td>
                <td>{{ $detservicio->exaespiro->fev1_edad }}</td>
            </tr>
            <tr>
                <th>PEF</th>
                <td class="text-center">{{ $detservicio->exaespiro->pef_pred }}</td>
                <td>{{ $detservicio->exaespiro->pef_edad }}</td>
            </tr>
            <tr>
                <th>FER</th>
                <td class="text-center">{{ $detservicio->exaespiro->fer_pred }}</td>
                <td>{{ $detservicio->exaespiro->fer_edad }}</td>
            </tr>
            <tr>
                <th>F<sub>25</sub></th>
                <td class="text-center">{{ $detservicio->exaespiro->f25_pred }}</td>
                <td>{{ $detservicio->exaespiro->f25_edad }}</td>
            </tr>
            <tr>
                <th>F<sub>50</sub></th>
                <td class="text-center">{{ $detservicio->exaespiro->f50_pred }}</td>
                <td>{{ $detservicio->exaespiro->f50_edad }}</td>
            </tr>
            <tr>
                <th>MEF</th>
                <td class="text-center">{{ $detservicio->exaespiro->mef_pred }}</td>
                <td>{{ $detservicio->exaespiro->mef_edad }}</td>
            </tr>
            <tr>
                <th>R<sub>50</sub></th>
                <td class="text-center">{{ $detservicio->exaespiro->r50_pred }}</td>
                <td>{{ $detservicio->exaespiro->r50_edad }}</td>
            </tr>
            <tr>
                <th>MVV(IND)</th>
                <td class="text-center">{{ $detservicio->exaespiro->mvv_pred }}</td>
                <td>{{ $detservicio->exaespiro->mvv_edad }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="6">IV. RESULTADOS</th>
            </tr>
            <tr>
                <th width='28%'>Normal</th>
                <td width='5%' class="text-center">{{ $detservicio->exaespiro->res_espiro==1?'X':'' }}</td>
                <th width='28%'>Síndrome Restrictivo</th>
                <td width='5%' class="text-center">{{ $detservicio->exaespiro->res_espiro==2?'X':'' }}</td>
                <th width='28%'>Síndrome Obstructivo</th>
                <td width='5%' class="text-center">{{ $detservicio->exaespiro->res_espiro==3?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>OBSERVACIONES</th>
                <td width='80%' class="altura30">{{ $detservicio->exaespiro->observacion }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='50%' class="aptitudfirma text-center">
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                </td>
                <td width='50%' class="text-center">
                    @if (empty($detservicio->exaespiro->doctor_id))
                    <br>
                    @else
                        @if (empty($detservicio->exaespiro->doctor->firma))
                        <br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaespiro->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                        @endif
                    @endif
                </td>
            </tr>
            <tr>
                <th class="text-center">Profesional que realiza la Espirometría</th>
                <th class="text-center">Médico que Interpreta</th>
            </tr>
        </tbody>
    </table>
</div>
