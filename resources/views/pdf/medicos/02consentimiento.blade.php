<table class="">
    <thead>
        <tr>
            <td width="30%" class="text-left lchicas">
                {{ $param->razsoc }}
            </td>
            <td width="70%" class="text-right">
                COLABORADOR: <strong>{{ $detservicio->colaborador->nombres }}</strong>
            </td>
        </tr>
    </thead>
</table>
<div class="cuadro">
    <table class="tablacbordes">
        <tr>
            <td width="20%" class="text-center">
                <img src="{{ url('/static/images/logo.jpg') }}" width="100px" alt="">
            </td>
            <td width="60%" class="text-center">
                <strong>
                    CONSENTIMIENTO INFORMADO O AUTORIZADO PARA REALIZAR EL EXAMEN MÉDICO OCUPACIONAL
                </strong>
            </td>
            <td width="20%" class="">
                CÓDIGO: {{ str_pad($detservicio->id, 5, '0', STR_PAD_LEFT) }}
            </td>
        </tr>
    </table>
    <br>
    <div class="marcoestrecho text-justify letra10">
        Yo, <strong>{{  $detservicio->colaborador->nombres }}</strong>  
        con DNI N° <strong>{{ $detservicio->colaborador->numdoc }}</strong>, 
        De nacionalidad <strong>{{ $detservicio->colaborador->nacionalidad }}</strong>, 
        consciente de mis actos, bajo absoluta responsabilidad propia, declaro lo siguiente:<br>
        Autorizo se me realice el examen médico ocupacionai (pre ocupacionai, anual, retiro u otro requerido) y todos los 
        estudios requeridos de acuerdo con el programa de vigilancia de salud ocupacional y en conformidad a las normas vigentes.
        <br><br>
        1.- Autorizo se me extraiga una muestra de sangre para análisis de: Glicemia, Hemoglobina, Prueba de RPR 
        (descarte de sífilis), Grupo sanguíneo y factor (pre ocupacionai), Colesterol fracciones, Triglicéridos y otros de 
        acuerdo a consideración del médico ocupacionai y las enfermedades que padezco.<br>
        Por lo cual se le informa que la venopunción para toma de muesta sanguínea puede presentar algunas 
        complicaciones como sincope o desmayo, perforación de la vena con producción de hematoma a nivel local, 
        personas con problemas de coagulación pueden presentar hemorragia y en caso de repetidas punciones pueden 
        producirse trombos en el interior de un vaso sanguíneo o incluso flebitis o infecciones de las venas punzadas.<br>
        2.- Autorizo se me analice la muestra de orina para el examen microscópico y sedimento urinario, que entregare en el laboratorio.<br>
        {{-- 3.- Autorizo se me realice la prueba de espirometría la cual le puede producir un sincope o desmayo, sensación de 
        mareo o incluso la pérdida de conocimiento, broncoespasmo, dolor de pecho, dolor de cabeza por aumento de la 
        presión intracraneal, neumotorax y accesos persistentes de tos.<br> --}}
        3.- Autorizo se me realice una audiometría, ecografía abdominal y en caso de mayores de 40 años 
        electrocardiograma y en mayores de 50 años ecografía prostética los cuales son procedimientos no invasivos que 
        pueden tener efectos adversos de menor consideración.<br>
        4.- Autorizo se me tome una radiografía posteroanterior de tórax lo que implica exposición a rayos x en una dosis baja.<br>
        5.-Autorizo se me realice prueba de esfuerzo, si es necesario de acuerdo al protocolo médico y a las enfermedades 
        que padezco, y se le informa que durante la prueba de esfuerzo puede sufrir: Sincope o desmayo, mareos, fatiga 
        severa con malestar, dolor muscular, traumatismo o caídas, infarto agudo de miocardio, arritmias cardiacas 
        accidentes cerebro vascular agudo, edema agudo de pulmón e incluso la muerte.<br>
        6.-Autorizo se me realice el  examen clínico por el médico ocupacionai así como el examen oftalmológico y dental 
        por los correspondientes facultativos.<br>
        7.- La firma de este documento es voluntaria, Ud. Tiene la opción de negarse al examen médico ocupacional, lo 
        cual trae como consecuencia que el servicio médico de su empresa desconozca su estado de salud actual, por lo 
        que cualquier enfermedad ocupacional que Ud. Padezca puede complicarse o incluso poner en riesgo su vida. Sise 
        trata de un examen pre ocupacional no se podrá emitir la aptitud médica ya que no sabemos los riesgos a los que 
        podemos exponerlo. Por tanto, en caso de negarse exonero la responsabilidad al servicio médico de la empresa y 
        a la empresa en donde laboro de las consecuencias derivadas es mi decisión.<br><br>
        He comprendido el propósito del examen médico ocupacionai. Los riesgos comprometidos y la posibilidad de 
        complicaciones me han sido totalmente explicadas. Soy consciente de los beneficios para mi salud, en fe de lo cual 
        manifiesto mi disposición a colaborar y en señal de aceptación de lo anteriormente expuesto lo suscribo en Plura el<br><br>
        Dia {{ substr($detservicio->servicio->fecha,8,2) }} del mes {{ $meses[substr($detservicio->servicio->fecha,5,2)] }} de {{ substr($detservicio->servicio->fecha,0,4) }}
        <table class="cuadrosborde">
            <thead>
                <tr>
                    <td width="80%" class="text-center">
                        .....................................<br>
                        Firma del Paciente
                    </td>
                    <td width="20%" class="">
                        <div>
                            <div class="huella"></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huella
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
        <br><br>
        {{-- <div class="pie">
            {{ $sede->direccion}}<br>
            Telef. {{ $sede->telefono}} Cel: {{ $sede->celular}}<br>
            www.centrosalud-sma.com / admision@centrosalud-sma.com<br>
            marmerimo@hotmail.com
        </div> --}}
    </div>
</div>