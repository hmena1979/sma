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
    <br><br>
    <div class="text-right marco">
        Fecha: {{date('d-m-Y',strtotime($detservicio->servicio->fecha))}}
    </div>
    <br><br>
    <div class="marco text-justify">
        Yo, <strong>{{  $detservicio->colaborador->nombres }}</strong> con 
        <strong>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}}</strong>
        Años de edad, identificado con DNI N° <strong>{{ $detservicio->colaborador->numdoc }}</strong>, 
        domiciliado en <strong>{{ $detservicio->colaborador->domicilio }}</strong> 
        trabajador o postulante de la empresa <strong>{{ $detservicio->servicio->cliente->razsoc }}</strong> 
        Certifico que  he sido informado acerca de la naturaleza, propósito y posibles complicaciones  del  examen médico ocupacional y
        pruebas complementarias, la cual he comprendido claramente ya que todas mis  dudas y preguntas han  sido absueltas;
        por lo cual, autorizo  se  me realice el examen  médico  ocupacional  y  todos  los estudios  requeridos  de acuerdo con el
        programa de vigilancia de salud ocupacionai y en conformidad de las normas vigentes.
        <br>
        Hago de conocimiento y firmo este documento sin presión alguna y por propia voluntad. Quedando en conformidad de lo 
        anterior descrito firmo a continuación.
        <br><br><br>
        <table class="tablasbordes">
            <tbody>
                <tr>
                    <td width="80%">
                        
                    </td>
                    <td width="20%" class="text-center">
                        
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="cuadrosborde">
            <thead>
                <tr>
                    <td width="80%" class="text-left">
                        Firma del trabajador:   .....................................<br><br>
                        DNI del trabajador:   {{ $detservicio->colaborador->numdoc }}<br><br>
                        NOTA: Si el paciente no puede firmar (Describir motivos)<br><br>
                        ...................................................................................................
                    </td>
                    <td width="20%" class="">
                        <div>
                            <div class="huella"></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huella
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
    </div>
</div>