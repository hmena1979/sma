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
    ODONTOGRAMA
</div>
<br>
<div class="detalleocupacional espaciadomedio">
    <table>
        <tbody>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='20%'>Historia N°:</th>
                                <td width='9%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                                <th width='11%'>Evaluación:</th>
                                <td width='18%'>Pre Ocupacional (X)</td>
                                <td width='15%'>Ocupacional (X)</td>
                                <td width='18%'>Post Ocupacional (X)</td>
                                <td width='9%'>Otros (X)</td>
                            </tr>
                        </tbody>                        
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='20%'>Apellidos y Nombres:</th>
                                <td width='60%'>{{ $detservicio->colaborador->nombres }}</td>
                                <th width='10%'>Fecha:</th>
                                <td width='10%'>{{ date('d-m-Y',strtotime($detservicio->exaodonto->fecha)) }}</td>
                            </tr>
                        </tbody>                        
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='20%'>Edad:</th>
                                <td width='9%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
                                <th width='11%'>Sexo:</th>
                                <td width='60%'>{{ $detservicio->colaborador->sexo->nombre }}</td>
                            </tr>
                        </tbody>                        
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th width='20%'>Empresa:</th>
                                <td width='35%'>{{ $detservicio->servicio->cliente->razsoc }}</td>
                                <th width='8%'>Puesto:</th>
                                <td width='37%'>{{ $detservicio->puesto->nombre }}</td>
                            </tr>
                        </tbody>                        
                    </table>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <img src="{{ url('static/images/odontograma.jpg') }}" width="370px" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th class="audotoscopico" width='15%'>Descripción:</th>
                                <td valign='top' width='85%'>{{ $detservicio->exaodonto->descripcion }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
                        <tbody>
                            <tr>
                                <th class="audotoscopico" width='15%'>Recomendación:</th>
                                <td valign='top' width='85%'>{{ $detservicio->exaodonto->recomendacion }}</td>
                            </tr>
                        </tbody>
                    </table>                    
                </td>
            </tr>
            <tr>
                <td>
                    <table class="sinborde">
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
                                        @if (empty($detservicio->exaodonto->doctor_id))
                                        <br><br><br><br>
                                        @else
                                            @if (empty($detservicio->exaodonto->doctor->firma))
                                            <br><br><br><br>
                                            @else
                                            <img src="{{ url('firmas/'.$detservicio->exaodonto->doctor->firma) }}" width="180px" height="100px" alt=""><br>
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
                </td>
            </tr>
        </tbody>
    </table>
</div>