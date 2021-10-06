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
    EVALUACIÓN PSICOSOMÉTRICA
</div>
<br><br>
<div class="cuadroredondeado">
    <div class="letra11 negrita">
        DATOS DEL EVALUADO
    </div>
    <br>
    <table class="cuadrosborde letra10 text-left">
        <tbody>
            <tr>
                <th width='25%'>DOCUMENTO</th>
                <td width='35%'>{{ $detservicio->colaborador->tipdoc->nombre }}</td>
                <th width='20%'>NUMERO DE DOC</th>
                <td width='20%'>{{ $detservicio->colaborador->numdoc }}</td>
            </tr>
            <tr>
                <th>NOMBRES</th>
                <td colspan="3">{{ $detservicio->colaborador->nombre }}</td>
            </tr>
            <tr>
                <th>APELLIDOS</th>
                <td colspan="3">{{ $detservicio->colaborador->apellido }}</td>
            </tr>
            <tr>
                <th>FECHA DE NACIMIENTO</th>
                <td>{{ date('d-m-Y',strtotime($detservicio->colaborador->fecnac)) }}</td>
                <th>CONTACTO</th>
                <td>{{ $detservicio->colaborador->telefono }}</td>
            </tr>
            <tr>
                <th>CLASE Y CATEGORÍA</th>
                <td>{{ $detservicio->exapsicosometrica->clase }}</td>
                <th>FECHA</th>
                <td>{{ date('d-m-Y',strtotime($detservicio->exapsicosometrica->fecha)) }}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="cuadroredondeado">
    <div class="letra11 negrita">
        RESULTADO DE EVALUACIÓN
    </div>
    <br>
    <div class="tablasinbordes letra10">
        <table>
            <tbody>
                <tr>
                    <td valign='top' width='32%' class="filacolumnaredondeado">
                        <table>
                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center">TEST DE PUNTEADO</th>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th width='50%' class="lineainferior">ACIERTOS:</th>
                                    <td width='50%' class="text-center lineainferior">{{ $detservicio->exapsicosometrica->tpunt_aciertos }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th class="lineainferior">ERRORES:</th>
                                    <td class="text-center lineainferior">{{ $detservicio->exapsicosometrica->tpunt_errores }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                {{-- <tr><td colspan="2"></td></tr> --}}
                                <tr>
                                    <th colspan="2" class="text-center">
                                        {{ $aprobado[$detservicio->exapsicosometrica->tpunt_aprobado] }}
                                    </th>
                                </tr>
                                <tr><td colspan="2"></td></tr>
                            </tbody>
                        </table>
                    </td>
                    <td width='2%'></td>
                    <td valign='top' width='32%' class="filacolumnaredondeado">
                        <table>
                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center">TEST DE PALANCA</th>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th width='50%' class="lineainferior">PERMANENCIA EN EL ERROR:</th>
                                    <td width='50%' class="text-center lineainferior">{{ $detservicio->exapsicosometrica->tpalan_permanencia }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th class="lineainferior">TIEMPO DE EXAMEN:</th>
                                    <td class="text-center lineainferior">{{ $detservicio->exapsicosometrica->tpalan_tiempo }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th colspan="2" class="text-center">
                                        {{ $aprobado[$detservicio->exapsicosometrica->tpalan_aprobado] }}
                                    </th>
                                </tr>
                                <tr><td colspan="2"></td></tr>
                            </tbody>
                        </table>
                    </td>
                    <td width='2%'></td>
                    <td valign='top' width='32%' class="filacolumnaredondeado">
                        <table>
                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center">TEST DE REACCIÓN</th>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th width='50%' class="lineainferior">INTENTOS:</th>
                                    <td width='50%' class="text-center lineainferior">{{ $detservicio->exapsicosometrica->treac_intentos }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                <tr>
                                    <th class="lineainferior">TIEMPO DE RESPUESTA:</th>
                                    <td class="text-center lineainferior">{{ $detservicio->exapsicosometrica->treac_tiempo }}</td>
                                </tr>
                                <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
                                {{-- <tr><td colspan="2"></td></tr> --}}
                                <tr>
                                    <th colspan="2" class="text-center">
                                        {{ $aprobado[$detservicio->exapsicosometrica->treac_aprobado] }}
                                    </th>
                                </tr>
                                <tr><td colspan="2"></td></tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <tbody>
                <tr>
                    <th width='15%'>OBSERVACIONES:</th>
                    <td width='45%'>{{ $detservicio->exapsicosometrica->observaciones }}</td>
                    <th width='20%'>CONDICIÓN FINAL:</th>
                    <td width='20%'>{{ $aprobado[$detservicio->exapsicosometrica->aprobado] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="cuadroredondeado letra10">
    <div class="tablasinbordes">
        <table>
            <tbody>
                <tr>
                    <th valign='top' width='40%' class="text-center lineaderecha altura200">
                        <div>FIRMA Y SELLO DEL EVALUADOR</div>
                        <br><br>
                        @if (empty($detservicio->exapsicosometrica->doctor_id))
                        <br>
                        @else
                            @if (empty($docfirma[$detservicio->exapsicosometrica->doctor_id]))
                            <br>
                            @else
                            <img src="{{ url('firmas/'.$docfirma[$detservicio->exapsicosometrica->doctor_id]) }}" height="90px" alt=""><br>
                            @endif
                        @endif
                    </th>
                    <th valign='top' width='30%' class="text-center lineaderecha">FIRMA DEL EVALUADO</th>
                    <th valign='top' width='30%' class="text-center">HUELLA DIGITAL</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
