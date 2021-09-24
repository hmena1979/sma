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
    CERTIFICACIÓN MÉDICA PREVIA A TRABAJO DE ALTURA
</div>
<div class="text-center letra12 negrita">
    (A partir de 1.8 metros)
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th colspan="6">1.- FILIACIÓN (a partir del registro médico)</th>
            </tr>
            <tr>
                <th>FECHA</th>
                <td colspan="3">{{ date('d-m-Y',strtotime($detservicio->exaalt18->fecha)) }}</td>
                <th>H.C.</th>
                <td>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT)}}</td>
            </tr>
            <tr>
                <th>APELLIDOS Y NOMBRES</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
                <th>DNI</th>
                <td>{{ $detservicio->colaborador->numdoc }}</td>
            </tr>
            <tr>
                <th width='23%'>EDAD</th>
                <td width='20%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th width='10%'>SEXO</th>
                <td width='12%'>{{ $detservicio->colaborador->sexo->nombre }}</td>
                <th width='9%'>PUESTO</th>
                <td width='26%'>{{ $detservicio->puesto->nombre }}</td>
            </tr>
            <tr>
                <th>EXAMEN</th>
                <td>{{ $detservicio->servicio->eval->nombre }}</td>
                <th>EMPRESA</th>
                <td colspan="3">{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width='42%'>2.- ANTECEDENTES (del registro médico)</th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
                <th width='42%'></th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
            </tr>
            <tr>
                <td>Tiene Fobia o miedo a las alturas</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm01==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm01==2?'X':'' }}</td>
                <td>Insuficiencia cardiaca, enfermedad coronaria, arritmias, porta marcapaso, prótesis valvular</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm07==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm07==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Epilepsia/convulsiones o otra enfermedad que condiciona pérdida de conciencias</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm02==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm02==2?'X':'' }}</td>
                <td>Crisis asmatica</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm08==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm08==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Alcoholismo o abuso de sistancias(adicción)</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm03==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm03==2?'X':'' }}</td>
                <td>Hipertención arterial no controlada</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm09==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm09==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Portados de enfermedad psiquiátrica</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm04==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm04==2?'X':'' }}</td>
                <td>Hipoacusia severa</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm10==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm10==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Diabetes mellitus o hipoglicemia no controlada</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm05==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm05==2?'X':'' }}</td>
                <td>Alteración de la agudeza visual(de lejos) y/o estereopsia</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm11==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm11==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Migraña</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm06==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm06==2?'X':'' }}</td>
                <td>Declarado INAPTO para labor de altura en último examen ocupacional</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm12==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->arm12==2?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width='42%'>3.- ANTECEDENTES (Entrevista con el Paciente)</th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
                <th width='42%'></th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
            </tr>
            <tr>
                <td>Se encuentra Usted resfriado o con algún cuadro espiratorio</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep01==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep01==2?'X':'' }}</td>
                <td>Consumo de licor en las  últimas 24 horas</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep03==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep03==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Sufre de vértigos o mareos diagnosticados recientemente</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep02==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep02==2?'X':'' }}</td>
                <td>Frecuencia de cefaleas</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep04==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->aep04==2?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th colspan="9">4.- EXAMEN FÍSICO (actual)</th>
            </tr>
            <tr>
                <th width='21%' rowspan="3" class="text-center">FUNCIONES VITALES Y ANTROPOMETRIA</th>
                <th width='10%'>Talla (m)</th>
                <td width='8%'>{{ $detservicio->examedico->talla }}</td>
                <th width='10%'>Pulso</th>
                <td width='8%'>{{ $detservicio->examedico->fcard }}</td>
                <th width='10%'>Cintura</th>
                <td width='9%'>{{ $detservicio->examedico->cintura }}</td>
                <th width='15%'>Torax (espirar)</th>
                <td width='9%'>{{ $detservicio->examedico->toraxesp }}</td>
            </tr>
            <tr>
                <th>Peso (Kg)</th>
                <td>{{ $detservicio->examedico->peso }}</td>
                <th>T°</th>
                <td>{{ $detservicio->examedico->temperatura }}</td>
                <th>Cadera</th>
                <td>{{ $detservicio->examedico->cadera }}</td>
                <th>PA Sistolica</th>
                <td>{{ $detservicio->examedico->pasisto }}</td>
            </tr>
            <tr>
                <th>IMC</th>
                <td>{{ $detservicio->examedico->imc }}</td>
                <th>F.Resp</th>
                <td>{{ $detservicio->examedico->fresp }}</td>
                <th>Torax</th>
                <td>{{ $detservicio->examedico->torax }}</td>
                <th>PA Disistolica</th>
                <td>{{ $detservicio->examedico->padisto }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='42%'></th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
                <th width='42%'></th>
                <th width='4%' class="text-center">SI</th>
                <th width='4%' class="text-center">NO</th>
            </tr>
            <tr>
                <td>Limitación en fuerza y/o movilidad de extremidades</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef01==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef01==2?'X':'' }}</td>
                <td>Alteración de la coordinación presente</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef06==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef06==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Alteración del equilibrio</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef02==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef02==2?'X':'' }}</td>
                <td>Presencia de nistagmus</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef07==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef07==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Anormalidad en la marcha</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef03==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef03==2?'X':'' }}</td>
                <td>Anormalidad en movimientos oculares</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef08==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef08==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Anormalidad en la fuerza de miembros</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef04==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef04==2?'X':'' }}</td>
                <td>Pupilar CIRLA</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef09==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef09==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Lenguaje anormal</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef05==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef05==2?'X':'' }}</td>
                <td>Asimetía facial</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef10==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->ef10==2?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width='75%'>5.- CONCLUSIÓN DE LA PRESENTE EVALUACIÓN</th>
                <th width='25%'>RESULTADO</th>
            </tr>
            <tr>
                <td>{{ $detservicio->exaalt18->conclusion }}</td>
                <td>{{ $resultado[$detservicio->exaalt18->resultado] }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="6">APTO PARA TRABAJAR ENCIMA DE LOS 1.8 METROS:</th>
            </tr>
            <tr>
                <th width='10%'>Desde</th>
                <td width='10%'>{{ $detservicio->exaalt18->desde }}</td>
                <th width='10%'>Hasta</th>
                <td width='10%'>{{ $detservicio->exaalt18->hasta }}</td>
                <th width='10%'>Para</th>
                <td width='50%'>{{ $detservicio->exaalt18->para }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='15%'>RESTRICCIONES</th>
                <td width='75%'>{{ $detservicio->exaalt18->restriccion }}</td>
                <th width='5%' class="text-center">SI</th>
                <th width='5%' class="text-center">NO</th>
            </tr>
            <tr>
                <th colspan="2">Uso permanente de lentes correctores</th>
                <td class="text-center">{{ $detservicio->exaalt18->lente==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->lente==2?'X':'' }}</td>
            </tr>
            <tr>
                <th colspan="2">Uso permanente de audífonos</th>
                <td class="text-center">{{ $detservicio->exaalt18->audifono==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaalt18->audifono==2?'X':'' }}</td>
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
                    @if (empty($detservicio->exaalt18->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->exaalt18->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaalt18->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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