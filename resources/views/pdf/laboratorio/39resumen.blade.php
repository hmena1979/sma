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
<br>
<div class="tablasinbordes letra9">
    <table class="">
        <tbody>
            <tr>
                <th width='10%'>Código</th>
                <td width='60%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='10%'>Fecha</th>
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->fecha_bio)) }}</td>
            </tr>
            <tr>
                <th>Paciente</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th>Sexo</th>
                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
                <th>Chequeo</th>
                <td>{{ $detservicio->servicio->eval->nombre }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <tbody>
            <tr>
                <td width='49%' valign='top'>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left" width='36%'>ANALISIS</th>
                                <th class="text-center" width='20%'>RESULTADO</th>
                                <th class="text-center" width='20%'>UNIDAD</th>
                                <th class="text-center" width='24%'>RANGO REFERENCIAL</th>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center celda">HEMOGRAMA COMPLETO</th>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center">RECUENTO CELULAR</th>
                            </tr>
                            <tr>
                                <td>HEMATIES</td>
                                <td class="text-center">{{ $detservicio->hemograma->gr }}</td>
                                <td class="text-center">x10<sup>6</sup>Cel/ul</td>
                                <td class="text-center">4.5 - 5.5</td>
                            </tr>
                            <tr>
                                <td>LEUCOCITOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->gb }}</td>
                                <td class="text-center">x10<sup>3</sup>Cel/ul</td>
                                <td class="text-center">5.0 - 10.0</td>
                            </tr>
                            <tr>
                                <td>PLAQUETAS</td>
                                <td class="text-center">{{ $detservicio->hemograma->plaquetas }}</td>
                                <td class="text-center">x10<sup>3</sup>Cel/ul</td>
                                <td class="text-center">150 - 450</td>
                            </tr>
                            <tr>
                                <td>HEMOGLOBINA</td>
                                <td class="text-center">{{ $detservicio->hemoglobina }}</td>
                                <td class="text-center">g/dl</td>
                                <td class="text-center">M : 14 - 16<br>F : 12 - 15 </td>
                            </tr>
                            <tr>
                                <td>HEMATOCRITO</td>
                                <td class="text-center">{{ $detservicio->hemograma->hematocrioto }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">M : 42 - 48<br>F : 36 - 45</td>
                            </tr>
                            <tr>
                                <th colspan="4">CONSTANTES CORPUSCULARES</th>
                            </tr>
                            <tr>
                                <td>VCM</td>
                                <td class="text-center">{{ $detservicio->hemograma->vcm }}</td>
                                <td class="text-center">fl</td>
                                <td class="text-center">80 - 100</td>
                            </tr>
                            <tr>
                                <td>HCM</td>
                                <td class="text-center">{{ $detservicio->hemograma->hcm }}</td>
                                <td class="text-center">pg</td>
                                <td class="text-center">27 - 32</td>
                            </tr>
                            <tr>
                                <td>CHCN</td>
                                <td class="text-center">{{ $detservicio->hemograma->chcm }}</td>
                                <td class="text-center">g/dl</td>
                                <td class="text-center">32 - 36</td>
                            </tr>
                            <tr>
                                <th colspan="4">FORMULA DIF.PORCENTUAL</th>
                            </tr>
                            <tr>
                                <td>EOSINOFILOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->eosinofilos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0 - 4</td>
                            </tr>
                            <tr>
                                <td>MIELOCITOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->mielocitos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>BASOFILOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->basofilos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0 - 2</td>
                            </tr>
                            <tr>
                                <td>METAMIELOCITOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->metamielocitos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>ABASTONADOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->abastonados }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0 - 5</td>
                            </tr>
                            <tr>
                                <td>SEGMENTADOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->segmentados }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">55 - 75</td>
                            </tr>
                            <tr>
                                <td>LINFOCITOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->linfocitos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">25 - 45</td>
                            </tr>
                            <tr>
                                <td>MONOCITOS</td>
                                <td class="text-center">{{ $detservicio->hemograma->monocitos }}</td>
                                <td class="text-center">%</td>
                                <td class="text-center">0 - 8</td>
                            </tr>
                            <tr>
                                <th>RECUENTO TOTAL</th>
                                <td class="text-center">
                                    {{ $detservicio->hemograma->eosinofilos+
                                        $detservicio->hemograma->mielocitos+
                                        $detservicio->hemograma->basofilos+
                                        $detservicio->hemograma->metamielocitos+
                                        $detservicio->hemograma->abastonados+
                                        $detservicio->hemograma->segmentados+
                                        $detservicio->hemograma->linfocitos+
                                        $detservicio->hemograma->monocitos }}
                                </td>
                                <td class="text-center">%</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <th colspan="4">OBSERVACIONES:</th>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    {{ $obshemograma[$detservicio->hemograma->observa01].' '.$detservicio->hemograma->obscruz01 }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    {{ $obshemograma[$detservicio->hemograma->observa02].' '.$detservicio->hemograma->obscruz02 }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    {{ $obshemograma[$detservicio->hemograma->observa03].' '.$detservicio->hemograma->obscruz03 }}
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center celda">GRUPO SANGUINEO</th>
                            </tr>
                            <tr>
                                <td>GRUPO SANGUÍNEO</td>
                                <td class="text-center">{{ $laboratorio['GrupoSan'] }}</td>
                                <td colspan="2" class="text-center">O, A, B, AB</td>
                            </tr>
                            <tr>
                                <td>FACTOR RH</td>
                                <td class="text-center">{{ $laboratorio['FactorRH'] }}</td>
                                <td colspan="2" class="text-center">POSITIVO, NEGATIVO</td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center celda">BIOQUIMICA</th>
                            </tr>
                            <tr>
                                <td>GLUCOSA</td>
                                <td class="text-center">{{ $laboratorio['Glucosa'] }}</td>
                                <td colspan="2" class="text-center">70 - 110 mg/dl</td>
                            </tr>
                            <tr>
                                <td>COL. TOTAL</td>
                                <td class="text-center">{{ $laboratorio['Colesterol'] }}</td>
                                <td colspan="2" class="text-center">
                                    &lt; 200 mg/dl (Deseable) <br>200 - 240 mg/dl (limite alto)
                                </td>
                            </tr>
                            <tr>
                                <td>TRIGLICERIDOS</td>
                                <td class="text-center">{{ $laboratorio['Trigliceridos'] }}</td>
                                <td colspan="2" class="text-center">
                                    &lt; 150 mg/dl (Normal) <br>150 - 199 mg/dl (limite alto)
                                </td>
                            </tr>
                        </thead>
                    </table>
                </td>
                <td width='2%'></td>
                <td width='49%' valign='top'>
                    <table>
                        <thead>
                            <tr>
                                <th class="text-left" width='32%'>ANALISIS</th>
                                <th class="text-center" width='27%'>RESULTADO</th>
                                <th class="text-center" width='17%'>UNIDAD</th>
                                <th class="text-center" width='24%'>RANGO REFERENCIAL</th>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center celda">EXAMEN DE ORINA</th>
                            </tr>
                            <tr>
                                <th colspan="4">EX. FISICO</th>
                            </tr>
                            <tr>
                                <td>COLOR</td>
                                <td class="text-center">{{ $detservicio->orina->color }}</td>
                                <td></td>
                                <td class="text-center">AMARILLO</td>
                            </tr>
                            <tr>
                                <td>ASPECTO</td>
                                <td class="text-center">{{ $catorina[$detservicio->orina->aspecto_id] }}</td>
                                <td></td>
                                <td class="text-center">TRANSPARENTE</td>
                            </tr>
                            <tr>
                                <th colspan="4">EX.QUÍMICO</th>
                            </tr>
                            <tr>
                                <td>GLUCOSA</td>
                                <td class="text-center">{{ $detservicio->orina->glucosa==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>PROTEINAS</td>
                                <td class="text-center">{{ $detservicio->orina->proteinas==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>NITRITOS</td>
                                <td class="text-center">{{ $detservicio->orina->nitritos==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>P.BILIARES</td>
                                <td class="text-center">{{ $detservicio->orina->pbiliares==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>HEMATIES</td>
                                <td class="text-center">{{ $detservicio->orina->thevenon==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>UROBILINOGENO</td>
                                <td class="text-center">{{ $detservicio->orina->urobilinogeno==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>CETONAS</td>
                                <td class="text-center">{{ $detservicio->orina->cetonas==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <th colspan="4">EXAMEN DE SEDIMENTO 450 X</th>
                            </tr>
                            <tr>
                                <td>LEUCOCITOS</td>
                                <td class="text-center">{{ $detservicio->orina->leucocitos }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>PIOCITOS</td>
                                <td class="text-center">{{ $detservicio->orina->piocitos==1?'POSITIVO':'NEGATIVO' }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>HEMATIES</td>
                                <td class="text-center">{{ $detservicio->orina->hematies }}</td>
                                <td></td>
                                <td class="text-center">0 - 5/C</td>
                            </tr>
                            <tr>
                                <td>BACTERIAS</td>
                                <td class="text-center">{{ $catorina[$detservicio->orina->bacteria_id] }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>CEL.EPITELIALES</td>
                                <td class="text-center">{{ $detservicio->orina->epiteliales }}</td>
                                <td></td>
                                <td class="text-center">NEGATIVO</td>
                            </tr>
                            <tr>
                                <td>CRISTALES</td>
                                <td colspan="2" class="text-center">{{ $catorina[$detservicio->orina->cristales_id].' '.$catorina[$detservicio->orina->ccristales_id] }}</td>
                                <td class="text-center">AUSENTES</td>
                            </tr>
                            <tr>
                                <th colspan="4">OBSERVACIONES:</th>
                            </tr>
                            <tr>
                                <td colspan="4">{{ $detservicio->orina->observaciones }}</td>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="firmalab">
    @if (empty($detservicio->doctor_bio))
    <br>
    @else
        @if (empty($docfirma[$detservicio->doctor_bio]))
        <br>
        @else
        <img src="{{ url('firmas/'.$docfirma[$detservicio->doctor_bio]) }}" height="100px" alt=""><br>
        @endif
    @endif
</div>