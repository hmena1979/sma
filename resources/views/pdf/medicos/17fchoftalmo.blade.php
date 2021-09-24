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
<div class="cuadropagina">
    <div class="text-center letra12 negrita">
        EVALUACIÓN OFTALMOLÓGICA
    </div>
    <br>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <th width='15%'>NOMBRE</th>
                <td width='85%'>{{ $detservicio->colaborador->nombres }}</td>
            </tr>
            <tr>
                <th>EDAD</th>
                <td>{{ \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age }}</td>
            </tr>
            <tr>
                <th>EMPRESA</th>
                <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
            <tr>
                <th>CARGO</th>
                <td>{{ $detservicio->puesto->nombre }}</td>
            </tr>
            <tr>
                <th>FECHA</th>
                <td>{{date('d-m-Y',strtotime($detservicio->exaoftalmo->fecha))}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <th colspan="2">ANTECEDENTES</th>
            </tr>
            <tr>
                <th width='20%'>Antecedente Personal:</th>
                <td width='80%'>{{ $detservicio->exaoftalmo->antpersonal }}</td>
            </tr>
            <tr>
                <th>Antecedente Familiar:</th>
                <td>{{ $detservicio->exaoftalmo->antfamiliar }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="letra9">
        <tr><th>EXAMEN</th></tr>
    </table>
    <div class="detalleocupacional">
        <table>
            <thead>
                <tr>
                    <th width='20%'>AGUDEZA VISUAL</th>
                    <th width='10%' class="text-center">OJO</th>
                    <th width='35%' class="text-center">SIN CORRECTORES</th>
                    <th width='35%' class="text-center">CON CORRECTORES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="2">LEJOS</th>
                    <th class="text-center">O.D.</th>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vl_sc_od }}</td>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vl_cc_od }}</td>
                </tr>
                <tr>
                    <th class="text-center">O.I.</th>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vl_sc_oi }}</td>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vl_cc_oi }}</td>
                </tr>
                <tr>
                    <th rowspan="2">CERCA</th>
                    <th class="text-center">O.D.</th>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vc_sc_od }}</td>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vc_cc_od }}</td>
                </tr>
                <tr>
                    <th class="text-center">O.I.</th>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vc_sc_oi }}</td>
                    <td class="text-center">{{ $detservicio->exaoftalmo->vc_cc_oi }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <th colspan="2">BIOMICROSCOPÍA</th>
            </tr>
            <tr>
                <th width='20%'>Párpados y anexos:</th>
                <td width='80%'>{{ $detservicio->exaoftalmo->parpados }}</td>
            </tr>
            <tr>
                <th>Conjuntivas:</th>
                <td>{{ $detservicio->exaoftalmo->conjuntivas }}</td>
            </tr>
            <tr>
                <th>Cristalino:</th>
                <td>{{ $detservicio->exaoftalmo->cristalino }}</td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <td width='5%' rowspan="2"></td>
                <th width='23%' rowspan="2">Percepción de colores</th>
                <th width='5%'>OD</th>
                <td width='67%'>{{ $detservicio->exaoftalmo->percol_od }}</td>
            </tr>
            <tr>
                <th>OI</th>
                <td>{{ $detservicio->exaoftalmo->percol_oi }}</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <th rowspan="2">Fondo de ojo</th>
                <th>OD</th>
                <td>{{ $detservicio->exaoftalmo->fondojo_od }}</td>
            </tr>
            <tr>
                <th>OI</th>
                <td>{{ $detservicio->exaoftalmo->fondojo_oi }}</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <th rowspan="2">Estereopsis</th>
                <th>OD</th>
                <td>{{ $detservicio->exaoftalmo->estereopsis_od }}</td>
            </tr>
            <tr>
                <th>OI</th>
                <td>{{ $detservicio->exaoftalmo->estereopsis_oi }}</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <th rowspan="2">Tonometría</th>
                <th>OD</th>
                <td>{{ $detservicio->exaoftalmo->tonometria_od }}</td>
            </tr>
            <tr>
                <th>OI</th>
                <td>{{ $detservicio->exaoftalmo->tonometria_oi }}</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <th rowspan="2">Campimetría</th>
                <th>OD</th>
                <td>{{ $detservicio->exaoftalmo->campimetria_od }}</td>
            </tr>
            <tr>
                <th>OI</th>
                <td>{{ $detservicio->exaoftalmo->campimetria_oi }}</td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <td width='5%'></td>
                <th width='23%'>Nictometría</th>
                <th width='7%'>Normal:</th>
                <td width='5%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->nictometria_od==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='3%'></td>
                <th width='7%'>Normal:</th>
                <td width='5%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->nictometria_oi==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='45%'></td>
            </tr>
            <tr>
                <td></td>
                <th>Deslumbramiento</th>
                <th>Normal:</th>
                <td class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->deslumbramiento_od==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td></td>
                <th>Normal:</th>
                <td class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->deslumbramiento_oi==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <td width='5%'></td>
                <th width='23%'>Reac. al Encandilamiento</th>
                <th width='9%'>&lt; 5 seg.:</th>
                <td width='5%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->encandilamiento==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='3%'></td>
                <th width='9%'>&lt; 10 seg.:</th>
                <td width='5%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->encandilamiento==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='3%'></td>
                <th width='9%'>&lt; 15 seg.:</th>
                <td width='5%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->encandilamiento==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='24%'></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <th width='20%'>DIAGNÓSTICO:</th>
                <td width='80%'>{{ $detservicio->exaoftalmo->diagnostico }}</td>
            </tr>
            <tr>
                <th>RECOMENDACIONES:</th>
                <td>{{ $detservicio->exaoftalmo->recomendaciones }}</td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <th width='8%'>APTO</th>
                <td width='3%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->resultado==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='5%'></td>
                <th width='25%'>APTO CON RESTRICCIONES</th>
                <td width='3%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->resultado==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='5%'></td>
                <th width='10%'>NO APTO</th>
                <td width='3%' class="tdthcuadro text-center">
                    @if ($detservicio->exaoftalmo->resultado==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </td>
                <td width='37%'></td>
            </tr>
        </tbody>
    </table>
    <table class="cuadrosborde">
        <thead>
            <tr>
                <td width="50%" class="text-center">
                    <br><br><br><br>
                    .......................................................................
                    <div class="lchicas">
                        Huella digital y firma del paciente
                    </div>
                </td>
                <td width="50%" class="text-center letra10">
                    <div>
                        @if (empty($detservicio->exaoftalmo->doctor_id))
                        <br><br><br><br>
                        @else
                            @if (empty($detservicio->exaoftalmo->doctor->firma))
                            <br><br><br><br>
                            @else
                            <img src="{{ url('firmas/'.$detservicio->exaoftalmo->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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