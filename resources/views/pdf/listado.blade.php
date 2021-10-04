<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Informe</title>
    <link rel="stylesheet" href="{{ url('/static/css/report.css?v='.time()) }}">
</head>
<body>
    <div class="footer letra9">
        {{ $sede->direccion}}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ $param->dominio }}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ $param->email }} &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;marmerimo@hotmail.com<br>
        Telef. {{ $sede->telefono}}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Cel: {{ $sede->celular}}
    </div>
    <table class="cuadrosborde">
        <thead>
            <tr>
                <td width="10%" class="text-left">
                    <img src="{{ url('/static/images/logo.jpg') }}" width="80px" alt="">
                </td>
                <td width="25%" class="text-left lchicas negrita">
                    {{ $param->razsoc }}
                </td>
                <td width="65%"></td>
            </tr>
        </thead>
    </table>
    <div class="text-center letra12 negrita">
        EVALUACIÓN {{ $servicio->eval->nombre }}
    </div>
    <br>
    <br>
    <div class="tablasinbordes letra10">
        <table class="">
            <tbody>
                <tr>
                    <th width="8%" class="">CLIENTE:</th>
                    <td width="40%" class="">{{ $servicio->cliente->razsoc }}</td>
                    <th width="8%" class="">FECHA:</th>
                    <td width="20%" class="">{{ date('d-m-Y',strtotime($servicio->fecha)) }}</td>
                    <td width="24%"></td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th width='10%' class="lineasupinf">CÓDIGO</th>
                    <th width='35%' class="lineasupinf">COLABORADOR</th>
                    <th width='20%' class="lineasupinf">ÁREA</th>
                    <th width='20%' class="lineasupinf">PUESTO</th>
                    <th width='15%' class="lineasupinf">RESULTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                <tr>
                    <td>{{ str_pad($detalle->id, 5, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $detalle->nombres }}</td>
                    <td>{{ $area[$detalle->area_id] }}</td>
                    <td>{{ $puesto[$detalle->puesto_id] }}</td>
                    <td>{{ $resultado[$detalle->resultado] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>