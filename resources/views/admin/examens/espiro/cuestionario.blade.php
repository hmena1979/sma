<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('hora', 'Hora:') !!}
        {!! Form::time('hora', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('covid19', 'Resultado examen Covid-19:') !!}
        <div class="cuadro">
            {!! Form::radio('covid19',1,['class'=>'form-check-input']) !!}
            {!! Form::label('covid19', 'POSITIVO',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('covid19',2,['class'=>'form-check-input']) !!}
            {!! Form::label('covid19', 'NEGATIVO',['class' =>'form-check-label']) !!}
        </div>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        PREGUNTAS PARA TODOS LOS CANDIDATOS A ESPIROMETRIA (RELACIONADAS A CRITERIOS DE EXCLUSION)
    </h5>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tr>
                <td width='90%' class="align-middle">
                    1. ¿Tuvo desprendimiento de la retina o una operación (cirugía) de los ojos, tórax o abdomen, en los últimos 3 meses?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pe01',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe01', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe01',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe01', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    2. ¿Ha tenido algún ataque cardíaco o infarto al corazón en los últimos 3 meses?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pe02',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe02', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe02',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe02', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    3. ¿Ha estado hospitalizado (a) por cualquier otro problema del corazón en los últimos 3 meses?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pe03',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe03', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe03',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe03', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    4. ¿Está usando medicamentos para la tuberculosis, en este momento?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pe04',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe04', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe04',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe04', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    5. En caso de ser mujer: ¿Esta usted embarazada actualmente?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pe05',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe05', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe05',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe05', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row mt-3">
    <h5 class="colorprin ml-2">
        PARA SER LLENADO POR EL PROFESIONAL QUE REALIZA LA PRUEBA
    </h5>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tr>
                <td width='80%' class="align-middle">
                    6. HEMOPTISIS
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe06',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe06', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe06',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe06', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    7. PNEUMOTORAX
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe07',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe07', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe07',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe07', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    8. TRAQUEOSTOMIA
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe08',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe08', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe08',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe08', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    9. SONDA PLEURAL
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe09',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe09', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe09',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe09', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    10. ANEURISMAS CEREBRAL, ABDOMEN, TORAX
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe10',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe10', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe10',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe10', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    11. EMBOLIA PULMONAR
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe11',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe11', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe11',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe11', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tr>
                <td width='80%' class="align-middle">
                    12. INFARTO RECIENTE
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe12',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe12', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe12',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe12', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    13. INESTABILIDAD CV
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe13',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe13', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe13',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe13', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    14. FIEBRE, NAUSEA, VÓMITO
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe14',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe14', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe14',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe14', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    15. EMBARAZO AVANZADO
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe15',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe15', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe15',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe15', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='80%' class="align-middle">
                    16. EMBARAZO COMPLICADO
                </td>
                <td width='20%' class="align-middle">
                    {!! Form::radio('pe16',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe16', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pe16',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pe16', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row mt-3">
    <h5 class="colorprin ml-2">
        PREGUNTAS PARA TODOS LOS ENTREVISTADOS QUE NO TIENEN LOS CRITERIOS DE EXCLUSION Y QUE POR LO TANTO DEBEN HACER LA ESPIROMETRIA.
    </h5>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tr>
                <td width='90%' class="align-middle">
                    1. Tuvo una infección respiratoria (resfriado), en las últimas 3 semanas?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne1',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne1', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne1',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne1', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    2. Tuvo infección en el oído en las ULTIMAS 3 SEMANAS?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne2',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne2', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne2',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne2', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    3. Uso aerosoles (sprays inhalados) o nebulizaciones con broncodilatadores, en las últimas 3 horas?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne3',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne3', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne3',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne3', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    4. ¿Ha usado algún medicamento broncodilatador toma en las últimas 8 horas?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne4',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne4', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne4',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne4', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    5. ¿Fumo (cualquier tipo de cigarro), en las últimas dos horas?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne5',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne5', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne5',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne5', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    6. ¿Realizó algún ejercicio físico fuerte (como gimnasia, caminata o trotar), en la última hora?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne6',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne6', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne6',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne6', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
            <tr>
                <td width='90%' class="align-middle">
                    7. ¿Comió en la última hora?
                </td>
                <td width='10%' class="align-middle">
                    {!! Form::radio('pne7',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne7', 'SI',['class' =>'form-check-label mr-1']) !!}
                    {!! Form::radio('pne7',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('pne7', 'NO',['class' =>'form-check-label']) !!}
                </td>
            </tr>
        </table>
    </div>
</div>
