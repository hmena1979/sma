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
<br><br>
<div class="text-center letra12 negrita">
    FICHA MEDICO OCUPACIONAL
</div>
<br><br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width="25%">N° de Ficha Medica</th>
                <td width="20%">{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width="10%">Fecha</th>
                <td width="45%">{{date('d-m-Y',strtotime($detservicio->examedico->fecha))}}</td>
            </tr>
            <tr>
                <th>Tipo de Evaluación</th>
                <td colspan="3">{{ $detservicio->servicio->eval->nombre }}</td>
            </tr>
            <tr>
                <th>Lugar del Examen</th>
                <td colspan="3">{{ $detservicio->servicio->depart->nombre.' / '.$detservicio->servicio->prov->nombre.' / '.$detservicio->servicio->ubig->nombre }}</td>
            </tr>
            <tr>
                <th colspan="4">I. DATOS DE LA EMPRESA</th>
            </tr>
            <tr>
                <th>Razón Social</th>
                <td colspan="3">{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
            <tr>
                <th>Actividad Económica</th>
                <td colspan="3">{{ $detservicio->servicio->cliente->actividad }}</td>
            </tr>
            <tr>
                <th>Ubicación</th>
                <td colspan="3">{{ $detservicio->servicio->ubicacion }}</td>
            </tr>
            <tr>
                <th colspan="2">Puesto al que postula(solo pre ocupacional)</th>
                <td colspan="2">{{ $detservicio->puesto->nombre }}</td>
            </tr>
            <tr>
                <th colspan="4">II. FILIACIÓN DEL TRABAJADOR</th>
            </tr>
            <tr>
                <th>Nombres y Apellidos</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ date('d-m-Y',strtotime($detservicio->colaborador->fecnac ))}}</td>
                <th>Edad</th>
                <td>{{ \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age }} años</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="25%">Documento de Identidad</th>
                <td width="35%">{{ $detservicio->colaborador->tipdoc->nombre }}</td>
                <th width="20%">Número</th>
                <td width="20%">{{ $detservicio->colaborador->numdoc }} </td>
            </tr>
            <tr>
                <th>Domicilio</th>
                <td colspan="3">{{ $detservicio->colaborador->domicilio }}</td>
            </tr>
            <tr>
                <th>Ubicación Geográfica</th>
                <td colspan="3">{{ $detservicio->colaborador->depart->nombre.' / '.$detservicio->colaborador->prov->nombre.' / '.$detservicio->colaborador->ubig->nombre }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="25%">Residencia en lugar trabajo</th>
                <td width="20%">{{ $detservicio->colaborador->residencia==1?'SI':'NO' }}</td>
                <th width="35%">Tiempo de residencia en lugar trabajo</th>
                <td width="20%">{{ $detservicio->colaborador->tieresi }} </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="25%">Correo electrónico</th>
                <td width="35%">{{ $detservicio->colaborador->email }}</td>
                <th width="20%">Teléfono</th>
                <td width="20%">{{ $detservicio->colaborador->telefono }} </td>
            </tr>
            <tr>
                <th>Estado civil</th>
                <td>{{ $detservicio->colaborador->estciv->nombre }}</td>
                <th>Grado de Instrucción</th>
                <td>{{ $detservicio->colaborador->gradinst->nombre }} </td>
            </tr>
            <tr>
                <th>N° Total de Hijos</th>
                <td>{{ $detservicio->colaborador->numhijos }}</td>
                <th>N° Dependientes</th>
                <td>{{ $detservicio->colaborador->numdepend }} </td>
            </tr>
            <tr>
                <th colspan="4">III. ANTECEDENTES OCUPACIONALES</th>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='30%'>Nombre de la Empresa</th>
                <th width='15%'>Área</th>
                <th width='15%'>Puesto</th>
                <th width='10%'>Año</th>
                <th width='10%'>Tiempo</th>
                <th width='10%'>Exposición</th>
                <th width='10%'>EPP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detservicio->colaborador->colantocupacionals as $ant)
            <tr>
                <td>{{ $ant->empresa }}</td>
                <td>{{ $ant->area->nombre }}</td>
                <td>{{ $ant->puesto->nombre }}</td>
                <td>{{ $ant->fecha }}</td>
                <td>{{ $ant->tiempo }}</td>
                <td>{{ $ant->exposicion==1 ? 'SI' : 'No' }}</td>
                <td>{{ $ant->epp==1 ? 'SI' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="10">IV. ANTECEDENTES PATOLÓGICOS</th>
            </tr>
            <tr>
                <th width="10%">Alergias</th>
                <td colspan="5" width="30%">{{ empty($detservicio->colaborador->colantpatologico->descalergias)?'NINGUNA':$detservicio->colaborador->colantpatologico->descalergias }}</td>
                <th width="10%">Diabetes</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->diabetes==1?'SI':'NO' }}</td>
                <th width="10%">Tbc</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->tbc==1?'SI':'NO' }}</td>
                
            </tr>
                <th width="10%">Hepatitis B</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->hepatitis==1?'SI':'NO' }}</td>
                <th width="10%">Asma</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->asma==1?'SI':'NO' }}</td>
                <th width="10%">HTA</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->hta==1?'SI':'NO' }}</td>
                <th width="10%">ITS</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->its==1?'SI':'NO' }}</td>
                <th width="10%">Tifoidea</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->tifoidea==1?'SI':'NO' }}</td>
            <tr>
            </tr>
                <th width="10%">Bronquitis</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->bronquitis==1?'SI':'NO' }}</td>
                <th width="10%">Neoplasia</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->neoplasia==1?'SI':'NO' }}</td>
                <th width="10%">Convulsiones</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->convulsion==1?'SI':'NO' }}</td>
                <th width="10%">Intoxicaciones</th>
                <td width="10%">{{ $detservicio->colaborador->colantpatologico->intoxicacion==1?'SI':'NO' }}</td>
                <td colspan="2"></td>
            <tr>
            <tr>
                <th width="10%">Medicamentos</th>
                <td colspan="9" width="90%">{{ $detservicio->colaborador->colantpatologico->medicamento }}</td>
            </tr>
            <tr>
                <th width="10%">Quemaduras</th>
                <td colspan="9" width="90%">{{ $detservicio->colaborador->colantpatologico->quemadura }}</td>
            </tr>
            <tr>
                <th width="10%">Cirugias</th>
                <td colspan="9" width="90%">{{ $detservicio->colaborador->colantpatologico->cirugia }}</td>
            </tr>
            <tr>
                <th width="10%">Otros</th>
                <td colspan="9" width="90%">{{ $detservicio->colaborador->colantpatologico->otros }}</td>
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
<br><br>
<div class="detalleocupacional">
    <table>
        <thead>
            <tr>
                <th width="20%">Hábitos Nocivos</th>
                <th width="80%">Frecuencia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Alcohol</th>
                <td>{{ $detservicio->colaborador->colantpatologico->alcohol }}</td>
            </tr>
            <tr>
                <th>Tabaco</th>
                <td>{{ $detservicio->colaborador->colantpatologico->tabaco }}</td>
            </tr>
            <tr>
                <th>Drogas</th>
                <td>{{ $detservicio->colaborador->colantpatologico->droga }}</td>
            </tr>
            <tr>
                <th colspan="2">V. ANTECEDENTES PATOLÓGICOS FAMILIARES</th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="10%">Padre</th>
                <td width="20%">{{  $detservicio->colaborador->colantfamiliar->padre }}</td>
                <th width="10%">Madre</th>
                <td width="20%">{{ $detservicio->colaborador->colantfamiliar->madre }}</td>
                <th width="15%">Hermano</th>
                <td width="20%">{{ $detservicio->colaborador->colantfamiliar->hermano }}</td>
            </tr>
            <tr>
                <th>Esposo(a)</th>
                <td>{{  $detservicio->colaborador->colantfamiliar->esposo }}</td>
                <th>Hijos vivos</th>
                <td>{{ $detservicio->colaborador->colantfamiliar->hijo_viv }}</td>
                <th>Hijos fallecidos</th>
                <td>{{ $detservicio->colaborador->colantfamiliar->hijo_fall }}</td>
            </tr>
            <tr>
                <th colspan="6">Absentismo: Enfermedades y Accidentes (asociado a trabajo o no)</th>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th rowspan="2" width="40%">Enfermedad, Accidente</th>
                <th colspan="2" width="20%" class="text-center">Asociado a Trabajo</th>
                <th rowspan="2" width="10%" class="text-center">Año</th>
                <th rowspan="2" width="30%">Días de descanso</th>
            </tr>
            <tr>
                <th width="10%" class="text-center">SI</th>
                <th width="10%" class="text-center">NO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $detservicio->colaborador->colantfamiliar->enfact1 }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->asoctrab1==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->asoctrab1==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->anio1 }}</td>
                <td>{{ $detservicio->colaborador->colantfamiliar->diasdesc1 }}</td>
            </tr>
            <tr>
                <td>{{ $detservicio->colaborador->colantfamiliar->enfact2 }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->asoctrab2==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->asoctrab2==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->anio2 }}</td>
                <td>{{ $detservicio->colaborador->colantfamiliar->diasdesc2 }}</td>
            </tr>
            <tr>
                <th colspan="5">VI. EVALUACIÓN MÉDICA</th>
            </tr>
            <tr>
                <td colspan="5" class="espaciado">
                    <strong>Anamnesis</strong><br>{{$detservicio->examedico->anamnesis}}
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="20%" rowspan="3">Examen Clínico</th>
                <th width="10%">Talla (m)</th>
                <td width="10%">{{ $detservicio->examedico->talla }}</td>
                <th width="10%">Peso (Kg.)</th>
                <td width="10%">{{ $detservicio->examedico->peso }}</td>
                <th width="10%">IMC</th>
                <td width="10%">{{ $detservicio->examedico->imc }}</td>
                <th width="10%">Perímetro Abdominal</th>
                <td width="10%">{{ $detservicio->examedico->pabdominal }}</td>
            </tr>
            <tr>
                <th>Fresp</th>
                <td>{{ $detservicio->examedico->fresp }}</td>
                <th>Fcard</th>
                <td>{{ $detservicio->examedico->fcard }}</td>
                <th>PA</th>
                <td>{{ $detservicio->examedico->pa }}</td>
                <th>Temperatura</th>
                <td>{{ $detservicio->examedico->temperatura }}</td>
            </tr>
            <tr>
                <th>Otros</th>
                <td colspan="7">{{ $detservicio->examedico->otros }}</td>
            </tr>
            <tr>
                <th>Ectoscopía</th>
                <td colspan="8" class="espaciado">{{ $detservicio->examedico->ectoscopia }}</td>
            </tr>
            <tr>
                <th>Estado mental</th>
                <td colspan="8" class="espaciado">{{ $detservicio->examedico->estmental }}</td>
            </tr>
            <tr>
                <th colspan="9">EXAMEN FÍSICO</th>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width="20%">Organo o sistema</th>
                <th width="80%">Hallazgos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Piel</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'piel') }}</td>
            </tr>
            <tr>
                <th>Cabeza</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'cabeza') }}</td>
            </tr>
            <tr>
                <th>Ojos y Anexos</th>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td valign='center' width="50%">
                                    <table class="table table-condensed table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" width="10%" class="text-center">OJOS</th>
                                                <th colspan="2" width="15%" class="text-center">SIN CORREGIR</th>
                                                <th colspan="2" width="15%" class="text-center">CORREGIDA</th>
                                            </tr>
                                            <tr>
                                                <th width="7.5%" class="text-center">OD</th>
                                                <th width="7.5%" class="text-center">OI</th>
                                                <th width="7.5%" class="text-center">OD</th>
                                                <th width="7.5%" class="text-center">OI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>VISIÓN DE CERCA</td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vc_sc_od }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vc_sc_oi }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vc_cc_od }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vc_cc_oi }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>VISIÓN DE LEJOS</td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vl_sc_od }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vl_sc_oi }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vl_cc_od }}
                                                </td>
                                                <td>
                                                    {{ $detservicio->exaoftalmo->vl_cc_oi }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="50%" valign='top' class="espaciado">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th width="50%">
                                                    Enfermedades Oculares
                                                </th>
                                                <td width="50%">
                                                    {{ kvfj($detservicio->examedico->hallazgos, 'oj_enfocu') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">
                                                    Reflejos Pupilares
                                                </th>
                                                <td width="50%">
                                                    {{ kvfj($detservicio->examedico->hallazgos, 'oj_refpup') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">
                                                    Visión de Colores
                                                </th>
                                                <td width="50%">
                                                    {{ kvfj($detservicio->examedico->hallazgos, 'oj_vcol') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="50%">
                                                    Visión de Profundidad
                                                </th>
                                                <td width="50%">
                                                    {{ kvfj($detservicio->examedico->hallazgos, 'oj_vprof') }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <th>Oídos</th>
                <td>{{ 'Derecho: '.$detservicio->exaaudio->oidoder.' / Izquierdo:'.$detservicio->exaaudio->oidoizq }}</td>
            </tr>
            <tr>
                <th>Nariz</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'nariz') }}</td>
            </tr>
            <tr>
                <th class="espaciado">Boca, Amígdalas, Faringe, Laringe</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'boca') }}</td>
            </tr>
            <tr>
                <th>Cuello</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'cuello') }}</td>
            </tr>
            <tr>
                <th>Aparato respiratorio</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'aprespira') }}</td>
            </tr>
            <tr>
                <th>Aparato cardiovascular</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'apcardio') }}</td>
            </tr>
            <tr>
                <th>Aparato digestivo</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'apdiges') }}</td>
            </tr>
            <tr>
                <th>Aparato genitourinario</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'apgenit') }}</td>
            </tr>
            <tr>
                <th>Aparato locomotor</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'aploco') }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always;"></div>
{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 3 --------------------------------------------------------}}
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
                    PÁGINA: <strong>03</strong>
                </div>
            </td>
        </tr>
    </thead>
