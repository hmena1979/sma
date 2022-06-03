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
    EVALUACIÓN MÉDICA PARA ASCENSO A GRANDES SUPERFICIES
</div>
<div class="text-center letra12 negrita">
    (mayor de 2,500 m.s.n.m.)
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width='20%'>Apellidos y Nombres</th>
                <td width='80%'>{{ $detservicio->colaborador->nombres }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th rowspan="2" width='20%'>Documento de Identidad</th>
                <td rowspan="2" width='12%'>{{ $detservicio->colaborador->numdoc }}</td>
                <th colspan="3" width='18%' class="text-center">Fecha de Nacimiento</th>
                <th width='10%' class="text-center">Edad</th>
                <th colspan="4" width='40%' class="text-center">Sexo</th>
            </tr>
            <tr>
                <td width='4%' class="text-center">{{ substr($detservicio->colaborador->fecnac,8,2) }}</td>
                <td width='9%' class="text-center">{{ $meses[substr($detservicio->colaborador->fecnac,5,2)] }}</td>
                <td width='5%' class="text-center">{{ substr($detservicio->colaborador->fecnac,0,4) }}</td>
                <td width='10%' class="text-center">{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                <th width='15%' class="text-center">Masculino</th>
                <td width='5%' class="text-center">{{ $detservicio->colaborador->sexo_id=='M'?'X':'' }}</td>
                <th width='15%' class="text-center">Femenino</th>
                <td width='5%' class="text-center">{{ $detservicio->colaborador->sexo_id=='F'?'X':'' }}</td>
            </tr>
            <tr>
                <th>Domicilio</th>
                <td colspan="9">{{ $detservicio->colaborador->domicilio }}</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td colspan="4">{{ $detservicio->servicio->cliente->razsoc }}</td>
                <th>Puesto</th>
                <td colspan="4">{{ $detservicio->puesto->nombre }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th colspan="13">Funciones Vitales</th>
        </tr>
        <tr>
            <td width='3%'></td>
            <th width='5%'>FC</th>
            <td width='8%' class="punteado">{{ $detservicio->examedico->fcard }}</td>
            <td width='3%'></td>
            <th width='10%'>PA(mmHg)</th>
            <td width='8%' class="punteado">{{ $detservicio->examedico->pa }}</td>
            <td width='3%'></td>
            <th width='10%'>TALLA(M)</th>
            <td width='8%' class="punteado">{{ $detservicio->examedico->talla }}</td>
            <td width='3%'></td>
            <th width='8%'>Sat. O2</th>
            <td width='8%' class="punteado">{{ $detservicio->examedico->sato2 }}</td>
            <td width='23%'></td>
        </tr>
        <tr>
            <td></td>
            <th>FR</th>
            <td class="punteado">{{ $detservicio->examedico->fresp }}</td>
            <td></td>
            <th>Peso(kg)</th>
            <td class="punteado">{{ $detservicio->examedico->peso }}</td>
            <td></td>
            <th>IMC(Kg/m2)</th>
            <td class="punteado">{{ $detservicio->examedico->imc }}</td>
            <td colspan="4"></td>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th colspan="6">El/La paciente presenta o ha presentado en los últimos 6 meses:</th>
        </tr>
        <tr>
            <th width='60%'>* Anemia</th>
            <th width='4%' class="text-center">NO</th>
            <td width='3%' class="celdachica text-center">{{ $detservicio->exaalt25->ant01==2?'X':'' }}</td>
            <td width='3%'></td>
            <th width='4%' class="text-center">SI</th>
            <td width='3%' class="celdachica text-center">{{ $detservicio->exaalt25->ant01==1?'X':'' }}</td>
            <td width='23%'></td>
        </tr>
        <tr>
            <th>* Cirugía mayor reciente</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant02==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant02==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Desórdenes de la coagulación, trombosos, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant03==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant03==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Diabetes Mellitus</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant04==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant04==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Hipertención Arterial</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant05==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant05==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Embarazo</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant06==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant06==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Problemas neurológicos: epilepsia, vértigo, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant07==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant07==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Infecciones recientes(especialmente oídos, nariz, garganta)</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant08==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant08==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Obesidad Mórbida (IMC mayor a 35 m/kg2)</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant09==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant09==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Problemas Cardíacos: marcapasos, coronariopatía, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant10==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant10==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Problemas Respiratórios: asma, EPOC, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant11==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant11==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Problemas Oftalmológicos: retinopatía, glaucoma, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant12==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant12==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Problemas Digestivos: úlcera péptica, hepatitis, etc</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant13==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant13==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Apnea del Sueño</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant14==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant14==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Otra condición médica importante</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant15==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant15==1?'X':'' }}</td>
            <td></td>
        </tr>
        <tr>
            <th>* Alergías</th>
            <th class="text-center">NO</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant16==2?'X':'' }}</td>
            <td></td>
            <th class="text-center">SI</th>
            <td class="celdachica text-center">{{ $detservicio->exaalt25->ant16==1?'X':'' }}</td>
            <td></td>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th width='25%'>* Uso de medicacíon actual:</th>
            <td width='75%' class="punteado">{{ $detservicio->exaalt25->medicamento }}</td>
        </tr>
        <tr>
            <td colspan="2" class="lineainferior">{!! htmlspecialchars_decode("&nbsp;") !!}</td>
        </tr>
        <tr>
            <td colspan="2" class="text-justify">
                Por lo que certifico que EL/LA paciente se encuentra <strong>{{ $resultado[$detservicio->exaalt25->resultado] }}</strong>  
                para ascender a grandes altitudes, sin embargo, no aseguramos la respuesta durante el ascenso ni durante su permanencia
            </td>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th width='15%'>Observaciones:</th>
            <td width='85%' class="punteado">{{ $detservicio->exaalt25->observacion }}<</td>
        </tr>
        <tr>
            <td colspan="2" class="lineainferior"></td>
        </tr>
    </tbody>
