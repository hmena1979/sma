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
    UROCULTIVO
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->urocultivo->fecha)) }}</td>
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
    <div class="tablasinbordes fondofirma">
        <table class="letra10">
            <thead>
                <tr>
                    <th width='34%'>EXAMEN REALIZADO</th>
                    <th width='33%'>RESULTADO</th>
                    <th width='33%'>VALOR REFERENCIAL</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="3">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                <tr>
                    <th colspan="3">SEDIMENTO:</th>
                </tr>
                <tr>
                    <td>Leucocitos</td>
                    <td>{{ $detservicio->urocultivo->leucocitos }}</td>
                    <td>0 - 5 x campo</td>
                </tr>
                <tr>
                    <td>Hematies</td>
                    <td>{{ $detservicio->urocultivo->hematies }}</td>
                    <td>0 - 5 x campo</td>
                </tr>
                <tr>
                    <td>Celulas Epiteliales</td>
                    <td>{{ $catorina[$detservicio->urocultivo->cepiteliales] }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Germenes</td>
                    <td>{{ $catorina[$detservicio->urocultivo->germenes] }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cristales</td>
                    <td>{{ $detservicio->urocultivo->cristales.' '.$catorina[$detservicio->urocultivo->ccristales] }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Otros</td>
                    <td colspan="2">{{ $catorina[$detservicio->urocultivo->otros01].' '.$catorina[$detservicio->urocultivo->otrcantidad01] }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">{{ $catorina[$detservicio->urocultivo->otros02].' '.$catorina[$detservicio->urocultivo->otrcantidad02] }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">{{ $catorina[$detservicio->urocultivo->otros03].' '.$catorina[$detservicio->urocultivo->otrcantidad03] }}</td>
                </tr>
                <tr><td colspan="3">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                <tr>
                    <th>C</th>
                    <td>{{ $detservicio->urocultivo->c==1?'POSITIVO':'NEGATIVO' }}</td>
                    <td></td>
                </tr>
                <tr>
                    <th>GERMEN AISLADO</th>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->germen_id] }}</td>
                </tr>
                <tr>
                    <th>RECUENTO DE COLONIAS</th>
                    <td>{{ $detservicio->urocultivo->rcolonias }} ufc/ml.</td>
                    <td>&lt; 80,000UFC/ml.</td>
                </tr>
                <tr><td colspan="3">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                <tr>
                    <th colspan="3">ANTIBIOGRAMA :</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-center">INTERPRETACION</th>
                </tr>
                <tr>
                    <td>AMICACINA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant01] }}</td>
                </tr>
                <tr>
                    <td>IMIPENEN</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant02] }}</td>
                </tr>
                <tr>
                    <td>CEFTRIAXONA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant03] }}</td>
                </tr>
                <tr>
                    <td>AMPICILINA+SULBATAM</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant04] }}</td>
                </tr>
                <tr>
                    <td>AMOXICILINA+AC. CALVULANICO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant05] }}</td>
                </tr>
                <tr>
                    <td>LEVOFLOXACINO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant06] }}</td>
                </tr>
                <tr>
                    <td>SULFAMETOXAZOL+TRIMET</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant07] }}</td>
                </tr>
                <tr>
                    <td>NITROFURANTOINA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant08] }}</td>
                </tr>
                <tr>
                    <td>CIPROFLOXACINO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant09] }}</td>
                </tr>
                <tr>
                    <td>CEFTAZIDIMA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant10] }}</td>
                </tr>
                <tr>
                    <td>GENTAMICINA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant11] }}</td>
                </tr>
                <tr>
                    <td>ACIDO NALIDIXICO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant12] }}</td>
                </tr>
                <tr>
                    <td>CEFRADINA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant13] }}</td>
                </tr>
                <tr>
                    <td>CEFADROXILO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant14] }}</td>
                </tr>
                <tr>
                    <td>CEFALEXINA</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant15] }}</td>
                </tr>
                <tr>
                    <td>NORFLOXACINO</td>
                    <td colspan="2">{{ $cathece[$detservicio->urocultivo->ant16] }}</td>
                </tr>
            </tbody>
        </table>
        <div class="firmalab">
            @if (empty($detservicio->urocultivo->doctor_id))
            <br>
            @else
                @if (empty($docfirma[$detservicio->urocultivo->doctor_id]))
                <br>
                @else
                <img src="{{ url('firmas/'.$docfirma[$detservicio->urocultivo->doctor_id]) }}" height="100px" alt=""><br>
                @endif
            @endif
        </div>
    </div>
</div>


{{-- <table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center"></td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->urocultivo->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->urocultivo->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->urocultivo->doctor_id]) }}" height="100px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table> --}}