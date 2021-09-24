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
    HEMOGRAMA COMPLETO
</div>
<br>
<br>
<div class="tablasinbordes letra9">
    <table class="">
        <tbody>
            <tr>
                <th width='10%'>CÓDIGO</th>
                <td width='60%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='10%'>FECHA</th>
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->hemograma->fecha)) }}</td>
            </tr>
            <tr>
                <th>PACIENTE</th>
                <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th>EDAD</th>
                <td>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th>SEXO</th>
                <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
            </tr>
            <tr>
                <th>EMPRESA</th>
                <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
                <th>CHEQUEO</th>
                <td>{{ $detservicio->servicio->eval->nombre }}</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table class="espaciado">
        <thead>
            <tr>
                <th colspan="3" width='40%' class="lineasupinf">PRUEBA</th>
                <th width='10%' class="lineasupinf text-center">VALOR</th>
                <th width='15%' class="lineasupinf">UNIDADES</th>
                <th width='35%' class="lineasupinf">VALORES REFERENCIALES</th>
            </tr>
        </thead>
        <tbody>
            <tbody>
                <tr>
                    <th colspan="3" >• RECUENTO DE GLOBULOS ROJOS</th>
                    <td class="text-center">{{ $detservicio->hemograma->gr }}</td>
                    <td>x 10<sup>6</sup> Cel/ul</td>
                    <td>4.5 - 5.5 x 10<sup>6</sup> Cel/ul</td>
                </tr>
                <tr>
                    <th colspan="3" >• RECUENTO DE GLOBULOS BLANCOS</th>
                    <td class="text-center">{{ $detservicio->hemograma->gb }}</td>
                    <td>x 10<sup>3</sup> Cel/ul</td>
                    <td>5.0 - 10.0 x 10<sup>3</sup> Cel/ul</td>
                </tr>
                <tr>
                    <th colspan="3"  rowspan="3" valign='top'>• HEMOGLOBINA</th>
                    <td rowspan="3" valign='top' class="text-center">{{ $detservicio->hemoglobina }}</td>
                    <td rowspan="3" valign='top'>g/dl</td>
                    <td>M : 14 - 16 g/dl</td>
                </tr>
                <tr><td>F : 12 - 15 g/dl</td></tr>
                <tr><td>RN : 18 - 20 g/dl</td></tr>
                <tr>
                    <th colspan="3"  rowspan="3" valign='top'>• HEMATOCRITO</th>
                    <td rowspan="3" valign='top' class="text-center">{{ $detservicio->hemograma->hematocrioto }}</td>
                    <td rowspan="3" valign='top'>%</td>
                    <td>M : 42 -48 %</td>
                </tr>
                <tr><td>F : 36 - 45 %</td></tr>
                <tr><td>RN : 54 - 60 %</td></tr>
                <tr>
                    <th colspan="3" >• VOLUMEN CORPUSCULAR MEDIO</th>
                    <td class="text-center">{{ $detservicio->hemograma->vcm }}</td>
                    <td>fl</td>
                    <td>80-100 fl</td>
                </tr>
                <tr>
                    <th colspan="3" >• HEMOGLOBINA CORPUSCULAR MEDIA</th>
                    <td class="text-center">{{ $detservicio->hemograma->hcm }}</td>
                    <td>pg</td>
                    <td>27-32 pg</td>
                </tr>
                <tr>
                    <th colspan="3" >• CONCENT.DE HEMOGLOBINA CORP. MEDIA</th>
                    <td class="text-center">{{ $detservicio->hemograma->chcm }}</td>
                    <td>g/dl</td>
                    <td>32-36 g/dl</td>
                </tr>
                <tr>
                    <th colspan="3" >• RECUENTO DE PLAQUETAS</th>
                    <td class="text-center">{{ $detservicio->hemograma->plaquetas }}</td>
                    <td>x10<sup>3</sup> Cel/ul</td>
                    <td>150 - 450 x10<sup>3</sup>  Cel/ul</td>
                </tr>
                <tr>
                    <th colspan="6">• DIFERENCIACIÓN CITOMORFOLÓGICA</th>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='35%' colspan="2">- NEUTROFILOS</td>
                    <td class="text-center">
                        {{ $detservicio->hemograma->segmentados+$detservicio->hemograma->abastonados
                            +$detservicio->hemograma->metamielocitos+$detservicio->hemograma->mielocitos }}
                    </td>
                    <td>%</td>
                    <td>50 - 70%</td>
                </tr>
                <tr>
                    <td width='10%' colspan="2"></td>
                    <td width='30%'>SEGMENTADOS</td>
                    <td class="text-center">
                        {{ $detservicio->hemograma->segmentados }}
                    </td>
                    <td>%</td>
                    <td>51 - 67%</td>
                </tr>
                <tr>
                    <td width='10%' colspan="2"></td>
                    <td width='30%'>ABASTONADOS</td>
                    <td class="text-center">
                        {{ $detservicio->hemograma->abastonados }}
                    </td>
                    <td>%</td>
                    <td>3 - 5%</td>
                </tr>
                <tr>
                    <td width='10%' colspan="2"></td>
                    <td width='30%'>METAMIELOCITOS</td>
                    <td class="text-center">
                        {{ $detservicio->hemograma->metamielocitos }}
                    </td>
                    <td>%</td>
                    <td></td>
                </tr>
                <tr>
                    <td width='10%' colspan="2"></td>
                    <td width='30%'>MIELOCITOS</td>
                    <td class="text-center">
                        {{ $detservicio->hemograma->mielocitos }}
                    </td>
                    <td>%</td>
                    <td></td>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='35%' colspan="2">- LINFOCITOS</td>
                    <td class="text-center">{{ $detservicio->hemograma->linfocitos }}</td>
                    <td>%</td>
                    <td>20 - 45%</td>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='35%' colspan="2">- MONOCITOS</td>
                    <td class="text-center">{{ $detservicio->hemograma->monocitos }}</td>
                    <td>%</td>
                    <td>4 - 8%</td>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='35%' colspan="2">- EOSINOFILOS</td>
                    <td class="text-center">{{ $detservicio->hemograma->eosinofilos }}</td>
                    <td>%</td>
                    <td>2 - 4%</td>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='35%' colspan="2">- BASOFILOS</td>
                    <td class="text-center">{{ $detservicio->hemograma->basofilos }}</td>
                    <td>%</td>
                    <td>0 - 1%</td>
                </tr>
                <tr>
                    <th colspan="3" >• OBSERVACIONES</th>
                    <td colspan="3">{{ $obshemograma[$detservicio->hemograma->observa01].' '.$detservicio->hemograma->obscruz01 }}</td>
                </tr>
                <tr>
                    <th colspan="3" ></th>
                    <td colspan="3">{{ $obshemograma[$detservicio->hemograma->observa02].' '.$detservicio->hemograma->obscruz02 }}</td>
                </tr>
                <tr>
                    <th colspan="3" ></th>
                    <td colspan="3">{{ $obshemograma[$detservicio->hemograma->observa03].' '.$detservicio->hemograma->obscruz03 }}</td>
                </tr>
                <tr>
                    <th colspan="3" ></th>
                    <td colspan="3">{{ $obshemograma[$detservicio->hemograma->observa04].' '.$detservicio->hemograma->obscruz04 }}</td>
                </tr>
                <tr>
                    <th colspan="3" ></th>
                    <td colspan="3">{{ $obshemograma[$detservicio->hemograma->observa05].' '.$detservicio->hemograma->obscruz05 }}</td>
                </tr>
                <tr>
                    <th colspan="3" >{{ $otrhemograma[$detservicio->hemograma->otro01] }}</th>
                    <td class="text-center">{{ $detservicio->hemograma->otrdescrip01 }}</td>
                    <td></td>
                    <td>{{ $otrhemoval[$detservicio->hemograma->otro01] }}</td>
                </tr>
                <tr>
                    <th colspan="3" >{{ $otrhemograma[$detservicio->hemograma->otro02] }}</th>
                    <td class="text-center">{{ $detservicio->hemograma->otrdescrip02 }}</td>
                    <td></td>
                    <td>{{ $otrhemoval[$detservicio->hemograma->otro02] }}</td>
                </tr>
                <tr>
                    <th colspan="3" >{{ $otrhemograma[$detservicio->hemograma->otro03] }}</th>
                    <td class="text-center">{{ $detservicio->hemograma->otrdescrip03 }}</td>
                    <td></td>
                    <td>{{ $otrhemoval[$detservicio->hemograma->otro03] }}</td>
                </tr>
                <tr>
                    <th colspan="3" >{{ $otrhemograma[$detservicio->hemograma->otro04] }}</th>
                    <td class="text-center">{{ $detservicio->hemograma->otrdescrip04 }}</td>
                    <td></td>
                    <td>{{ $otrhemoval[$detservicio->hemograma->otro04] }}</td>
                </tr>
                <tr>
                    <th colspan="3" >{{ $otrhemograma[$detservicio->hemograma->otro05] }}</th>
                    <td class="text-center">{{ $detservicio->hemograma->otrdescrip05 }}</td>
                    <td></td>
                    <td>{{ $otrhemoval[$detservicio->hemograma->otro05] }}</td>
                </tr>
            </tbody>
        </tbody>
    </table>
</div>
<br>
<br>

<div class="altura50"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center"></td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->hemograma->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->hemograma->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->hemograma->doctor_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>