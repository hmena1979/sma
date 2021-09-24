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
    MICROBIOLOGÍA CLÍNICA
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->bacteriologia->fecha)) }}</td>
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
                    <th colspan="2">MUESTRA</th>
                    <td>{{ $cathece[$detservicio->bacteriologia->muestra_id] }}</td>
                </tr>
                <tr>
                    <th colspan="2">EXAMEN SOLICITADO</th>
                    <td>
                        CULTIVO
                        {{ !empty($detservicio->bacteriologia->exadirecto)?' - EXAMEN DIRECTO':'' }}
                        {{ !empty($detservicio->bacteriologia->gram)?' - COLORACIÓN GRAM':'' }}
                        {{ !empty($detservicio->bacteriologia->ziehl)?' - COL. ZIEHL NEELSEN':'' }}
                    </td>
                </tr>
                <tr>
                    <th colspan="3">RESULTADOS</th>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <th width='25%'>- CULTIVO</th>
                    <td width='70%'>
                        {{ $detservicio->bacteriologia->cultivo==1?'POSITIVO':'NEGATIVO' }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <th>- REC.DE COLONIAS</th>
                    <td>{{ $detservicio->bacteriologia->colonias }} ufc/ml</td>
                </tr>
                <tr>
                    <td></td>
                    <th>- GERMEN AISLADO</th>
                    <td>{{ $cathece[$detservicio->bacteriologia->germen_id] }}</td>
                </tr>
                <tr>
                    <td></td>
                    <th>- EXAMEN DIRECTO</th>
                    <td>{{ $detservicio->bacteriologia->exadirecto }}</td>
                </tr>
                <tr>
                    <td></td>
                    <th>- COLORACION GRAM</th>
                    <td>{{ $detservicio->bacteriologia->gram }}</td>
                </tr>
                <tr>
                    <td></td>
                    <th>- COL. ZIEHL NEELSEN</th>
                    <td>{{ $detservicio->bacteriologia->ziehl }}</td>
                </tr>
            </tbody>
        </tbody>
    </table>
    <br>
    @if ($detservicio->bacteriologia->cultivo==1)
    <table class="letra9 text-center">
        <tbody>
            <tr>
                <th>ANTIBIOGRAMA</th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width=13%>Amikacina</th>
                <td width=12%>
                    @if (!empty($detservicio->bacteriologia->antbio01))
                    {{ $cathece[$detservicio->bacteriologia->antbio01] }}                        
                    @endif
                </td>
                <th width=13%>Ac.pipemidico</th>
                <td width=12%>
                    @if (!empty($detservicio->bacteriologia->antbio02))
                    {{ $cathece[$detservicio->bacteriologia->antbio02] }}                        
                    @endif
                </td>
                <th width=13%>Amikacina</th>
                <td width=12%>
                    @if (!empty($detservicio->bacteriologia->antbio03))
                    {{ $cathece[$detservicio->bacteriologia->antbio03] }}                        
                    @endif
                </td>
                <th width=13%>Amox/Ac.clavul</th>
                <td width=12%>
                    @if (!empty($detservicio->bacteriologia->antbio04))
                    {{ $cathece[$detservicio->bacteriologia->antbio04] }}                        
                    @endif
                </td>
            </tr>
            <tr>
                <th>Amoxicilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio05))
                    {{ $cathece[$detservicio->bacteriologia->antbio05] }}
                    @endif
                </td>
                <th>Ampicilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio06))
                    {{ $cathece[$detservicio->bacteriologia->antbio06] }}
                    @endif
                </td>
                <th>Azitromicina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio07))
                    {{ $cathece[$detservicio->bacteriologia->antbio07] }}
                    @endif
                </td>
                <th>Aztreonam</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio08))
                    {{ $cathece[$detservicio->bacteriologia->antbio08] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Bacitracina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio09))
                    {{ $cathece[$detservicio->bacteriologia->antbio09] }}
                    @endif
                </td>
                <th>Carbencilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio10))
                    {{ $cathece[$detservicio->bacteriologia->antbio10] }}
                    @endif
                </td>
                <th>Cefaclor</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio11))
                    {{ $cathece[$detservicio->bacteriologia->antbio11] }}
                    @endif
                </td>
                <th>Cefadroxilo</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio12))
                    {{ $cathece[$detservicio->bacteriologia->antbio12] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Cefalotina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio13))
                    {{ $cathece[$detservicio->bacteriologia->antbio13] }}
                    @endif
                </td>
                <th>Cefazolina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio14))
                    {{ $cathece[$detservicio->bacteriologia->antbio14] }}
                    @endif
                </td>
                <th>Cefepime</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio15))
                    {{ $cathece[$detservicio->bacteriologia->antbio15] }}
                    @endif
                </td>
                <th>Cefotaxima</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio16))
                    {{ $cathece[$detservicio->bacteriologia->antbio16] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Ceftazidima</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio17))
                    {{ $cathece[$detservicio->bacteriologia->antbio17] }}
                    @endif
                </td>
                <th>Ceftriaxona</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio18))
                    {{ $cathece[$detservicio->bacteriologia->antbio18] }}
                    @endif
                </td>
                <th>Ceftrizona</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio19))
                    {{ $cathece[$detservicio->bacteriologia->antbio19] }}
                    @endif
                </td>
                <th>Cefuroxima</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio20))
                    {{ $cathece[$detservicio->bacteriologia->antbio20] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Ciprofloxacina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio21))
                    {{ $cathece[$detservicio->bacteriologia->antbio21] }}
                    @endif
                </td>
                <th>Clindamicina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio22))
                    {{ $cathece[$detservicio->bacteriologia->antbio22] }}
                    @endif
                </td>
                <th>Cloranfenicol</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio23))
                    {{ $cathece[$detservicio->bacteriologia->antbio23] }}
                    @endif
                </td>
                <th>Dicloxacilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio24))
                    {{ $cathece[$detservicio->bacteriologia->antbio24] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Eritomicina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio25))
                    {{ $cathece[$detservicio->bacteriologia->antbio25] }}
                    @endif
                </td>
                <th>Fosfomicina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio26))
                    {{ $cathece[$detservicio->bacteriologia->antbio26] }}
                    @endif
                </td>
                <th>Gentamicina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio27))
                    {{ $cathece[$detservicio->bacteriologia->antbio27] }}
                    @endif
                </td>
                <th>Impenem</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio28))
                    {{ $cathece[$detservicio->bacteriologia->antbio28] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Meropenem</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio29))
                    {{ $cathece[$detservicio->bacteriologia->antbio29] }}
                    @endif
                </td>
                <th>Nitrofurantoina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio30))
                    {{ $cathece[$detservicio->bacteriologia->antbio30] }}
                    @endif
                </td>
                <th>Norfloxacina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio31))
                    {{ $cathece[$detservicio->bacteriologia->antbio31] }}
                    @endif
                </td>
                <th>Oxacilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio32))
                    {{ $cathece[$detservicio->bacteriologia->antbio32] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Penicilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio33))
                    {{ $cathece[$detservicio->bacteriologia->antbio33] }}
                    @endif
                </td>
                <th>Sulbactam</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio34))
                    {{ $cathece[$detservicio->bacteriologia->antbio34] }}
                    @endif
                </td>
                <th>Sultamicilina</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio35))
                    {{ $cathece[$detservicio->bacteriologia->antbio35] }}
                    @endif
                </td>
                <th>Tetracicli33</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio36))
                    {{ $cathece[$detservicio->bacteriologia->antbio36] }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Trimet/sulfamet</th>
                <td>
                    @if (!empty($detservicio->bacteriologia->antbio37))
                    {{ $cathece[$detservicio->bacteriologia->antbio37] }}
                    @endif
                </td>
                <th></th>
                <td></td>
                <th></th>
                <td>
                </td>
                <th></th>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
    @else

    @endif
    <div class="altura50"></div>
</div>

<div class="altura50"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center"></td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->bacteriologia->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->bacteriologia->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->bacteriologia->doctor_id]) }}" height="100px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>