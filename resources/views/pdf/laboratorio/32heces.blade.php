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
    PARASITOLOGÍA CLÍNICA
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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->hece->fecha)) }}</td>
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
                    <td>{{ $cathece[$detservicio->hece->muestra_id] }}</td>
                </tr>
                <tr>
                    <th colspan="2">EXAMEN SOLICITADO</th>
                    <td>{{ $detservicio->hece->examen }}</td>
                </tr>
                <tr>
                    <th colspan="3">RESULTADOS</th>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <th width='25%'>EXAMEN FÍSICO</th>
                    <td width='70%'></td>
                </tr>
                <tr>
                    <td></td>
                    <td>- CONSISTENCIA</td>
                    <td>{{ $detservicio->hece->consistencia }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- COLOR</td>
                    <td>{{ $detservicio->hece->color }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- OLOR</td>
                    <td>{{ $detservicio->hece->olor }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- MUCUS</td>
                    <td>{{ $detservicio->hece->mucus }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- REACCION</td>
                    <td>{{ $detservicio->hece->reaccion }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- SANGRE</td>
                    <td>{{ $detservicio->hece->sangre }}</td>
                </tr>
                <tr>
                    <td></td>
                    <th>EXAMEN QUÍMICO</th>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>- THEVENON</td>
                    <td>{{ $detservicio->hece->thevenon }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- SUST. REDUCTORAS</td>
                    <td>{{ $detservicio->hece->sreductoras }}</td>
                </tr>
                <tr>
                    <td></td>
                    <th>EXAMEN MICROSCÓPICO</th>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>- CELULAS EPITELIALES</td>
                    <td>{{ $detservicio->hece->cepiteliales }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- HEMATIES</td>
                    <td>{{ $detservicio->hece->hematies }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- LEUCOCITOS</td>
                    <td>{{ $detservicio->hece->leucocitos }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- FIB. ORG. NO DIGERIDA</td>
                    <td>{{ $detservicio->hece->fond }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- MAT. ORG. NO DIGERIDA</td>
                    <td>{{ $detservicio->hece->mond }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- VESÍCULAS LIPIDICAS</td>
                    <td>{{ $detservicio->hece->vlipidas }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- CELULAS LEVADURIFORMES</td>
                    <td>{{ $detservicio->hece->levaduras }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>- PARÁSITOS</td>
                    <td>{{ $cathece[$detservicio->hece->parasito1].' '.$cathece[$detservicio->hece->dparasito1] }}</td>
                </tr>
                @if ($detservicio->hece->parasito2 <> 1)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $cathece[$detservicio->hece->parasito2].' '.$cathece[$detservicio->hece->dparasito2] }}</td>
                </tr>
                @endif
                @if ($detservicio->hece->parasito3 <> 1)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $cathece[$detservicio->hece->parasito3].' '.$cathece[$detservicio->hece->dparasito3] }}</td>
                </tr>
                @endif
                @if ($detservicio->hece->parasito4 <> 1)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $cathece[$detservicio->hece->parasito4].' '.$cathece[$detservicio->hece->dparasito4] }}</td>
                </tr>
                @endif
                @if ($detservicio->hece->parasito5 <> 1)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $cathece[$detservicio->hece->parasito5].' '.$cathece[$detservicio->hece->dparasito5] }}</td>
                </tr>
                @endif
            </tbody>
        </tbody>
    </table>
</div>

<div class="altura50"></div>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='50%' class="text-center"></td>
            <td width='50%' class="text-center">
                <div>
                    @if (empty($detservicio->hece->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->hece->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->hece->doctor_id]) }}" height="100px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>