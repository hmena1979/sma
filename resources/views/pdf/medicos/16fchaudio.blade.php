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
    FICHA AUDIOLÓGICA
</div>
<br>
<div class="detalleocupacional">
    <table>
        <tbody>
            <tr>
                <th colspan="5" class="text-center">CUESTIONARIO DE AUDIOMETRIA</th>
            </tr>
            <tr>
                <th width='20%'>HISTORIA CLÍNICA</th>
                <td width='10%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='20%'>FICHA AUDIOLÓGICA</th>
                <td width='20%'>{{ str_pad($detservicio->exaaudio->id, 5, '0', STR_PAD_LEFT) }}</td>
                <th width='30%' class="text-center">AUDIOMETRO</th>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='20%'>FECHA DE EXAMEN</th>
                <td width='10%'>{{date('d-m-Y',strtotime($detservicio->exaaudio->fecha))}}</td>
                <th width='9%' rowspan="2">EXAMEN</th>
                <td width='17%'>PREOCUPACIONAL</td>
                <td width='3%'>{{ $detservicio->servicio->evaluacion==1?'X':'' }}</td>
                <td width='8%'>RETIRO</td>
                <td width='3%'>{{ $detservicio->servicio->evaluacion==3?'X':'' }}</td>
                <th width='13%'>MARCA</th>
                <td width='17%'>{{ $sede->aud_marca }}</td>
            </tr>
            <tr>
                <th>HORA DE EXAMEN</th>
                <td>{{ $detservicio->exaaudio->hora }}</td>
                <td>PERIODICO</td>
                <td>{{ $detservicio->servicio->evaluacion==2?'X':'' }}</td>
                <td>OTROS</td>
                <td>{{ $detservicio->servicio->evaluacion==4?'X':'' }}</td>
                <th>MODELO</th>
                <td>{{ $sede->aud_modelo}}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='25%'>APELLIDOS Y NOMBRES</th>
                <td width='45%'>{{ $detservicio->colaborador->nombres }}</td>
                <th width='13%'>CALIBRACIÓN</th>
                <td width='17%'>{{ $sede->aud_calibra }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='8%'>EDAD</th>
                <td width='5%'>{{ \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age }}</td>
                <th width='6%'>SEXO</th>
                <td width='12%'>{{ $detservicio->colaborador->sexo->nombre }}</td>
                <th width='10%'>EMPRESA</th>
                <td width='59%'>{{ $detservicio->servicio->cliente->razsoc }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="13%">OCUPACIÓN</th>
                <td width="25%">{{ $detservicio->puesto->nombre }}</td>
                <th width="18%">TIEMPO LABORADO</th>
                <td width="10%">{{ $detservicio->tielabor }}</td>
                <th width="26%">TIEMPO DE EXPOSICIÓN(h/d)</th>
                <td width="8%">{{ $detservicio->exaaudio->tie_expo }} HRS</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width="13%">USO EPP</th>
                <td width="5%">{{ $detservicio->exaaudio->epp==1?'SI':'NO' }}</td>
                <th width="22%">APRECIACIÓN DE RUIDO</th>
                <td width="17%">MUY INTENSO</td>
                <td width="3%">{{ $detservicio->exaaudio->apre_ruido==1?'X':'' }}</td>
                <td width="17%">MODERADO</td>
                <td width="3%">{{ $detservicio->exaaudio->apre_ruido==2?'X':'' }}</td>
                <td width="17%">NO MOLESTO</td>
                <td width="3%">{{ $detservicio->exaaudio->apre_ruido==3?'X':'' }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='30%'>ANTECEDENTES</th>
                <th width='3%' class="text-center">SI</th>
                <th width='3%' class="text-center">NO</th>
                <th width='64%'>SI SU RESPUESTA ES SI FAVOR ESPECIFIQUE</th>
            </tr>
            <tr>
                <td>Consumo de tabaco</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->tabaco) && $detservicio->exaaudio->tabaco <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->tabaco) || $detservicio->exaaudio->tabaco == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->tabaco <> 'NO'?$detservicio->exaaudio->tabaco:'' }}</td>
            </tr>
            <tr>
                <td>Servicio Militar</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->sermil) && $detservicio->exaaudio->sermil <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->sermil) || $detservicio->exaaudio->sermil == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->sermil <> 'NO'?$detservicio->exaaudio->sermil:''}}</td>
            </tr>
            <tr>
                <td>Hobbies con exposición a ruido</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->hobbies) && $detservicio->exaaudio->hobbies <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->hobbies) || $detservicio->exaaudio->hobbies == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->hobbies <> 'NO'?$detservicio->exaaudio->hobbies:'' }}</td>
            </tr>
            <tr>
                <td>Exposición laboral a químicos</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->expoquimico) && $detservicio->exaaudio->expoquimico <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->expoquimico) || $detservicio->exaaudio->expoquimico == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->expoquimico <> 'NO'?$detservicio->exaaudio->expoquimico:''}}</td>
            </tr>
            <tr>
                <td>Infección al oído</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->infecoido) && $detservicio->exaaudio->infecoido <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->infecoido) || $detservicio->exaaudio->infecoido == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->infecoido <> 'NO'?$detservicio->exaaudio->infecoido:'' }}</td>
            </tr>
            <tr>
                <td>Uso de ototóxicos</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->ototoxico) && $detservicio->exaaudio->ototoxico <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->ototoxico) || $detservicio->exaaudio->ototoxico == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->ototoxico <> 'NO'?$detservicio->exaaudio->ototoxico:'' }}</td>
            </tr>
            <tr>
                <td>Asiste a discotecas</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->discoteca) && $detservicio->exaaudio->discoteca <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->discoteca) || $detservicio->exaaudio->discoteca == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->discoteca <> 'NO'?$detservicio->exaaudio->discoteca:'' }}</td>
            </tr>
            <tr>
                <td>Dispositivos musicales con audífonos</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->audifono) && $detservicio->exaaudio->audifono <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->audifono) || $detservicio->exaaudio->audifono == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->audifono <> 'NO'?$detservicio->exaaudio->audifono:'' }}</td>
            </tr>
            <tr>
                <td>Deporte de caza con arma de fuego</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->arma) && $detservicio->exaaudio->arma <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->arma) || $detservicio->exaaudio->arma == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->arma <> 'NO'?$detservicio->exaaudio->arma:'' }}</td>
            </tr>
            <tr>
                <td>Deporte aéreo</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->deporte) && $detservicio->exaaudio->deporte <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->deporte) || $detservicio->exaaudio->deporte == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->deporte <> 'NO'?$detservicio->exaaudio->deporte:'' }}</td>
            </tr>
            <tr>
                <td>Deporte Submarino</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->submarino) && $detservicio->exaaudio->submarino <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->submarino) || $detservicio->exaaudio->submarino == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->submarino <> 'NO'?$detservicio->exaaudio->submarino:'' }}</td>
            </tr>
            <tr>
                <td>TEC</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->tec) && $detservicio->exaaudio->tec <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->tec) || $detservicio->exaaudio->tec == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->tec <> 'NO'?$detservicio->exaaudio->tec:'' }}</td>
            </tr>
            <tr>
                <td>Meningitis</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->meningitis) && $detservicio->exaaudio->meningitis <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->meningitis) || $detservicio->exaaudio->meningitis == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->meningitis <> 'NO'?$detservicio->exaaudio->meningitis:'' }}</td>
            </tr>
            <tr>
                <td>Parotiditis</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->parotiditis) && $detservicio->exaaudio->parotiditis <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->parotiditis) || $detservicio->exaaudio->parotiditis == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->parotiditis <> 'NO'?$detservicio->exaaudio->parotiditis:'' }}</td>
            </tr>
            <tr>
                <td>Sarampión</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->sarampion) && $detservicio->exaaudio->sarampion <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->sarampion) || $detservicio->exaaudio->sarampion == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->sarampion <> 'NO'?$detservicio->exaaudio->sarampion:'' }}</td>
            </tr>
            <tr>
                <td>Otros</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->otros) && $detservicio->exaaudio->otros <> 'NO'?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->otros) || $detservicio->exaaudio->otros == 'NO'?'X':'' }}</td>
                <td>{{ $detservicio->exaaudio->otros <> 'NO'?$detservicio->exaaudio->otros:'' }}</td>
            </tr>
            <tr><td colspan="4"></td></tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th width='40%' class="text-center">SINTOMAS</th>
                <th width='5%' class="text-center">SI</th>
                <th width='5%' class="text-center">NO</th>
                <th width='40%' class="text-center">SINTOMAS</th>
                <th width='5%' class="text-center">SI</th>
                <th width='5%' class="text-center">NO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Disminución de la audición</td>
                <td class="text-center">{{ $detservicio->exaaudio->disminucion==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->disminucion==2?'X':'' }}</td>
                <td>Vértigos</td>
                <td class="text-center">{{ $detservicio->exaaudio->vertigos==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->vertigos==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Otalgia</td>
                <td class="text-center">{{ $detservicio->exaaudio->otalgia==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->otalgia==2?'X':'' }}</td>
                <td>Infección al oido</td>
                <td class="text-center">{{ $detservicio->exaaudio->infeccion==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->infeccion==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>Acúfenos</td>
                <td class="text-center">{{ $detservicio->exaaudio->acufenos==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->acufenos==2?'X':'' }}</td>
                <td>Otros{{ !empty($detservicio->exaaudio->otrsintomas)?' ('.$detservicio->exaaudio->otrsintomas.')':'' }}</td>
                <td class="text-center">{{ !empty($detservicio->exaaudio->otrsintomas)?'X':'' }}</td>
                <td class="text-center">{{ empty($detservicio->exaaudio->otrsintomas)?'X':'' }}</td>
            </tr>
            <tr>
                <td>Mareos</td>
                <td class="text-center">{{ $detservicio->exaaudio->mareos==1?'X':'' }}</td>
                <td class="text-center">{{ $detservicio->exaaudio->mareos==2?'X':'' }}</td>
                <td colspan="3"></td>
            </tr>
            <tr><td colspan="6"></td></tr>
            <tr>
                <th colspan="6" class="text-center">EXAMEN OTOSCOPICO</th>
            </tr>
            
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th width='15%' class="audotoscopico ">OIDO DERECHO</th>
                <td valign='top' width='85%' class="espaciado">{{ $detservicio->exaaudio->oidoder }}</td>
            </tr>
            <tr>
                <th width='15%' class="audotoscopico ">OIDO IZQUIERDO</th>
                <td valign='top' width='85%' class="espaciado">{{ $detservicio->exaaudio->oidoizq }}</td>
            </tr>
            <tr><td colspan="2"></td></tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td width='55%' class="aptitudfirma text-center">
                    @if (empty($detservicio->exaaudio->doctor_id))
                    {!! htmlspecialchars_decode("&nbsp;") !!}
                    @else
                    {{ $detservicio->exaaudio->doctor->nombre }}
                    @endif
                </td>
                <td width='45%' class="text-center">
                    @if (empty($detservicio->exaaudio->doctor_id))
                    <br>
                    @else
                        @if (empty($detservicio->exaaudio->doctor->firma))
                        <br>
                        @else
                        <img src="{{ url('firmas/'.$detservicio->exaaudio->doctor->firma) }}" width="180px" height="100px" alt=""><br>
                        @endif
                    @endif
                </td>
            </tr>
            <tr>
                <td class="text-center">APELLIDOS Y NOMBRES DEL PERSONAL QUE REALIZÓ LA FICHA AUDIOLÓGICA Y EL AUDIOGRAMA</td>
                <th class="text-center">FIRMA Y SELLO</th>
            </tr>
        </tbody>
    </table>
</div>
<div class="text-center letra9 negrita">
    Este documento es considerado como una declaración jurada, la información que Usted proporcione debe ser veraz
</div>