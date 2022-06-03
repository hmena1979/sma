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
<div class="cuadropagina">
    <table class="cuadrosborde">
        <tbody>
            <tr>
                <td width='68%'>
                    <div class="text-center letra12 negrita">
                        INFORME DE EVALUACIÓN MÉDICO OCUPACIONAL
                    </div>
                </td>
                <td width='22%'>
                    <table class="cuadrosborde letra9">
                        <tbody>
                            <tr>
                                <th class="text-left">PRE-OCUPACIONAL</th>
                                <td class="celda">
                                    @if ($detservicio->servicio->evaluacion==1)
                                        X
                                    @else
                                    {!! htmlspecialchars_decode("&nbsp;") !!}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ANUAL</th>
                                <td class="celda">
                                    @if ($detservicio->servicio->evaluacion==2)
                                        X
                                    @else
                                    {!! htmlspecialchars_decode("&nbsp;") !!}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">RETIRO</th>
                                <td class="celda">
                                    @if ($detservicio->servicio->evaluacion==3)
                                        X
                                    @else
                                    {!! htmlspecialchars_decode("&nbsp;") !!}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra10 text-left">
        <tbody>
            <tr>
                <th>Paciente:</th>
                <td colspan="5">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th width="15%">N° Documento:</th>
                <td width="20%">{{ $detservicio->colaborador->numdoc }}</td>
                <th width="17%">Fecha de Emisión:</th>
                <td width="14%">{{ date('d-m-Y',strtotime($detservicio->examedico->fecha)) }}</td>
                <th width="21%">Fecha de Vencimiento:</th>
                <td width="13%">{{ date('d-m-Y',strtotime(\Carbon\Carbon::parse($detservicio->examedico->fecha)->addyear(1))) }}
                </td>
            </tr>
            <tr>
                <td colspan="6">{!! htmlspecialchars_decode("&nbsp;") !!}</td>
            </tr>
            <tr>
                <td colspan="6">
                    A continuación detallamos los resultados de su evaluación médico 
                    {{ $detservicio->servicio->eval->nombre }}, que realizó el día {{ date('d-m-Y',strtotime($detservicio->examedico->fecha)) }} 
                    en las instalaciones DEL {{ $param->razsoc }}
                </td>
            </tr>
            <tr>
                <td colspan="6">{!! htmlspecialchars_decode("&nbsp;") !!}</td>
            </tr>
            <tr>
                <th colspan="6" class="subrayado">1.- ANTECEDENTES</th>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra10 text-left">
        <tbody>
            <tr>
                <th colspan="3" width='30%'>Antecedentes Familiares:</th>
                <td width='65%'>{{ $detservicio->colaborador->colantpatologico->antfamiliar }}</td>
            </tr>
            <tr>
                <th colspan="3">Antecedentes Personales:</th>
                <td>{{ $detservicio->colaborador->colantpatologico->antpersonal }}</td>
            </tr>
            <tr>
                <th colspan="4">Hábitos nocivos:</th>
            </tr>
            <tr>
                <td width='20%' colspan="2"></td>
                <th width='10%'>Bebe</th>
                <td>{{ $detservicio->colaborador->colantpatologico->alcohol }}</td>
            </tr>
            <tr>
                <td width='20%' colspan="2"></td>
                <th width='10%'>Fuma</th>
                <td>{{ $detservicio->colaborador->colantpatologico->tabaco }}</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th width='20%' colspan="2">Alergias</th>
                <td>{{ $detservicio->colaborador->colantpatologico->descalergias }}</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Sintomas</th>
                <td>{{ $detservicio->colaborador->colantpatologico->otros }}</td>
            </tr>
            <tr>
                <td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td>
            </tr>
            <tr>
                <th colspan="4" class="subrayado">2.- EXAMEN CLÍNICO</th>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Peso</th>
                <td>{{ $detservicio->examedico->peso }} Kg</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Talla</th>
                <td>{{ $detservicio->examedico->talla }} mts</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Indice de Masa Corporal</th>
                <td>{{ $detservicio->examedico->imc }} Kg/mt<sup>2</sup></td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Perímetro abdominal</th>
                <td>{{ $detservicio->examedico->pabdominal }}</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Presión Arterial</th>
                <td>{{ $detservicio->examedico->pa }}</td>
            </tr>
            <tr>
                <th colspan="4">Evaluación por sistemas y aparatos</th>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Hallazgos al Examen Físico</th>
                <td>{{ $detservicio->examedico->hallazgoexafisico }}</td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Examen Físico Restante</th>
                <td>{{ $detservicio->examedico->hallazgorestante}}</td>
            </tr>
            <tr>
                <td colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</td>
            </tr>
            <tr>
                <th colspan="4" class="subrayado">3.- EXAMEN COMPLEMENTARIO</th>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Examen oftalmológico</th>
                <td>
                    @if ($detservicio->exaoftalmo()->count() <> 0)
                        {{$detservicio->exaoftalmo->recomendaciones}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Examen Odontológico</th>
                <td>
                    @if ($detservicio->exaodonto()->count() <> 0)
                        {{$detservicio->exaodonto->conclusion}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Examen Psicológico</th>
                <td>
                    @if ($detservicio->exapsico()->count() <> 0)
                        {{$detservicio->exapsico->conclusion}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Radiografía de Tórax</th>
                <td>
                    @if ($detservicio->exaradio()->count() <> 0)
                        {{$detservicio->exaradio->conclusion}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Electrocardiograma</th>
                <td>
                    @if ($detservicio->exaekg()->count() <> 0)
                        {{$detservicio->exaekg->conclusion}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Espirometría</th>
                <td>
                    @if ($detservicio->exaespiro()->count() <> 0)
                        {{$detservicio->exaespiro->conclusion}}
                    @endif
                </td>
            </tr>
            <tr>
                <td width='10%'></td>
                <th colspan="2">Audiometría</th>
                <td>
                    @if ($detservicio->exaaudio()->count() <> 0)
                        {{$detservicio->exaaudio->conclusion}}
                    @endif
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
<div class="cuadropagina">
    <table class="cuadrosborde letra10 text-left">
        <tbody>
            <tr>
                <th colspan="4">Las pruebas de laboratorio determinan</th>
            </tr>
            <tr>
                <th colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</th>
            </tr>
            <tr>
                <th width='20%'>Hemoglobina</th>
                <td width='30%'>: {{ $detservicio->hemoglobina }} mg/dl</td>
                <th width='20%'>TGO</th>
                <td width='30%'>: {{ $laboratorio['TGO']}} mg/dl</td>
            </tr>
            <tr>
                <th>Glucosa</th>
                <td>: {{ $laboratorio['Glucosa'] }} mg/dl</td>
                <th>TGP</th>
                <td>: {{ $laboratorio['TGP']}} mg/dl</td>
            </tr>
            <tr>
                <th>Trigliceridos</th>
                <td>: {{ $laboratorio['Trigliceridos'] }} mg/dl</td>
                <th>Creatinina</th>
                <td>: {{ $laboratorio['Creatinina']}} mg/dl</td>
            </tr>
            <tr>
                <th>Colesterol Total</th>
                <td>: {{ $laboratorio['Colesterol'] }} mg/dl</td>
                <th>Ácido úrico</th>
                <td>: {{ $laboratorio['AUrico']}} mg/dl</td>
            </tr>
            <tr>
                <th>HDL</th>
                <td>: {{ $laboratorio['HDL'] }} mg/dl</td>
                <th>Urea</th>
                <td>: {{ $laboratorio['Urea']}} mg/dl</td>
            </tr>
            <tr>
                <th>LDL</th>
                <td>: {{ $laboratorio['LDL'] }} mg/dl</td>
                <th>Grupo Sanguíneo</th>
                <td>: {{ $laboratorio['GrupoSan']}}</td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <th>Factor RH</th>
                <td>: {{ $laboratorio['FactorRH']}}</td>
            </tr>
            <tr>
                <th colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</th>
            </tr>
            <tr>
                <th colspan="4" class="subrayado">4.- CONCLUSIÓN :</th>
            </tr>
            <tr>
                <td colspan="4" class="espaciado">
                    {!! htmlspecialchars_decode(nl2br($detservicio->conclusion)) !!}
                </td>
            </tr>
            <tr>
                <th colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</th>
            </tr>
            <tr>
                <th colspan="4" class="subrayado">5.- RECOMENDACIÓN :</th>
            </tr>
            <tr>
                <td colspan="4" class="espaciado">
                    {!! htmlspecialchars_decode(nl2br($detservicio->recomendaciones)) !!}
                </td>
            </tr>
            <tr>
                <th colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</th>
            </tr>
            <tr>
                <th colspan="4" class="subrayado">6.- RESTRICCIONES :</th>
            </tr>
            <tr>
                <td colspan="4" class="espaciado">
                    {!! htmlspecialchars_decode(nl2br($detservicio->restricciones)) !!}
                </td>
            </tr>
            <tr>
                <th colspan="4">{!! htmlspecialchars_decode("&nbsp;") !!}</th>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra10">
        <tbody>
            <tr>
                <td width='30%'></td>
                <td width='10%'></td>
                <td width='40%'>
                    <div class="text-center negrita">
                        Cordialmente:<br>
                        {{ $param->razsoc }}
                    </div>
                </td>
                <td width='10%'></td>
                <td width='10%'></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    <div class="text-justify cuadroredondeado">
                        El trabajador deja constancia de haber comprendido el 
                        contenido de este informe, y debe de realizar su próximo 
                        examen médico ocupacional anual durante el mes de 
                        vencimiento. En caso de tener observaciones es 
                        importante que cumpla con las recomendaciones médicas 
                        del presente informe para el mantenimiento de su salud.
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra10">
        <thead>
            <tr>
                <td width="50%" class="text-center">
                    <br><br><br><br>
                    {{-- .......................................................................
                    <div class="lchicas">
                        Firma y Huella digital del paciente
                    </div> --}}
                </td>
                <td width="50%" class="text-center letra10">
                    <div>
                        @if (empty($detservicio->examedico->doctor_id))
                        <br><br><br><br>
                        @else
                            @if (empty($detservicio->examedico->doctor->firma))
                            <br><br><br><br>
                            @else
                            <img src="{{ url('firmas/'.$detservicio->examedico->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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
</div>