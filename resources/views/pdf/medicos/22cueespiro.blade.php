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
    CUESTIONARIO DE ESPIROMETRÍA
</div>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th width='15%'>REGISTRO Nº:</th>
            <td width='65%'>{{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT)}}</td>
            <th width='10%'>FECHA: </th>
            <td width='10%'>{{ date('d-m-Y',strtotime($detservicio->exaespiro->fecha)) }}</td>
        </tr>
        <tr>
            <th>NOMBRE:</th>
            <td colspan="3">{{ $detservicio->colaborador->nombres }}</td>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr> {{ $detservicio->colaborador->fecnac }}
            <th width='25%'>FECHA DE NACIMIENTO:</th>
            <td width='20%'>{{ date('d-m-Y',strtotime($detservicio->colaborador->fecnac)) }}</td>
            <th width='7%'>EDAD:</th>
            <td width='28%'>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</td>
            <th width='10%'>SEXO:</th>
            <td width='10%'>{{ $detservicio->colaborador->sexo->nombre }}</td>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th>PREGUNTAS PARA TODOS LOS CANDIDATOS A ESPIROMETRÍA</th>
        </tr>
        <tr>
            <td>(RELACIONADAS A CRITERIOS DE EXCLUSIÓN)</td>
        </tr>
    </tbody>
</table>
<table class="cuadrosborde letra9 espaciado">
    <tbody>
        <tr>
            <td width='2%' valign='top'>1.</td>
            <td width='76%'>Tuvo desprendimiento de la retina o una operación (cirugía) de los ojos, tórax o abdomen, en los últimos 3 meses?</td>
            <td width='3%'></td>
            <th width='3%'>SI</th>
            <td width='5%' class="celda">{{ $detservicio->exaespiro->pe01==1?'X':'' }}</td>
            <td width='3%'></td>
            <th width='3%'>NO</th>
            <td width='5%' class="celda">{{ $detservicio->exaespiro->pe01==2?'X':'' }}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>¿Ha tenido algún ataque cardíaco o infarto al corazón en los últimos 3 meses?.</td>
            <td></td>
            <th>SI</th>
            <td class="celda">{{ $detservicio->exaespiro->pe02==1?'X':'' }}</td>
            <td></td>
            <th>NO</th>
            <td class="celda">{{ $detservicio->exaespiro->pe02==2?'X':'' }}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>¿Ha estado hospitalizado (a) por cualquier otro problema del corazón en los últimos 3 meses?.</td>
            <td></td>
            <th>SI</th>
            <td class="celda">{{ $detservicio->exaespiro->pe03==1?'X':'' }}</td>
            <td></td>
            <th>NO</th>
            <td class="celda">{{ $detservicio->exaespiro->pe03==2?'X':'' }}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>¿Está usando medicamentos para la tuberculosis, en este momento?.</td>
            <td></td>
            <th>SI</th>
            <td class="celda">{{ $detservicio->exaespiro->pe04==1?'X':'' }}</td>
            <td></td>
            <th>NO</th>
            <td class="celda">{{ $detservicio->exaespiro->pe04==2?'X':'' }}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>En caso de ser mujer: ¿Esta usted embarazada actualmente?</td>
            <td></td>
            <th>SI</th>
            <td class="celda">{{ $detservicio->exaespiro->pe05==1?'X':'' }}</td>
            <td></td>
            <th>NO</th>
            <td class="celda">{{ $detservicio->exaespiro->pe05==2?'X':'' }}</td>
        </tr>
    </tbody>
</table>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th>PARA SER LLENADO POR EL PROFESIONAL QUE REALIZA LA PRUEBA</th>
        </tr>
    </tbody>
</table>
<div class="detalleocupacional espaciado">
    <table>
        <tbody>
            <tr>
                <td width='40%'>6. HEMOPTISIS</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pe07==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pe06==2?'X':'' }}</td>
                <td width='28%'>12. INFARTO RECIENTE</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pe12==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pe12==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>7. PNEUMOTORAX</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe07==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe07==2?'X':'' }}</td>
                <td>13. INESTABILIDAD CV</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe13==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe13==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>8. TRAQUEOSTOMIA</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe08==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe08==2?'X':'' }}</td>
                <td>14. FIEBRE, NAUSEA, VOMITO</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe14==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe14==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>9. SONDA PLEURAL</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe09==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe09==2?'X':'' }}</td>
                <td>15. EMBARAZO AVANZADO</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe15==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe15==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>10. ANEURISMAS CEREBRAL, ABDOMEN, TORAX</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe10==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe10==2?'X':'' }}</td>
                <td>16. EMBARAZO COMPLICADO.</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe16==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe16==2?'X':'' }}</td>
            </tr>
            <tr>
                <td>11. EMBOLIA PULMONAR</td>
                <th class="text-center">SI</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe11==1?'X':'' }}</td>
                <th class="text-center">NO</th>
                <td class="text-center">{{ $detservicio->exaespiro->pe11==2?'X':'' }}</td>
                <td></td>
                <th class="text-center"></th>
                <td class="text-center"></td>
                <th class="text-center"></th>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<table class="cuadrosborde letra9 text-left">
    <tbody>
        <tr>
            <th>PREGUNTAS PARA TODOS LOS ENTREVISTADOS QUE NO TIENEN LOS CRITERIOS DE EXCLUSION Y QUE POR LO TANTO DEBEN HACER LA ESPIROMETRÍA.</th>
        </tr>
    </tbody>
</table>
<div class="detalleocupacional espaciado">
    <table>
        <tbody>
            <tr>
                <td width='74%'>1. Tuvo una infección respiratoria (resfriado), en las últimas 3 semanas?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne1==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne1==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>2. Tuvo infección en el oído en las ULTIMAS 3 SEMANAS?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne2==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne2==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>3. Uso aerosoles (sprays inhalados) o nebulizaciones con broncodilatadores, en las últimas 3 horas?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne3==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne3==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>4. ¿Ha usado algún medicamento broncodilatador toma en las últimas 8 horas?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne4==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne4==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>5. ¿Fumo (cualquier tipo de cigarro), en las últimas dos horas?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne5==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne5==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>6. ¿Realizó algún ejercicio físico fuerte (como gimnasia, caminata o trotar), en la última hora?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne6==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne6==2?'X':'' }}</td>                
            </tr>
            <tr>
                <td width='74%'>7. ¿Comió en la última hora?</td>
                <th width='4%' class="text-center">SI</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne7==1?'X':'' }}</td>
                <th width='4%' class="text-center">NO</th>
                <td width='4%' class="text-center">{{ $detservicio->exaespiro->pne7==2?'X':'' }}</td>                
            </tr>
        </tbody>
    </table>
</div>