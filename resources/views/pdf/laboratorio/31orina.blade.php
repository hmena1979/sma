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
    EXAMEN DE ORINA COMPLETA
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->orina->fecha)) }}</td>
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
        <tbody>
            <tbody>
                <tr>
                    <th colspan="2">EX. FISICO</th>
                </tr>
                <tr>
                    <td width='30%'>- REACCION</td>
                    <td width='70%'>{{ $detservicio->orina->reaccion }} (ÁCIDO)</td>
                </tr>
                <tr>
                    <td>- COLOR</td>
                    <td>{{ $detservicio->orina->color }}</td>
                </tr>
                <tr>
                    <td>- ASPECTO</td>
                    <td>{{ $catorina[$detservicio->orina->aspecto_id] }}</td>
                </tr>
                <tr>
                    <td>- DENSIDAD</td>
                    <td>{{ $detservicio->orina->densidad }}</td>
                </tr>
                <tr>
                    <td>- OLOR</td>
                    <td>{{ $detservicio->orina->olor }}</td>
                </tr>
                <tr>
                    <th colspan="2">EX. QUIMICO</th>
                </tr>
                <tr>
                    <td>- GLUCOSA</td>
                    <td>{{ $detservicio->orina->glucosa==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- PROTEINAS</td>
                    <td>{{ $detservicio->orina->proteinas==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- NITRITOS</td>
                    <td>{{ $detservicio->orina->nitritos==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- P.BILIARES</td>
                    <td>{{ $detservicio->orina->pbiliares==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- HEMATIES</td>
                    <td>{{ $detservicio->orina->thevenon==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- UROBILINOGENO</td>
                    <td>{{ $detservicio->orina->urobilinogeno==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- CETONAS</td>
                    <td>{{ $detservicio->orina->cetonas==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <th colspan="2">EXAMEN DE SEDIMENTO 450 X</th>
                </tr>
                <tr>
                    <td>- LEUCOCITOS</td>
                    <td>{{ $detservicio->orina->leucocitos }}</td>
                </tr>
                <tr>
                    <td>- PIOCITOS</td>
                    <td>{{ $detservicio->orina->piocitos==1?'POSITIVO':'NEGATIVO' }}</td>
                </tr>
                <tr>
                    <td>- HEMATIES</td>
                    <td>{{ $detservicio->orina->hematies }}</td>
                </tr>
                <tr>
                    <td>- BACTERIAS</td>
                    <td>{{ $catorina[$detservicio->orina->bacteria_id] }}</td>
                </tr>
                <tr>
                    <td>- CEL.EPITELIALES</td>
                    <td>{{ $detservicio->orina->epiteliales }}</td>
                </tr>
                <tr>
                    <td>- CRISTALES</td>
                    <td>{{ $catorina[$detservicio->orina->cristales_id].' '.$catorina[$detservicio->orina->ccristales_id] }}</td>
                </tr>
                @if ($detservicio->orina->otr1_id <> 1)
                <tr>
                    <td>- {{ $catorina[$detservicio->orina->otr1_id] }}</td>
                    <td>{{ $detservicio->orina->otrdet1.' '.$catorina[$detservicio->orina->otrcant1_id] }}</td>
                </tr>
                @endif
                @if ($detservicio->orina->otr2_id <> 1)
                <tr>
                    <td>- {{ $catorina[$detservicio->orina->otr2_id] }}</td>
                    <td>{{ $detservicio->orina->otrdet2.' '.$catorina[$detservicio->orina->otrcant2_id] }}</td>
                </tr>
                @endif
                @if ($detservicio->orina->otr3_id <> 1)
                <tr>
                    <td>- {{ $catorina[$detservicio->orina->otr3_id] }}</td>
                    <td>{{ $detservicio->orina->otrdet3.' '.$catorina[$detservicio->orina->otrcant3_id] }}</td>
                </tr>
                @endif
                <tr>
                    <th>OBSERV.</th>
                    <td>{{ $detservicio->orina->observaciones }}</td>
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
                    @if (empty($detservicio->orina->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->orina->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->orina->doctor_id]) }}" height="100px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>