</table>
<br>
<div class="detalleocupacional fondofirma">
    <table>
        <tbody>
            <tr>
                <th colspan="6" class="text-center">DATOS DEL MÉDICO</th>
            </tr>
            <tr>
                <th width='20%'>Apellidos y Nombres</th>
                <td colspan="5" width='80%'>
                    @if (!@empty($detservicio->exaalt25->doctor_id))
                        {{ $detservicio->exaalt25->doctor->nombre }}
                    @endif
                </td>
            </tr>
            <tr>
                <th width='20%'>CMP</th>
                <td width='49%'>
                    @if (!@empty($detservicio->exaalt25->doctor_id))
                        {{ $detservicio->exaalt25->doctor->cmp }}
                    @endif
                </td>
                <th width='10%' class="text-center">Fecha</th>
                <td width='5%' class="text-center">{{ substr($detservicio->exaalt25->fecha,8,2) }}</td>
                <td width='10%' class="text-center">{{ $meses[substr($detservicio->exaalt25->fecha,5,2)] }}</td>
                <td width='6%' class="text-center">{{ substr($detservicio->exaalt25->fecha,0,4) }}</td>
            </tr>
        </tbody>
    </table>
    <div class="firmaalt25">
        @if (empty($detservicio->exaalt25->doctor_id))
        <br>
        @else
            @if (empty($detservicio->exaalt25->doctor->firma))
            <br>
            @else
            <img src="{{ url('firmas/'.$detservicio->exaalt25->doctor->firma) }}" width="180px" height="100px" alt=""><br>
            @endif
        @endif
        ...........................................................
        <div class="lchicas">
            Nombre, Firma y sello del médico Evaluador
        </div>
    </div>
    {{-- <table class="cuadrosborde letra10 text-left">
        <tbody>
            <tr>
                <td width='60%'></td>
                <td width='40%' class="text-center">
                    <div>
                        @if (empty($detservicio->exaalt25->doctor_id))
                        <br><br><br><br>
                        @else
                            @if (empty($detservicio->exaalt25->doctor->firma))
                            <br><br><br><br>
                            @else
                            <img src="{{ url('firmas/'.$detservicio->exaalt25->doctor->firma) }}" height="90px" alt=""><br>
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
    </table> --}}
</div>

{{-- <table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='60%'></td>
            <td width='40%' class="text-center">
                <div>
                    @if (empty($detservicio->exaalt25->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->exaalt25->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaalt25->doctor->firma) }}" height="90px" alt=""><br>
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
</table> --}}