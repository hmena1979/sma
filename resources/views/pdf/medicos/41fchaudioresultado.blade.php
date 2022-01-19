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
    RESULTADO AUDIOMETRÍA
</div>
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
    <br><br>
    <div class="letra10 negrita">
        Vía Aérea - Derecha
    </div>
    <div class="detalleocupacional">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Hz</th>
                    <th class="text-center">500</th>
                    <th class="text-center">1000</th>
                    <th class="text-center">2000</th>
                    <th class="text-center">3000</th>
                    <th class="text-center">4000</th>
                    <th class="text-center">6000</th>
                    <th class="text-center">8000</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">dB(A)</th>
                    <td class="text-center">{{ $detservicio->exaaudio->od500}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od1000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od2000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od3000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od4000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od6000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->od8000}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="letra10 negrita">
        Vía Aérea - Izquierda
    </div>
    <div class="detalleocupacional">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Hz</th>
                    <th class="text-center">500</th>
                    <th class="text-center">1000</th>
                    <th class="text-center">2000</th>
                    <th class="text-center">3000</th>
                    <th class="text-center">4000</th>
                    <th class="text-center">6000</th>
                    <th class="text-center">8000</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">dB(A)</th>
                    <td class="text-center">{{ $detservicio->exaaudio->oi500}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi1000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi2000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi3000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi4000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi6000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->oi8000}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="letra10 negrita">
        Vía Ósea - Derecha
    </div>
    <div class="detalleocupacional">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th class="text-center">Hz</th>
                    <th class="text-center">500</th>
                    <th class="text-center">1000</th>
                    <th class="text-center">2000</th>
                    <th class="text-center">3000</th>
                    <th class="text-center">4000</th>
                    <th class="text-center">6000</th>
                    <th class="text-center">8000</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">dB(A)</th>
                    <td class="text-center">{{ $detservicio->exaaudio->va500}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va1000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va2000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va3000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va4000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va6000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->va8000}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="letra10 negrita">
        Vía Ósea - Izquierda
    </div>
    <div class="detalleocupacional">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th class="text-center">Hz</th>
                    <th class="text-center">500</th>
                    <th class="text-center">1000</th>
                    <th class="text-center">2000</th>
                    <th class="text-center">3000</th>
                    <th class="text-center">4000</th>
                    <th class="text-center">6000</th>
                    <th class="text-center">8000</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">dB(A)</th>
                    <td class="text-center">{{ $detservicio->exaaudio->vo500}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo1000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo2000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo3000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo4000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo6000}}</td>
                    <td class="text-center">{{ $detservicio->exaaudio->vo8000}}</td>
                </tr>
            </tbody>
        </table>
    </div>
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
                    @if (empty($detservicio->exaaudio->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($docfirma[$detservicio->exaaudio->doctor_id]))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$docfirma[$detservicio->exaaudio->doctor_id]) }}" height="90px" alt=""><br>
                        @endif
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>