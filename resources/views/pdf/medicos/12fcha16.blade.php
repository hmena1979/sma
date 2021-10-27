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
<table class="cuadrosborde">
    <tbody>
        <tr>
            <td width='68%'>
                <div class="text-center letra12 negrita">
                    FICHA MÉDICA OCUPACIONAL N° 16
                </div>
                <br>
                <div class="text-center letra11">
                    {{ $detservicio->servicio->cliente->razsoc }}
                </div>
            </td>
            <td width='22%'>
                <table class="cuadrosborde letra9">
                    <tbody>
                        <tr>
                            <th class="text-left">PRE-OCUPACIONAL</th>
                            <td class="celdamuychica">
                                @if ($detservicio->servicio->evaluacion==1)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left">ANUAL</th>
                            <td class="celdamuychica">
                                @if ($detservicio->servicio->evaluacion==2)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left">RETIRO</th>
                            <td class="celdamuychica">
                                @if ($detservicio->servicio->evaluacion==3)
                                    X
                                @else
                                {!! htmlspecialchars_decode("&nbsp;") !!}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left">REUBICACIÓN</th>
                            <td class="celdamuychica">
                                @if ($detservicio->servicio->evaluacion==4)
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
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width='25%'>APELLIDOS Y NOMBRES:</th>
                <td width='35%'>{{ $detservicio->colaborador->nombres }}</td>
                <th width='15%'>N° FICHA:</th>
                <td width='25%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
            </tr>
            <tr>
                <th>FECHA DEL EXAMEN:</th>
                <td>{{date('d-m-Y',strtotime($detservicio->examedico->fecha))}}</td>
                <th>ACTIVIDAD:</th>
                <td>{{ $detservicio->servicio->cliente->actividad }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='30%'>LUGAR Y FECHA DE NACIMIENTO:</th>
                <th width='28%'>DOMICILIO HABITUAL:</th>
                <td rowspan="2" width='15%'>
                    <div class="tablacerobordes">
                        <table class="letra9">
                            <tbody>
                                <tr>
                                    <th class="text-left">SUPERFICIE</th>
                                    <td class="">
                                        @if ($detservicio->servicio->evaluacion==1)
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left">CONCENTRADORA</th>
                                    <td class="">
                                        @if ($detservicio->servicio->evaluacion==2)
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left">SUBSUELO</th>
                                    <td class="">
                                        @if ($detservicio->servicio->evaluacion==3)
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <th width='17%'>ALTITUD DE LA LABOR:</th>
            </tr>
            <tr>
                <td>{{ $detservicio->colaborador->lugnac.' '.date('d-m-Y',strtotime($detservicio->colaborador->fecnac)) }}</td>
                <td>{{ $detservicio->colaborador->domicilio }}</td>
                <td>{{ $altitud[$detservicio->altitud] }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='10%'>EDAD</th>
                <th width='15%'>SEXO</th>
                <th width='25%'>DOCUMENTO DE IDENTIDAD</th>
                <th width='20%'>ESTADO CIVIL</th>
                <th width='30%'>GRADO DE INSTRUCCIÓN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
                <td>{{ $detservicio->colaborador->numdoc }}</td>
                <td>{{ $detservicio->colaborador->estciv->nombre }}</td>
                <td>{{ $detservicio->colaborador->gradinst->nombre }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='70%'>
                    <div class="tablacerobordes">
                        <table class="letra9">
                            <tbody>
                                <tr>
                                    <th width='18%' class="text-left">Ruido</th>
                                    <td width='5%' class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prruido'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td width='2%'></td>
                                    <th width='18%' class="text-left">Cancerigenos</th>
                                    <td width='5%' class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prcancerigenos'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td width='2%'></td>
                                    <th width='18%' class="text-left">Temperaturas</th>
                                    <td width='5%' class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prtemperaturas'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td width='2%'></td>
                                    <th width='18%' class="text-left">Cargas</th>
                                    <td width='5%' class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prcargas'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td width='2%'></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Polvo</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prpolvo'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Mutágenos</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prmutagenico'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Biológicos</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prbiologico'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Mov.Repet.</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prmovrep'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Vib.Segmentaria</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prvibseg'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Solventes</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prsolvente'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Posturas</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prpostura'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">PVD</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prpvd'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Vib.Total</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prvibtot'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Met. Pesados</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prmetpesado'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left">Turnos</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'prturno'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td></td>
                                    <th class="text-left"></th>
                                    <td class="text-left">
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="text-left">Otros</th>
                                    <td class="text-left">
                                        @if (kvfj($detservicio->riesgos, 'protros'))
                                            (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </td>
                                    <td>:</td>
                                    <td colspan="9" class="text-left">{{ kvfj($detservicio->riesgos, 'protros') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <td width='30%' valign='top' class="espaciadonormal">
                    <div class="negrita">Describir según corresponda:</div>
                    <div class="negrita">Puesto al que postula:</div>
                    <div>{{ $detservicio->puesto->nombre }}</div>
                    <div class="negrita">Puesto Actual:</div>
                    <div>{{ $detservicio->ocuactual }}</div>
                    <div>
                        <strong>Reubicación:</strong> SI
                        @if ($detservicio->reubicacion==1)
                            (X)
                        @else
                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                        @endif
                        {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!}NO
                        @if ($detservicio->reubicacion==2)
                            (X)
                        @else
                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                        @endif
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td class="espaciadonormal">
                    <div class="negrita">ANTECEDENTES OCUPACIONALES</div>
                    <div>
                        @foreach ($detservicio->colaborador->colantocupacionals as $ocupacional)
                            Año: {{ $ocupacional->fecha }} Empresa: {{ $ocupacional->empresa }} 
                            Puesto: {{ $ocupacional->puesto->nombre }} 
                            Tiempo: {{ $ocupacional->tiempo }}<br>
                        @endforeach
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="negrita">ANTECEDENTES PERSONALES(Enfermedades y accidentes en el trabajo y fuera del mismo)</div>
                    @if (empty($detservicio->colaborador->colantfamiliar->enfact1) || empty($detservicio->colaborador->colantfamiliar->enfact2))
                        <br>
                    @else                        
                    <div>{{ $detservicio->colaborador->colantfamiliar->enfact1.' '.$detservicio->colaborador->colantfamiliar->enfact2 }}</div>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='40%'>ANTECEDENTES FAMILIARES</th>
                <th width='40%'>INMUNIZACIONES</th>
                <th colspan="2" width='20%' class="text-center">NÚMERO DE HIJOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">{{ Str::upper($detservicio->colaborador->colantpatologico->antfamiliar) }}</td>
                <td rowspan="2">{{ Str::upper($detservicio->colaborador->colantpatologico->inmunizaciones) }}</td>
                <td class="negrita text-center">VIVOS</td>
                <td class="negrita text-center">MUERTOS</td>
            </tr>
            <tr>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->hijo_viv }}</td>
                <td class="text-center">{{ $detservicio->colaborador->colantfamiliar->hijo_fall }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='29%' class="text-center">HÁBITOS</th>
                <th width='8%' class="text-center">TALLA</th>
                <th width='8%' class="text-center">PESO</th>
                <th width='30%' class="text-center">FUNCIÓN RESPIRATORIA Abs %</th>
                <th width='25%' class="text-center">TEMPERATURA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="3" class="espaciadonormal" valign='top'>
                    <div><strong>Tabaco:</strong> {{ $detservicio->colaborador->colantpatologico->tabaco }}</div>
                    <div><strong>Alcohol:</strong> {{ $detservicio->colaborador->colantpatologico->alcohol }}</div>
                    <div><strong>Drogas:</strong> {{ $detservicio->colaborador->colantpatologico->droga }}</div>
                </td>
                <td class="text-center">{{ $detservicio->examedico->talla }}</td>
                <td class="text-center">{{ $detservicio->examedico->peso }}</td>
                <td rowspan="3" class="espaciadonormal" valign='top'>
                    <div><strong>FVC:</strong> {{ $detservicio->exaespiro->fvc_pred }}</div>
                    <div><strong>FEV1:</strong> {{ $detservicio->exaespiro->fev1_pred }}</div>
                    <div>
                        <strong>FEV1/FVC:</strong> 
                        @if ($detservicio->exaespiro->fvc_pred>0) $detservicio->exaespiro->fev1_pred / $detservicio->exaespiro->fvc_pred @endif
                    </div>
                    <div><strong>FEF 25-75:</strong> {{ $detservicio->exaespiro->f25_pred+$detservicio->exaespiro->f50_pred }}</div>
                    <div><strong>CONCLUSIÓN:</strong> {{ $detservicio->exaespiro->conclusion }}</div>
                </td>
                <td class="text-center">{{ $detservicio->examedico->temperatura }}</td>
            </tr>
            <tr>
                <th colspan="2" class="text-center">IMC</th>
                <td rowspan="2" class="espaciadonormal" valign='top'>
                    <div><strong>Cintura:</strong> {{ $detservicio->examedico->cintura }}</div>
                    <div><strong>Cadera:</strong> {{ $detservicio->examedico->cadera }}</div>
                    <div><strong>ICC:</strong></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">{{ $detservicio->examedico->imc }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td colspan="2" class="espaciadonormal">
                    <div class="negrita">CABEZA</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'cabeza') }}</div>
                </td>
            </tr>
            <tr>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">CUELLO</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'cuello') }}</div>
                </td>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">NARIZ</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'nariz') }}</div>
                </td>
            </tr>
            <tr>
                <td class="espaciadonormal">
                    <div class="negrita">BOCA, AMÍGNADALAS, FARINGE, LARINGE</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'boca') }}</div>
                </td>
                <td class="espaciadonormal">
                    <div><strong>Piezas en mal estado:</strong> {{ kvfj($detservicio->examedico->hallazgos, 'piezaeme') }}</div>
                    <div><strong>Piezas que faltan:</strong> {{ kvfj($detservicio->examedico->hallazgos, 'piezaf') }}</div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%' rowspan="2">OJOS</th>
                <th width='20%' colspan="2" class="text-center">SIN CORREGIR</th>
                <th width='20%' colspan="2" class="text-center">CORREGIDA</th>
                <td width='40%' rowspan="5" valign = 'top' class="espaciadonormal">
                    <div class="negrita">ENFERMEDADES OCULARES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'oj_enfocu') }}</div>
                    <div class="negrita">REFLEJOS PUPILARES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'oj_refpup') }}</div>
                </td>
            </tr>
            <tr>
                <th class="text-center">OI</th>
                <th class="text-center">OD</th>
                <th class="text-center">OI</th>
                <th class="text-center">OD</th>
            </tr>
            <tr>
                <th>VISIÓN DE CERCA</th>
                <td class="text-center">{{ $detservicio->exaoftalmo->vc_sc_oi }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vc_sc_od }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vc_cc_oi }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vc_cc_od }}</td>
            </tr>
            <tr>
                <th>VISIÓN DE LEJOS</th>
                <td class="text-center">{{ $detservicio->exaoftalmo->vl_sc_oi }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vl_sc_od }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vl_cc_oi }}</td>
                <td class="text-center">{{ $detservicio->exaoftalmo->vl_cc_od }}</td>
            </tr>
            <tr>
                <th>VISIÓN DE COLORES</th>
                <td colspan="4">{{ kvfj($detservicio->examedico->hallazgos, 'oj_vcol') }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='50%'>
                    OIDOS Audición derecha
                    <table>
                        <tbody>
                            <tr>
                                <th width='12%' class="text-center">HZ</th>
                                <th class="text-center">500</th>
                                <th class="text-center">1000</th>
                                <th class="text-center">2000</th>
                                <th class="text-center">3000</th>
                                <th class="text-center">4000</th>
                                <th class="text-center">6000</th>
                                <th class="text-center">8000</th>
                            </tr>
                            <tr>
                                <th class="text-center">dB (A)</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od500 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od1000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od2000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od3000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od4000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od6000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->od8000 }}</th>
                            </tr>
                        </tbody>
                    </table>
                </th>
                <th width='50%'>
                    Audición izquierda
                    <table>
                        <tbody>
                            <tr>
                                <th class="text-center">HZ</th>
                                <th class="text-center">500</th>
                                <th class="text-center">1000</th>
                                <th class="text-center">2000</th>
                                <th class="text-center">3000</th>
                                <th class="text-center">4000</th>
                                <th class="text-center">6000</th>
                                <th class="text-center">8000</th>
                            </tr>
                            <tr>
                                <th class="text-center">dB (A)</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi500 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi1000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi2000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi3000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi4000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi6000 }}</th>
                                <th class="text-center">{{ $detservicio->exaaudio->oi8000 }}</th>
                            </tr>
                        </tbody>
                    </table>
                </th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='10%' rowspan="3">OTOSCOPIA</td>
                <td width='40%' rowspan="3">
                    <div><strong>OD: </strong>{{ $detservicio->exaaudio->oidoder }}</div>
                    <br>
                    <div><strong>OI: </strong>{{ $detservicio->exaaudio->oidoizq }}</div>
                </td>
                <th width='15%'>F.Respiratoria</th>
                <td width='10%'>{{ $detservicio->examedico->fresp }}</td>
                <th width='25%' colspan="2" class="text-center">Presión arterial sistémica</th>
            </tr>
            <tr>
                <th>F.Cardiaca</th>
                <td>{{ $detservicio->examedico->fcard }}</td>
                <th>Sistólica</th>
                <td>{{ $detservicio->examedico->pasisto }}</td>
                
            </tr>
            <tr>
                <th>Sat. O2</th>
                <td>{{ $detservicio->examedico->sato2 }}</td>
                <th>Diastólica</th>
                <td>{{ $detservicio->examedico->padisto }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td>
                    <strong>PULMONES: {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!}</strong>
                    <strong>NORMAL</strong>
                    @if ($detservicio->exaespiro->res_espiro==1)
                        (X)
                    @else
                    ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                    @endif
                    {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!}
                    <strong>ANORMAL</strong>
                    @if ($detservicio->exaespiro->res_espiro<>1)
                        (X)
                    @else
                    ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                    @endif
                    {!! htmlspecialchars_decode("&nbsp;&nbsp;&nbsp;&nbsp;") !!}
                    <strong>DESCRIPCIÓN:</strong>
                    {{ $detservicio->exaespiro->observacion }}
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
            </td>
        </tr>
    </thead>
</table>
<br>
<div class="text-center letra12 negrita">
    FICHA MÉDICA OCUPACIONAL N° 16
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <td colspan="2" class="espaciadonormal">
                    <div class="negrita">MIEMBROS SUPERIORES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'miesup') }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="espaciadonormal">
                    <div class="negrita">MIEMBROS INFERIORES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'mieinf') }}</div>
                </td>
            </tr>
            <tr>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">REFLEJOS OSTEOTENDINOSOS</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'refleosteo') }}</div>
                </td>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">MARCHA</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'marcha') }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="espaciadonormal">
                    <div class="negrita">COLUMNA VERTEBRAL</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'columna') }}</div>
                </td>
            </tr>
            <tr>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">ABDOMEN</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'apdiges') }}</div>
                </td>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">TACTO RECTAL</div>
                    <div>
                        No se hizo 
                        @if (kvfj($detservicio->examedico->hallazgos, 'tactorectal')==1)
                        (X)
                        @else
                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                        @endif
                        {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!}
                        Normal
                        @if (kvfj($detservicio->examedico->hallazgos, 'tactorectal')==2)
                        (X)
                        @else
                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                        @endif
                        {!! htmlspecialchars_decode("&nbsp;&nbsp;") !!}
                        Anormal
                        @if (kvfj($detservicio->examedico->hallazgos, 'tactorectal')==3)
                        (X)
                        @else
                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                        @endif
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='33%' class="espaciadonormal">
                    <div class="negrita">ANILLOS INGUINALES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'anillingui') }}</div>
                </td>
                <td width='33%' class="espaciadonormal">
                    <div class="negrita">HERNIAS</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'hernia') }}</div>
                </td>
                <td width='33%' class="espaciadonormal">
                    <div class="negrita">VÁRICES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'varice') }}</div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">ÓRGANOS GENITALES</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'apgenit') }}</div>
                </td>
                <td width='50%' class="espaciadonormal">
                    <div class="negrita">GANGLIOS</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'anillingui') }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="espaciadonormal">
                    <div class="negrita">LENGUAJE, ATENCIÓN, MEMORIA, ORIENTACIÓN, INTELIGENCIA, AFECTIVIDAD</div>
                    <div>{{ kvfj($detservicio->examedico->hallazgos, 'lenguaje') }}</div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='30%' class="espaciadonormal">
                    <div class="text-center">
                        <img class="img img-fluid" src="{{ url('/static/images/Pulmon2.jpg') }}" width='100px' alt="">
                    </div>
                    <div><strong>N° Rx: </strong> {{ str_pad($detservicio->exaradio->id, 5, '0', STR_PAD_LEFT) }}</div>
                    <div><strong>Fecha: </strong> {{ $detservicio->exaradio->fecha }}</div>
                    <div><strong>Calidad: </strong> {{ $detservicio->exaradio->calidad }}</div>
                    <div><strong>Simbolos: </strong> {{ $detservicio->exaradio->simbolos }}</div>
                </td>
                <td width='70%' valign = 'top' class="espaciadonormal">
                    <div class="tablacerobordesizq">
                        <table>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div><strong>VÉRTICES</strong></div>
                                        <div>{{ $detservicio->exaradio->vertice }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div><strong>CAMPOS PULMONARES</strong></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div><strong>HILIOS</strong></div>
                                        <div>{{ $detservicio->exaradio->cphilios }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='50%'>
                                        <div><strong>SENOS</strong></div>
                                        <div>{{ $detservicio->exaradio->cpsenos }}</div>
                                    </td>
                                    <td width='50%'>
                                        <div><strong>MEDIASTINOS</strong></div>
                                        <div>{{ $detservicio->exaradio->cpmedia }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='50%'>
                                        <div><strong>CONCLUSIONES RADIOGRÁFICAS</strong></div>
                                        <div>{{ $detservicio->exaradio->conclusion }}</div>
                                    </td>
                                    <td width='50%'>
                                        <div><strong>SILUETA CARDIOVASCULAR</strong></div>
                                        <div>{{ $detservicio->exaradio->silcardio }}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='10%' class="text-center">X</td>
                <td width='8%'></td>
                <td width='8%'></td>
                <td width='12%'></td>
                <td width='8%'></td>
                <td width='8%'></td>
                <td width='8%'></td>
                <td width='4%'></td>
                <th width='34%' class="text-center">REACCIÓN SEROLÓGICAS A LUES</th>
            </tr>
            <tr>
                <td width='10%' class="text-center">0/0</td>
                <td width='8%' class="text-center">1/0</td>
                <td width='8%' class="text-center">1/1, 1/2</td>
                <td width='8%' class="text-center">2/1, 2/2, 2/3</td>
                <td colspan="2" width='8%' class="text-center">3/2, 3/3, 3/+</td>
                <td width='8%' class="text-center">A, B, C</td>
                <td width='8%' class="text-center">St</td>
                <td width='34%'>NEGATIVO (X)</td>
            </tr>
            <tr>
                <th width='10%' class="text-center">CERO</th>
                <th width='8%' class="text-center">1/0</th>
                <th width='8%' class="text-center">UNO</th>
                <th width='12%' class="text-center">DOS</th>
                <th width='8%'></th>
                <th width='8%' class="text-center">TRES</th>
                <th width='8%' class="text-center">CUATRO</th>
                <th width='4%'></th>
                <td width='34%'>POSITIVO ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})</td>
            </tr>
            <tr>
                <td class="text-center letra7">Sin neumoconiosis</td>
                <td class="text-center letra7">Imagen Radiográfica de Exposición a Polvo</td>
                <th colspan="6"></th>
                <td valign = 'top'>
                    <div class="text-center negrita">OTROS EXÁMENES</div>
                    <div class="">N.A</div>
                    
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='68%'>
                    <div class="tablacerobordesizq">
                        <table>
                            <tbody>
                                <tr>
                                    <th width='50%'>GRUPO SANGUÍNEO Y FACTOR RH</th>
                                    <th width='25%'>HEMOGLOBINA</th>
                                    <th width='25%'>HEMATOCRITO</th>
                                </tr>
                                <tr>
                                    <td>{{ $laboratorio['GrupoSan'] .' '.$laboratorio['FactorRH']}}<</td>
                                    <td>{{ $detservicio->hemoglobina }} mg/dl</td>
                                    <td>{{ $detservicio->hemograma->hematocrioto }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>ORINA: </strong>{{ $detservicio->orinap==1?'POSITIVO':'NEGATIVO' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="">
                        <tbody>
                            <tr>
                                <th width='30%' class="lchicas">APTO PARA TRABAJAR</th>
                                <th width='45%' class="lchicas">NOMBRE Y APELLIDOS DEL MÉDICO</th>
                                <th width='25%' class="lchicas">COLEGIATURA N°</th>
                            </tr>
                            <tr>
                                <td class="espaciado">
                                    <div>
                                        SI 
                                        @if ($detservicio->resultado==1)
                                        (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </div>
                                    <div>
                                        NO 
                                        @if ($detservicio->resultado<>1)
                                        (X)
                                        @else
                                        ({!! htmlspecialchars_decode("&nbsp;&nbsp;") !!})
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if (empty($detservicio->doctor->firma))
                                    <br>
                                    @else
                                    {{ $detservicio->doctor->nombre }}
                                    @endif
                                </td>
                                <td>
                                    @if (empty($detservicio->doctor->firma))
                                    <br>
                                    @else
                                    {{ $detservicio->doctor->cmp }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="espaciado cuadro100" valign='top'>
                                    <div class="negrita">OBSERVACIONES</div>
                                    <div>{!! htmlspecialchars_decode(nl2br($detservicio->examedico->comentarios)) !!}</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width='32%' valign='top' class="text-center negrita">
                    <br><br><br><br><br><br><br><br><br><br>
                    FIRMA DEL EXAMINADO
                    <br><br><br><br><br><br><br><br>
                    Huella digital indice derecho <br>
                    Declaro que toda la información es veraz
                </td>
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
                    @if (empty($detservicio->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                        @endif
                    @endif                    
                </div>
            </td>
        </tr>
    </thead>
</table>
{{-- <table class="cuadrosborde">
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
<div style="page-break-after:always;"></div> --}}

{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 3 --------------------------------------------------------}}
{{---------------------------------------------------------------------------------------------------------------}}

{{-- <table class="cuadrosborde">
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
                <td class="text-center">{{ $detservicio->otrdiagpdr1==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr1==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr1==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie1 }}</td>
            </tr>
            <tr>
                <td>{{$detservicio->otrdiagocu2}}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr2==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr2==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr2==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie2 }}</td>
            </tr>
            <tr>
                <td>{{$detservicio->otrdiagocu3}}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr3==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr3==2?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagpdr3==3?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->otrdiagcie3 }}</td>
            </tr>
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
</table> --}}