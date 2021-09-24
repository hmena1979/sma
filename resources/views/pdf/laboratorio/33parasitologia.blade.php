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
                <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->parasitologia->fecha)) }}</td>
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
                    <td>{{ $cathece[$detservicio->parasitologia->muestra_id] }}</td>
                </tr>
                <tr>
                    <th colspan="2">EXAMEN SOLICITADO</th>
                    <td>{{ $detservicio->parasitologia->examen }}</td>
                </tr>
                <tr>
                    <th colspan="2">NÚMERO DE MUESTRAS</th>
                    <td>{{ $detservicio->parasitologia->numero }}</td>
                </tr>
                <tr>
                    <th colspan="3">RESULTADOS</th>
                </tr>
                <tr>
                    <td width='5%'></td>
                    <td width='30%'>- HECES PARASITOLOGICAS</td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->hp1].' '.$cathece[$detservicio->parasitologia->dhp1] }}
                    </td>
                </tr>
                @if ($detservicio->parasitologia->hp2 <> 1)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->hp2].' '.$cathece[$detservicio->parasitologia->dhp2] }}
                    </td>
                </tr>                    
                @endif
                @if ($detservicio->parasitologia->hp3 <> 1)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->hp3].' '.$cathece[$detservicio->parasitologia->dhp3] }}
                    </td>
                </tr>                    
                @endif
                <tr>
                    <td width='5%'></td>
                    <td width='30%'>- REACCIÓN INFLAMATORIA</td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->ri1].' '.$cathece[$detservicio->parasitologia->dri1] }}
                    </td>
                </tr>
                @if ($detservicio->parasitologia->ri2)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->ri2].' '.$cathece[$detservicio->parasitologia->dri2] }}
                    </td>
                </tr>
                @endif
                @if ($detservicio->parasitologia->ri3)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->ri3].' '.$cathece[$detservicio->parasitologia->dri3] }}
                    </td>
                </tr>
                @endif
                @if ($detservicio->parasitologia->ri4)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->ri4].' '.$cathece[$detservicio->parasitologia->dri4] }}
                    </td>
                </tr>
                @endif
                @if ($detservicio->parasitologia->ri5)
                <tr>
                    <td width='5%'></td>
                    <td width='30%'></td>
                    <td width='65%'>
                        {{ $cathece[$detservicio->parasitologia->ri5].' '.$cathece[$detservicio->parasitologia->dri5] }}
                    </td>
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
                    @if (empty($detservicio->parasitologia->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->parasitologia->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->parasitologia->doctor_id]) }}" height="100px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>