</table>
<br><br>
<div class="detalleocupacional">
    <table>
        <thead>
            <tr>
                <th width="25%">Organo o sistema</th>
                <th width="75%">Hallazgos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Marcha</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'marcha') }}</td>
            </tr>
            <tr>
                <th>Columna</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'columna') }}</td>
            </tr>
            <tr>
                <th>Miembros superiores</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'miesup') }}</td>
            </tr>
            <tr>
                <th>Miembros inferiores</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'mieinf') }}</td>
            </tr>
            <tr>
                <th>Sistema Linfático</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'sislinf') }}</td>
            </tr>
            <tr>
                <th>Sistema Nervioso</th>
                <td>{{ kvfj($detservicio->examedico->hallazgos, 'sisnerv') }}</td>
            </tr>
            <tr>
                <th colspan="2">VII. Conclusiones de Evaluación Psicológica</th>
            </tr>
            <tr>
                <td colspan="2">
                    @if ($detservicio->exapsico()->count() <> 0)
                        {{$detservicio->exapsico->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">VIII. Conclusiones Radiográficas</th>
            </tr>
            <tr>
                <td colspan="2">
                    @if ($detservicio->exaradio()->count() <> 0)
                        {{$detservicio->exaradio->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">IX. Conclusión (EKG)</th>
            </tr>
            <tr>
                <td colspan="2">
                    @if ($detservicio->exaekg()->count() <> 0)
                        {{$detservicio->exaekg->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">X. Hallazgos de Laboratorio</th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="25%">Grupo Sanguineo y Factor RH</th>
                <td width="35%">{{ $laboratorio['GrupoSan'].' '.$laboratorio['FactorRH'] }}</td>
                <th width="15%">Examen Orina</th>
                <td width="25%">{{$detservicio->orinap==1?'Positivo':'Negativo'}}</td>
            </tr>
            <tr>
                <th colspan="4">XI. Conclusión Audiométrica</th>
            </tr>
            <tr>
                <td colspan="4">
                    @if ($detservicio->exaaudio()->count() <> 0)
                        {{$detservicio->exaaudio->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="4">XII. Conclusión Espirometría</th>
            </tr>
            <tr>
                <td colspan="4">
                    @if ($detservicio->exaespiro()->count() <> 0)
                        {{$detservicio->exaespiro->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="4">XIII. Conclusión Odontológica</th>
            </tr>
            <tr>
                <td colspan="4">
                    @if ($detservicio->exaodonto()->count() <> 0)
                        {{$detservicio->exaodonto->conclusion}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="4">XIV. Conclusión Oftalmológica</th>
            </tr>
            <tr>
                <td colspan="4">
                    @if ($detservicio->exaodonto()->count() <> 0)
                        {{$detservicio->exaoftalmo->recomendaciones}}
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="70%">DIAGNÓSTICO OCUPACIONAL</th>
                <th width="5%" class="text-center">P</th>
                <th width="5%" class="text-center">D</th>
                <th width="5%" class="text-center">R</th>
                <th width="15%" class="text-center">CIE - 10</th>
            </tr>
            <tr>
                <td>{{$detservicio->diagocu}}</td>
                <td class="text-center">{{ $detservicio->diagpdr==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->diagpdr==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->diagpdr==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->diagcie }}</td>
            </tr>
            <tr>
                <th width="70%">OTROS DIAGNÓSTICOS</th>
                <th width="5%" class="text-center">P</th>
                <th width="5%" class="text-center">D</th>
                <th width="5%" class="text-center">R</th>
                <th width="15%" class="text-center">CIE - 10</th>
            </tr>
            <tr>
                <td>{{$detservicio->otrdiagocu1}}</td>
                <td class="text-center">
                    @if ($detservicio->otrdiagpdr1==1&&!empty($detservicio->otrdiagocu1))
                    X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                    {{-- {{ $detservicio->otrdiagpdr1==1&&!empty($detservicio->otrdiagocu1)?'X':'' }} --}}
                </td>
                <td class="text-center">{{ $detservicio->otrdiagpdr1==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr1==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie1 }}</td>
            </tr>
            <tr>
                <td>{{$detservicio->otrdiagocu2}}</td>
                <td class="text-center">
                    @if ($detservicio->otrdiagpdr2==1&&!empty($detservicio->otrdiagocu2))
                    X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                    {{-- {{ $detservicio->otrdiagpdr2==1&&!empty($detservicio->otrdiagocu2)?'X':'' }} --}}
                </td>
                <td class="text-center">{{ $detservicio->otrdiagpdr2==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr2==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie2 }}</td>
            </tr>
            <tr>
                <td>{{$detservicio->otrdiagocu3}}</td>
                <td class="text-center">
                    @if ($detservicio->otrdiagpdr3==1&&!empty($detservicio->otrdiagocu3))
                    X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                    {{-- {{ $detservicio->otrdiagpdr3==1&&!empty($detservicio->otrdiagocu3)?'X':'' }} --}}
                </td>
                <td class="text-center">{{ $detservicio->otrdiagpdr3==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr3==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie3 }}</td>
            </tr>
            @if (!empty($detservicio->otrdiagocu4))
            <tr>
                <td>{{$detservicio->otrdiagocu4}}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr4==1&&!empty($detservicio->otrdiagocu4)?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr4==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr4==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie4 }}</td>
            </tr>
            @endif
            @if (!empty($detservicio->otrdiagocu5))
            <tr>
                <td>{{$detservicio->otrdiagocu5}}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr5==1&&!empty($detservicio->otrdiagocu5)?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr5==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr5==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie5 }}</td>
            </tr>                
            @endif
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="25%">RESULTADO</th>
                <th width="75%">{{ $resultado[$detservicio->resultado] }}</th>
            </tr>
            <tr>
                <th colspan="2">XV. Recomendaciones</th>
            </tr>
            <tr>
                <td colspan="2">{{ $detservicio->recomendaciones }}</td>
            </tr>
            <tr>
                <th colspan="2">Restricciones</th>
            </tr>
            <tr>
                <td colspan="2">{{ $detservicio->restricciones }}</td>
            </tr>
        </tbody>
    </table>
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="50%" class="text-center">
                <br><br><br><br>
                .......................................................................
                <div class="lchicas">
                    Huella digital y firma del paciente<br>
                    con los cuales declara que la información declarada es veraz<br>
                    Documento válido para la historia clínica ocupacional.
                </div>
            </td>
            <td width="50%" class="text-center letra10">
                <div>
                    @if (empty($detservicio->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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