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
    EVALUACIÓN DERMATOLÓGICA
</div>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <td width='78%'></td>
            <th width='22%' class="celda text-center">N° Historia: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</th>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th width='24%'>Apellidos y Nombres:</th>
            <td width='54%'>{{ $detservicio->colaborador->nombres }}</td>
            <th width='10%'>Fecha:</th>
            <td width='12%'>{{ date('d-m-Y',strtotime($detservicio->exaderma->fecha)) }}</td>
        </tr>
        <tr>
            <th>Número de Documento:</th>
            <td>{{ $detservicio->colaborador->numdoc }}</td>
            <th>Sexo:</th>
            <td>{{ $detservicio->colaborador->sexo->nombre }}</td>
        </tr>
        <tr>
            <th>Empresa:</th>
            <td colspan="3">{{ $detservicio->servicio->cliente->razsoc }}</td>
        </tr>
    </tbody>
</table>
<br>
<div class="letra10 negrita">
    TIPO DE EVALUACIÓN
</div>
<table class="cuadrosborde letra9">
    <tbody>
        <tr>
            <th width='17%'>Pre-Ocupacional</th>
            <td width='5%'>
                <div class="celda text-center">
                    @if ($detservicio->servicio->evaluacion==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='5%'></td>
            <th width='12%'>Ocupacional</th>
            <td width='5%'>
                <div class="celda text-center">
                    @if ($detservicio->servicio->evaluacion==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='5%'></td>
            <th width='18%'>Post-Ocupacional</th>
            <td width='5%'>
                <div class="celda text-center">
                    @if ($detservicio->servicio->evaluacion==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='5%'></td>
            <th width='5%'>Otro</th>
            <td width='5%'>
                <div class="celda text-center">
                    @if ($detservicio->servicio->evaluacion==4)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='13%'></td>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th>I. EXAMEN GENERAL</th>
        </tr>
        <tr>
            <th>I.1 Piel y anexos:</th>
        </tr>
        <tr>
            <th>A) Elasticidad de la piel:</th>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9">
    <tbody>
        <tr>
            <td width='3%'></td>
            <th width='10%'>Conservada</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->elasticidad==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>Patológico</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->elasticidad==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <td width='63%' class="punteado">{{ $detservicio->exaderma->elasticidadp }}</td>
        </tr>
        <tr>
            <th colspan="8" class="text-left">B) Textura:</th>
        </tr>
        <tr>
            <td></td>
            <th>Conservada</th>
            <td>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->textura==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <th>Patológico</th>
            <td>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->textura==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <td class="punteado">{{ $detservicio->exaderma->texturap }}</td>
        </tr>
        <tr>
            <th colspan="8" class="text-left">C) Dolor a la palpación digital:</th>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <td width='3%'></td>
            <th width='13%'>No hay dolor</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->dolor==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='18%'>Leve</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->dolor==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='19%'>Moderado</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->dolor==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='8%'>Severo</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->dolor==4)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='13%'></td>
        </tr>


        <tr>
            <th colspan="13">D) Coloración:</th>
        </tr>
        <tr>
            <td></td>
            <th>Conservada</th>
            <td>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->coloracion==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <th>Hipopigmentación</th>
            <td>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->coloracion==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <th>Hiperpigmentación</th>
            <td>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->coloracion==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td></td>
            <th class="text-right">Otros: </th>
            <td colspan="11" class="punteado">{{ $detservicio->exaderma->coloracionotr }}</td>
        </tr>
        <tr>
            <th colspan="13">E) Cicatrices:</th>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <td width='3%'></td>
            <th width='13%'>No Existen</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->cicatrices==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMII</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->cicatrices==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMSS</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->cicatrices==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='8%'>Otras:</th>
            <td width='34%' class="punteado">{{ $detservicio->exaderma->cicatricesotr }}</td>
        </tr>
        <tr>
            <td></td>
            <th>Tatuajes:{!! htmlspecialchars_decode("&nbsp;") !!}SI</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->tatuajes==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <th>NO</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->tatuajes==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td></td>
            <th>Describir:</th>
            <td colspan="4" class="punteado">{{ $detservicio->exaderma->tatuajesd }}</td>
        </tr>
        <tr>
            <th colspan="9">F) Tumoraciones:</th>
        </tr>
        <tr>
            <td width='3%'></td>
            <th width='13%'>No Existen</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->tumor==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMII</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->tumor==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMSS</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->tumor==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='8%'>Otras:</th>
            <td width='34%' class="punteado">{{ $detservicio->exaderma->tumorotr }}</td>
        </tr>
        <tr>
            <td colspan="9"></td>
        </tr>
        <tr>
            <th colspan="9">I.2. Tejido celular y Subcutáneo</th>
        </tr>
        <tr>
            <th colspan="9">A) Edema</th>
        </tr>
        <tr>
            <td width='3%'></td>
            <th width='13%'>No Existen</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->edema==1)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMII</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->edema==2)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='10%'>En MMSS</th>
            <td width='5%'>
                <div class="celdachica text-center">
                    @if ($detservicio->exaderma->edema==3)
                        X
                    @else
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @endif
                </div>
            </td>
            <td width='2%'></td>
            <th width='8%'>Otras:</th>
            <td width='34%' class="punteado">{{ $detservicio->exaderma->edemaotr }}</td>
        </tr>
        <tr>
            <th colspan="9">II. MANIOBRA DE NIKOLSKI</th>
        </tr>
    </tbody>
</table>
<div class="fondofirma">
    <table class="cuadrosborde letra9 text-left">
        <tbody>
            <tr>
                <td width='3%'></td>
                <th width='13%'>Positivo</th>
                <td width='5%'>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->nikolski==1)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td width='2%'></td>
                <th width='10%'>Negativo</th>
                <td width='5%'>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->nikolski==2)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td width='2%'></td>
                <th width='10%'></th>
                <td width='5%'></td>
                <td width='45%'></td>
            </tr>
            <tr>
                <th colspan="10">III. LUZ DE WOOD</th>
            </tr>
            <tr>
                <td></td>
                <th>Positivo</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->wood==1)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
                <th>Negativo</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->wood==2)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
                <th>No Aplica</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->wood==3)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <th colspan="10">IV. EXAMEN DIRECTO DE DERMATOFITOS</th>
            </tr>
            <tr>
                <td></td>
                <th>Positivo</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->dermatofitos==1)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
                <th>Negativo</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->dermatofitos==2)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
                <th>No Aplica</th>
                <td>
                    <div class="celdachica text-center">
                        @if ($detservicio->exaderma->dermatofitos==3)
                            X
                        @else
                        {!! htmlspecialchars_decode("&nbsp;") !!}
                        @endif
                    </div>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="10">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th colspan="2">CONCLUSIÓN:</th>
                <td colspan="8">{{ $detservicio->exaderma->conclusion }}</td>
            </tr>
            <tr><td colspan="2">{!! htmlspecialchars_decode("&nbsp;") !!}</td></tr>
            <tr>
                <th colspan="2">RECOMENDACIÓN:</th>
                <td colspan="8">{{ $detservicio->exaderma->recomendaciones }}</td>
            </tr>
        </tbody>
    </table>
    <div class="firmapsico">
        @if (empty($detservicio->exaderma->doctor_id))
        <br>
        @else
            @if (empty($detservicio->exaderma->doctor->firma))
            <br>
            @else
            <img src="{{ url('firmas/'.$detservicio->exaderma->doctor->firma) }}" width="180px" height="100px" alt=""><br>
            @endif
        @endif
    </div>
</div>