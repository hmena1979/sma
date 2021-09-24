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
                <div class="text-right lchicas">
                    PÁGINA: <strong>01</strong>
                </div>
            </td>
        </tr>
    </thead>
</table>
<br>
<div class="text-center letra12 negrita">
    FICHA MÚSCULO ESQUELÉTICA
</div>
<br><br>
<table class="cuadrosborde text-left">
    <tbody>
        <tr>
            <th width='30%'>APELLIDOS Y NOMBRES:</th>
            <td width='70%'>{{ $detservicio->colaborador->nombres }}</td>
        </tr>
        <tr>
            <th>EMPRESA:</th>
            <td>{{ $detservicio->servicio->cliente->razsoc }}</td>
        </tr>
        <tr>
            <th>FECHA:</th>
            <td>{{date('d-m-Y',strtotime($detservicio->examedico->fecha))}}</td>
        </tr>
        <tr>
            <th>PUESTO DE TRABAJO:</th>
            <td>{{ $detservicio->puesto->nombre }}</td>
        </tr>
        <tr>
            <th>TIEMPO EN EL TRABAJO:</th>
            <td>{{ $detservicio->examedico->metiempo }}</td>
        </tr>
        <tr>
            <th>APTITUD DE ESPALDA:</th>
            <td>{{ $detservicio->examedico->meaptitud }}</td>
        </tr>
    </tbody>
</table>
<br><br>
<div class="detalleocupacional">
    <table>
        <thead>
            <tr>
                <th class="text-center" width="25%"></th>
                <th class="text-center" width="15%">Excelente: 1</th>
                <th class="text-center" width="15%">Promedio: 2</th>
                <th class="text-center" width="15%">Regular: 3</th>
                <th class="text-center" width="15%">Pobre: 4</th>
                <th class="text-center" width="15%">Ptos.*</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="text-center">Flexibilidad / Fuerza ABDOMEN</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/F1.png') }}" alt="">
                        <div class="marcax letra40 text-center">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_1pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/F2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_1pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/F3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_1pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/F4.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_1pto')==4?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja1, 'h1_1pto') }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">CADERA</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/C1.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_2pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/C2.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_2pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/C3.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_2pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/C4.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_2pto')==4?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja1, 'h1_2pto') }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">MUSLO</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/M1.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_3pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/M2.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_3pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/M3.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_3pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/M4.png') }}" alt="">
                        <div class="marcaxcadera letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_3pto')==4?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja1, 'h1_3pto') }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">ABDOMEN LATERAL</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/A1.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_4pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/A2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_4pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/A3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_4pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/A4.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja1, 'h1_4pto')==4?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja1, 'h1_4pto') }}
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="5" class="text-right">
                    <div class="letra30 ptos">
                        TOTAL
                    </div>

                </th>
                <th class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja1, 'h1_tpto') }}
                    </div>
                </th>
            </tr>
            <tr>
                <th class="espaciado">OBSERVACIONES</th>
                <td class="espaciado" colspan="5">{{ kvfj($detservicio->examedico->mehoja1, 'h1_obs') }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div style="page-break-after:always;"></div>
{{---------------------------------------------------------------------------------------------------------------}}
{{--------------------------------------------- Pagina 2 --------------------------------------------------------}}
{{---------------------------------------------------------------------------------------------------------------}}
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
                <div class="text-right lchicas">
                    PÁGINA: <strong>02</strong>
                </div>
            </td>
        </tr>
    </thead>
</table>
<br><br>
<div class="detalleocupacional">
    <table>
        <thead>
            <tr>
                <th class="text-center" width="25%">RANGOS ARTICULARES</th>
                <th class="text-center" width="15%">Óptimo: 1</th>
                <th class="text-center" width="15%">Limitado: 2</th>
                <th class="text-center" width="15%">Muy Limitado: 3</th>
                <th class="text-center" width="15%">Ptos.*</th>
                <th class="text-center" width="15%">Dolor contra resistencia Si / No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="text-center">Abducción de hombro (Normal 0° - 180°)</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAA1.png') }}" alt="">
                        <div class="marcax letra40 text-center">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_1pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAA2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_1pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="cuadro-img">
                        <img src="{{ url('/static/images/RAA3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_1pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja2, 'h2_1pto') }}
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr1')==1?'Si':'No' }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">Abducción del hombro<br>(0° -80°)</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAB1.png') }}" alt="">
                        <div class="marcax letra40 text-center">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_2pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAB2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_2pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="cuadro-img">
                        <img src="{{ url('/static/images/RAB3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_2pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja2, 'h2_2pto') }}
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr2')==1?'Si':'No' }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">Rotación externa<br>(0° - 90°)</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAC1.png') }}" alt="">
                        <div class="marcax letra40 text-center">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_3pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAC2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_3pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="cuadro-img">
                        <img src="{{ url('/static/images/RAC3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_3pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja2, 'h2_3pto') }}
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr3')==1?'Si':'No' }}
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center">Rotación externa de hombro interna</th>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAD1.png') }}" alt="">
                        <div class="marcax letra40 text-center">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_4pto')==1?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class=" cuadro-img">
                        <img src="{{ url('/static/images/RAD2.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_4pto')==2?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="cuadro-img">
                        <img src="{{ url('/static/images/RAD3.png') }}" alt="">
                        <div class="marcax letra40">
                            {{ kvfj($detservicio->examedico->mehoja2, 'h2_4pto')==3?'X':'' }}
                        </div>
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja2, 'h2_4pto') }}
                    </div>
                </td>
                <td class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr4')==1?'Si':'No' }}
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="text-right">
                    <div class="letra30 ptos">
                        TOTAL
                    </div>

                </th>
                <th class="text-center">
                    <div class="letra30 ptos">
                        {{ kvfj($detservicio->examedico->mehoja2, 'h2_tpto') }}
                    </div>
                </th>
                <td></td>
            </tr>

            <tr>
                <th class="espaciado">OBSERVACIONES</th>
                <td class="espaciado" colspan="5">{{ kvfj($detservicio->examedico->mehoja2, 'h2_obs') }}</td>
            </tr>
        </tbody>
    </table>

</div>