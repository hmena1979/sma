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
    ELECTROCARDIOGRAMA
</div>
<br><br>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th width='10%'>Fecha:</th>
            <td width='60%'>{{ date('d-m-Y',strtotime($detservicio->exaekg->fecha)) }}</td>
            <th width='15%'>N° de Atención:</th>
            <td width='15%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr>
            <th>Paciente:</th>
            <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
        </tr>
        <tr><td colspan="4"></td></tr>
    </tbody>
</table>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th width='10%'>Edad:</th>
            <td width='7%'>{{ \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age }}</td>
            <th width='15%'>Presión Arterial:</th>
            <td width='12%'>{{ $detservicio->examedico->pa }}</td>
            <th width='20%'>Frecuencia Cardiaca:</th>
            <td width='8%'>{{ $detservicio->examedico->fcard }}</td>
            <th width='20%'>Perímetro Abdominal:</th>
            <td width='8%'>{{ $detservicio->examedico->pabdominal }}</td>
        </tr>
    </tbody>
</table>
<br>
<div class="letra10 negrita">
    Antecedentes de importancia:
</div>
<br>
<div class="letra10 negrita">
    LECTURA
</div>
<br>
<div class="detalleocupacional espaciadodoble">
    <table>
        <tbody>
            <tr>
                <th class="text-center" width='20%'>RITMO</th>
                <td class="text-center" width='40%'>{{ $detservicio->exaekg->ritmo }}</td>
                <td width='40%' rowspan="6"></td>
            </tr>
            <tr>
                <th class="text-center">FRECUENCIA</th>
                <td class="text-center">{{ $detservicio->exaekg->frecuencia }}</td>
            </tr>
            <tr>
                <th class="text-center">PR</th>
                <td class="text-center">{{ $detservicio->exaekg->pr }}</td>
            </tr>
            <tr>
                <th class="text-center">QRS</th>
                <td class="text-center">{{ $detservicio->exaekg->qrs }}</td>
            </tr>
            <tr>
                <th class="text-center">QT</th>
                <td class="text-center">{{ $detservicio->exaekg->qt }}</td>
            </tr>
            <tr>
                <th class="text-center">EJE</th>
                <td class="text-center">{{ $detservicio->exaekg->eje }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <th>CONCLUSIÓN:</th>
        </tr>
        <tr>
            <td valign='top' class="audotoscopico">{{ $detservicio->exaekg->conclusion }}</td>
        </tr>
        <tr>
            <th>COMENTARIO:</th>
        </tr>
        <tr>
            <td valign='top' class="audotoscopico">{{ $detservicio->exaekg->comentario }}</td>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra10 text-left">
    <tbody>
        <tr>
            <td width='60%'></td>
            <td width='40%' class="text-center">
                <div>
                    @if (empty($detservicio->exaekg->doctor_id))
                    <br><br><br><br>
                    @else
                        @if (empty($detservicio->exaekg->doctor->firma))
                        <br><br><br><br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaekg->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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
</table>