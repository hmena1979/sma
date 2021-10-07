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
<div class="text-center letra12 negrita">
    EXAMEN OSTEOMUSCULAR
</div>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th width="50%">1.- DETALLE DEL PUESTO</th>
                <th width="10%">PACIENTE</th>
                <td width="40%">{{ $detservicio->colaborador->nombres }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width="18%" rowspan="2">Area de Trabajo</th>
                <th width="18%" rowspan="2">Puesto</th>
                <th width="19%" class="text-center" colspan="3">Manipulación de Carga (Kg)</th>
                <th width="10%" class="text-center" colspan="2">Postura Habitual</th>
                <th width="20%" class="text-center" colspan="4">Movimientos Repetitivos</th>
                <th width="15%" rowspan="2" class="text-center">Periodo de Tiempo</th>
            </tr>
            <tr>
                <th class="text-center">&lt;25</th>
                <th class="text-center">25-50</th>
                <th class="text-center">&gt;50</th>
                <th class="text-center">Sentado</th>
                <th class="text-center">Pie</th>
                <th class="text-center">Cabeza</th>
                <th class="text-center">Tronco</th>
                <th class="text-center">MMSS</th>
                <th class="text-center">MMSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $detservicio->area->nombre }}</td>
                <td>{{ $detservicio->puesto->nombre }}</td>
                <td class="text-center">{{ $detservicio->examedico->manicarga==2 ? 'X':'' }}</td>
                <td class="text-center">{{ $detservicio->examedico->manicarga==3 ? 'X':'' }}</td>
                <td class="text-center">{{ $detservicio->examedico->manicarga==4 ? 'X':'' }}</td>
                <td class="text-center">{{ $detservicio->examedico->postura==1 ? 'X':'' }}</td>
                <td class="text-center">{{ $detservicio->examedico->postura==2 ? 'X':'' }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->movrep, 'mrcabeza')==1 ? 'X':'' }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->movrep, 'mrtronco')==1 ? 'X':'' }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->movrep, 'mrmmss')==1 ? 'X':'' }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->movrep, 'mrmmii')==1 ? 'X':'' }}</td>
                <td class="text-center">{{ $detservicio->examedico->pertiempo }}</td>
            </tr>
            <tr>
                <th colspan="12">2.- CUESTIONARIO DE SINTOMAS</th>
            </tr>
        </tbody>
    </table>
    <table class="espaciadomedio">
        <thead>
            <tr>
                <th width='22%'></th>
                <th width='26%'>Ha tenido problemas (dolor, aumento de volumen, bultos,etc) en los últimos 12 meses a nivel de:</th>
                <th width='26%'>Durante los últimos doce meses ha estado incapacitado para su trabajo por causas de algún problema, a nivel de:</th>
                <th width='26%'>Ha tenido problemas(dolor, aumento de volumen, bultos, etc) en los últimos 7 dias a nivel de:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Nuca/cuello</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cnuca1')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cnuca2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cnuca3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Hombro:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'chombrod1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'chombroi1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'chombro2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'chombro3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Codos:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccodod1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccodoi1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccodo2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccodo3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Muñeca/Manos:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cmmd1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cmmi1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cmm2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'cmm3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>Columna Dorsal</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccoldor1')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccoldor2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccoldor3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>Columna Lumbar</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccollum1')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccollum2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccollum3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Caderas:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccaderad1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccaderai1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccadera2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ccadera3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Rodillas:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'crodillad1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'crodillai1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'crodilla2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'crodilla3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th>
                    <strong>
                        <span>Tobillos Pies:</span><br>
                        Derecho<br>
                        Izquierdo
                    </strong>
                </th>
                <td>
                    <br>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ctobillod1')==1?'SI':'NO' }}</div>
                    <div class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ctobilloi1')==1?'SI':'NO' }}</div>
                </td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ctobillo2')==1?'SI':'NO' }}</td>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cuestionario, 'ctobillo3')==1?'SI':'NO' }}</td>
            </tr>
            <tr>
                <th colspan="4">3.- EXPLORACIÓN FISICA</th>
            </tr>
            <tr>
                <th colspan="4">3.1 Articulaciones: movilidad y dolor (valorado según tabla 1)</th>
            </tr>
        </tbody>
    </table>
    <table class="">
        <thead>
            <tr>
                <th width="16%" colspan="2">Articulación</th>
                <th width="8%">Abducción</th>
                <th width="8%">Aducción</th>
                <th width="8%">Flexión</th>
                <th width="8%">Extención</th>
                <th width="8%">Rot.Ext.</th>
                <th width="8%">Rot.Int.</th>
                <th width="8%">Dolor</th>
                <th width="8%">Irradiación</th>
                <th width="8%">Alter.Masa Muscular</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th rowspan="2">Hombro</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombrod9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exhombroi9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Codo</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodod9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excodoi9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Muñeca</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecad9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmunecai9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Mano y Dedos</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanod9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exmanoi9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Cadera</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderad9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'excaderai9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Rodilla</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillad9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'exrodillai9') }}</td>
            </tr>
            <tr>
                <th rowspan="2">Tobillo</th>
                <td class="align-middle">Der.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobillod9') }}</td>
            </tr>
            <tr>
                <td class="align-middle">Izq.</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi1') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi2') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi3') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi4') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi5') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi6') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi7') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi8') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->efarticulacion, 'extobilloi9') }}</td>
            </tr>
            <tr>
                <td colspan="11"></td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th rowspan="2">Test de Phalen</th>
                <th>Der</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'phalend')==1?'Positivo':'Negativo'}}</td>
                <th rowspan="2">Signo de Neer**</th>
                <th>Der</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'neerd')==1?'Positivo':'Negativo'}}</td>
                <th rowspan="2">Test de Tinel</th>
                <th>Der</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'tineld')==1?'Positivo':'Negativo'}}</td>
            </tr>
            <tr>
                <th>Izq</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'phaleni')==1?'Positivo':'Negativo'}}</td>                
                <th>Izq</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'neeri')==1?'Positivo':'Negativo'}}</td>                
                <th>Izq</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'tineli')==1?'Positivo':'Negativo'}}</td>                
            </tr>
            <tr>
                <th rowspan="2">Test del brazo caido**</th>
                <th>Der</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'brazod')==1?'Positivo':'Negativo'}}</td>
                <th rowspan="2">Signo de Finkelstein</th>
                <th>Der</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'finkelsteind')==1?'Positivo':'Negativo'}}</td>
                <td rowspan="2" colspan="3"></td>
            </tr>
            <tr>
                <th>Izq</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'brazoi')==1?'Positivo':'Negativo'}}</td>
                <th>Izq</th>
                <td>{{kvfjsn($detservicio->examedico->eftemmss, 'finkelsteini')==1?'Positivo':'Negativo'}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div>
        * Usar escala del dolor. <br>
        ** Aplica para trabajadores de plantas (operaciones), no para personal con labores administrativas.
    </div>

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
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th colspan="7">Simetría de miembros</th>
            </tr>
            <tr>
                <th width='30%'>Simetría de MMSS a la ectoscopía</th>
                <th width='10%'>Normal</th>
                <td width='5%' class="text-center">{{ kvfjns($detservicio->examedico->efsimetria, 'efmmss')==1?'X':'' }}</td>
                <th width='10%'>Anormal</th>
                <td width='5%' class="text-center">{{ kvfjns($detservicio->examedico->efsimetria, 'efmmss')==2?'X':'' }}</td>
                <th width='10%'>Observaciones</th>
                <td width='30%'>{{ kvfj($detservicio->examedico->efsimetria, 'efmmssobs') }}</td>
            </tr>
            <tr>
                <th width='30%'>Simetría de MMII a la ectoscopía</th>
                <th width='10%'>Normal</th>
                <td width='5%' class="text-center">{{ kvfjns($detservicio->examedico->efsimetria, 'efmmii')==1?'X':'' }}</td>
                <th width='10%'>Anormal</th>
                <td width='5%' class="text-center">{{ kvfjns($detservicio->examedico->efsimetria, 'efmmii')==2?'X':'' }}</td>
                <th width='10%'>Observaciones</th>
                <td width='30%'>{{ kvfj($detservicio->examedico->efsimetria, 'efmmiiobs') }}</td>
            </tr>
            <tr>
                <th colspan="7">4 COLUMNA VERTEBRAL</th>
            </tr>
            <tr>
                <th colspan="7">4.1 Inspección</th>
            </tr>
            <tr>
                <th colspan="7">EJE ANTERO - POSTERIOR</th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='40%'>Curvas Fisiológicas (ant - post)</th>
                <th width='20%' class="text-center">Normal</th>
                <th width='20%' class="text-center">Aumentada</th>
                <th width='20%' class="text-center">Disminuida</th>
            </tr>
            <tr>
                <th>Cervical</th>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==1?kvfj($detservicio->examedico->cvejeantero, 'cveacervicaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==2?kvfj($detservicio->examedico->cvejeantero, 'cveacervicaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==3?kvfj($detservicio->examedico->cvejeantero, 'cveacervicaldes'):'' }}
                </td>
            </tr>
            <tr>
                <th>Dorsal</th>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==1?kvfj($detservicio->examedico->cvejeantero, 'cveadorsaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==2?kvfj($detservicio->examedico->cvejeantero, 'cveadorsaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==3?kvfj($detservicio->examedico->cvejeantero, 'cveadorsaldes'):'' }}
                </td>
            </tr>
            <tr>
                <th>Lumbar</th>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==1?kvfj($detservicio->examedico->cvejeantero, 'cvealumbardes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==2?kvfj($detservicio->examedico->cvejeantero, 'cvealumbardes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==3?kvfj($detservicio->examedico->cvejeantero, 'cvealumbardes'):'' }}
                </td>
            </tr>
            <tr>
                <th colspan="4">EJE LATERAL</th>
            </tr>
            <tr>
                <th width='40%'>Eje lateral</th>
                <th width='20%' class="text-center">Normal</th>
                <th width='20%' class="text-center">Concavidad Derecha</th>
                <th width='20%' class="text-center">Concavidad Izquierda</th>
            </tr>
            <tr>
                <th>Dorsal</th>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==1?kvfj($detservicio->examedico->cvejelateral, 'cveldorsaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==2?kvfj($detservicio->examedico->cvejelateral, 'cveldorsaldes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==3?kvfj($detservicio->examedico->cvejelateral, 'cveldorsaldes'):'' }}
                </td>
            </tr>
            <tr>
                <th>Lumbar</th>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==1?kvfj($detservicio->examedico->cvejelateral, 'cvellumbardes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==2?kvfj($detservicio->examedico->cvejelateral, 'cvellumbardes'):'' }}
                </td>
                <td class="text-center">
                    {{ kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==3?kvfj($detservicio->examedico->cvejelateral, 'cvellumbardes'):'' }}
                </td>
            </tr>
            <tr>
                <th colspan="4">4.2 Examen físico</th>
            </tr>
            <tr>
                <th colspan="4">MOVILIDAD - DOLOR (Valorar según tabla 1)</th>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='20%'>Columna Vertebral</th>
                <th width='10%'>Flexión</th>
                <th width='10%'>Extención</th>
                <th width='10%'>Lateraliz. Derecha</th>
                <th width='10%'>Lateraliz. Izquierda</th>
                <th width='10%'>Rotación Derecha</th>
                <th width='10%'>Rotación Izquierda</th>
                <th width='10%'>Dolor (0/4)</th>
                <th width='10%'>Irradiación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cervical</th>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvflexionc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvextencionc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvlatderc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvlatizqc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvrotderc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvrotizqc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvdolorc') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvirradiac') }}</td>
            </tr>
            <tr>
                <th>Lumbar</th>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvflexionl') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvextencionl') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvlatderl') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvlatizql') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvrotderl') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvrotizql') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvdolorl') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvmovilidad, 'cvirradial') }}</td>
            </tr>
            <tr>
                <td colspan="9"></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='20%'>Test específicos</th>
                <th width='10%'></th>
                <th width='10%' class="text-center">+/-</th>
                <th width='10%'></th>
                <th width='10%' class="text-center">+/-</th>
                <th width='40%' rowspan="3"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>LASEGUE</th>
                <th>Derecho</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cvtest, 'cvtlasegued')==1?'Positivo':'Negativo' }}</td>
                <th>Izquierdo</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cvtest, 'cvtlaseguei')==1?'Positivo':'Negativo' }}</td>
            </tr>
            <tr>
                <th>SCHOBER</th>
                <th>Derecho</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cvtest, 'cvtschoberd')==1?'Positivo':'Negativo' }}</td>
                <th>Izquierdo</th>
                <td class="text-center">{{ kvfjsn($detservicio->examedico->cvtest, 'cvtschoberi')==1?'Positivo':'Negativo' }}</td>
            </tr>
            <tr>
                <th colspan="6">PALPACIÓN</th>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='20%'>Columna Vertebral</th>
                <th width='40%' class="text-center">Apófisis Espinosas Dolorosas</th>
                <th width='40%' class="text-center">Contractura Muscular</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cervical</th>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalap') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalcm') }}</td>
            </tr>
            <tr>
                <th>Lumbar</th>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalap') }}</td>
                <td class="text-center">{{ kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalcm') }}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <th colspan="3">TABLA 1</th>
            </tr>
            <tr>
                <td>Grado 0</td>
                <td colspan="2">AUSENCIA DE SIGNOS Y SÍNTOMAS</td>
            </tr>
            <tr>
                <td>Grado 1</td>
                <td colspan="2">EXISTENCIA DE SINTOMATOLOGÍA SUGESTIVA Y/O DOLOR EN REPOSO</td>
            </tr>
            <tr>
                <td>Grado 2</td>
                <td colspan="2">GRADO 1 MAS CONTRACTURA Y/O DOLOR A LA MOVILIZACIÓN</td>
            </tr>
            <tr>
                <td>Grado 3</td>
                <td colspan="2">GRADO 2 MAS DOLOR A LA PALPACIÓN Y/O PERCUSIÓN</td>
            </tr>
            <tr>
                <td>Grado 4</td>
                <td colspan="2">GRADO 3 MAS LIMITACIÓN FUNCIONAL EVIDENTE CLÍNICAMENTE</td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <th colspan="3">5. COMENTARIOS / OBSERVACIONES (AMPLIACIÓN DE HALLAZGOS)</th>
            </tr>
            <tr>
                <td colspan="3" class="espaciado">{!! htmlspecialchars_decode(nl2br($detservicio->examedico->comentarios)) !!} </td>
            </tr>
            <tr>
                <th colspan="3">6. DIAGNOSTICO OSTEOMUSCULAR</th>
            </tr>
            <tr>
                <td colspan="3" class="espaciado">{!! htmlspecialchars_decode(nl2br($detservicio->examedico->diagosteo)) !!}</td>
            </tr>
            <tr>
                <th colspan="3">7. RECOMENDACIONES</th>
            </tr>
            <tr>
                <td colspan="3" class="espaciado">{!! htmlspecialchars_decode(nl2br($detservicio->examedico->recomendaciones)) !!}</td>
            </tr>
        </tbody>
    </table>
</div>
<table class="cuadrosborde">
    <thead>
        <tr>
            <td width="25%">
                <div class="cuadrofecha letra11 text-center">
                    Fecha: {{date('d-m-Y',strtotime($detservicio->examedico->fecha))}}
                </div>
            </td>
            <td width="25%"></td>
            <td width="50%" class="text-center letra10">
                <div>
                    @if (empty($detservicio->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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