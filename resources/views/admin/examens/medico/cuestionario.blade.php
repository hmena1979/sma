<div class="row mt-2">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-7 form-group">
                {!! Form::label('manicarga', 'Manipulación Carga(Kg):') !!}
                {{-- {!! Form::select('manicarga',[1=>'< 25',2=>'25 - 50',3=>'> 50'],null,['class'=>'custom-select']) !!} --}}
                <div class="cuadro">
                    {!! Form::radio('manicarga',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('manicarga', '< 25',['class' =>'form-check-label mr-4']) !!}
                    {!! Form::radio('manicarga',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('manicarga', '25 - 50',['class' =>'form-check-label mr-4']) !!}
                    {!! Form::radio('manicarga',3,['class'=>'form-check-input']) !!}
                    {!! Form::label('manicarga', '> 50',['class' =>'form-check-label']) !!}
                </div>
        
            </div>
            <div class="col-md-5 form-group">
                {!! Form::label('postura', 'Postura Habitual:') !!}
                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                <div class="cuadro">
                    {!! Form::radio('postura',1,['class'=>'form-check-input']) !!}
                    {!! Form::label('postura', 'SENTADO',['class' =>'form-check-label mr-2']) !!}
                    {!! Form::radio('postura',2,['class'=>'form-check-input']) !!}
                    {!! Form::label('postura', 'DE PIE',['class' =>'form-check-label']) !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        {!! Form::label('postura', 'Movimientos Repetitivos:') !!}
        <div class="cuadro">
            <label class="">
                {!! Form::checkbox('mrcabeza', true, kvfj($detservicio->examedico->movrep, 'mrcabeza'),['class' => '']) !!}
                CABEZA
            </label>
            <label class="ml-3">
                {!! Form::checkbox('mrtronco', true, kvfj($detservicio->examedico->movrep, 'mrtronco'),['class' => '']) !!}
                TRONCO
            </label>
            <label class="ml-3">
                {!! Form::checkbox('mrmmss', true, kvfj($detservicio->examedico->movrep, 'mrmmss'),['class' => '']) !!}
                MMSS
            </label>
            <label class="ml-3">
                {!! Form::checkbox('mrmmii', true, kvfj($detservicio->examedico->movrep, 'mrmmii'),['class' => '']) !!}
                MMII
            </label>
        </div>
        
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('pertiempo', 'Periodo Tiempo:') !!}
        {!! Form::text('pertiempo', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Cuestionario de Síntomas
    </h5>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-sm">
            <thead>
                <tr>
                    <th width="16%"></th>
                    <th width="28%">Ha tenido problemas (dolor, aumento de volumen, bultos,etc) en los últimos 12 meses a nivel de:</th>
                    <th width="28%">Durante los últimos doce meses ha estado incapacitado para su trabajo por causas de algún problema, a nivel de:</th>
                    <th width="28%">Ha tenido problemas(dolor, aumento de volumen, bultos, etc) en los últimos 7 dias a nivel de:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong><span class="colorprin">Nuca / Cuello:</span></strong></td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('cnuca1',1,kvfjsn($detservicio->examedico->cuestionario, 'cnuca1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cnuca1',2,kvfjsn($detservicio->examedico->cuestionario, 'cnuca1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('cnuca2',1,kvfjsn($detservicio->examedico->cuestionario, 'cnuca2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cnuca2',2,kvfjsn($detservicio->examedico->cuestionario, 'cnuca2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('cnuca3',1,kvfjsn($detservicio->examedico->cuestionario, 'cnuca3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cnuca3',2,kvfjsn($detservicio->examedico->cuestionario, 'cnuca3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cnuca3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Hombro:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('chombrod1',1,kvfjsn($detservicio->examedico->cuestionario, 'chombrod1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombrod1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('chombrod1',2,kvfjsn($detservicio->examedico->cuestionario, 'chombrod1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombrod1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('chombroi1',1,kvfjsn($detservicio->examedico->cuestionario, 'chombroi1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombroi1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('chombroi1',2,kvfjsn($detservicio->examedico->cuestionario, 'chombroi1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombroi1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('chombro2',1,kvfjsn($detservicio->examedico->cuestionario, 'chombro2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombro2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('chombro2',2,kvfjsn($detservicio->examedico->cuestionario, 'chombro2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombro2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('chombro3',1,kvfjsn($detservicio->examedico->cuestionario, 'chombro3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombro3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('chombro3',2,kvfjsn($detservicio->examedico->cuestionario, 'chombro3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('chombro3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Codos:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('ccodod1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccodod1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodod1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccodod1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccodod1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodod1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('ccodoi1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccodoi1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodoi1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccodoi1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccodoi1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodoi1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ccodo2',1,kvfjsn($detservicio->examedico->cuestionario, 'ccodo2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodo2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccodo2',2,kvfjsn($detservicio->examedico->cuestionario, 'ccodo2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodo2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ccodo3',1,kvfjsn($detservicio->examedico->cuestionario, 'ccodo3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodo3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccodo3',2,kvfjsn($detservicio->examedico->cuestionario, 'ccodo3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccodo3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Muñecas / Manos:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('cmmd1',1,kvfjsn($detservicio->examedico->cuestionario, 'cmmd1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmmd1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cmmd1',2,kvfjsn($detservicio->examedico->cuestionario, 'cmmd1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmmd1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('cmmi1',1,kvfjsn($detservicio->examedico->cuestionario, 'cmmi1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmmi1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cmmi1',2,kvfjsn($detservicio->examedico->cuestionario, 'cmmi1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmmi1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('cmm2',1,kvfjsn($detservicio->examedico->cuestionario, 'cmm2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmm2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cmm2',2,kvfjsn($detservicio->examedico->cuestionario, 'cmm2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmm2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('cmm3',1,kvfjsn($detservicio->examedico->cuestionario, 'cmm3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmm3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('cmm3',2,kvfjsn($detservicio->examedico->cuestionario, 'cmm3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('cmm3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong><span class="colorprin">Columna Dorsal:</span></strong></td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccoldor1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccoldor1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccoldor2',1,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccoldor2',2,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccoldor3',1,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccoldor3',2,kvfjsn($detservicio->examedico->cuestionario, 'ccoldor3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccoldor3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><strong><span class="colorprin">Columna Lumbar:</span></strong></td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccollum1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccollum1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccollum1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccollum1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccollum2',1,kvfjsn($detservicio->examedico->cuestionario, 'ccollum2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccollum2',2,kvfjsn($detservicio->examedico->cuestionario, 'ccollum2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            {!! Form::radio('ccollum3',1,kvfjsn($detservicio->examedico->cuestionario, 'ccollum3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccollum3',2,kvfjsn($detservicio->examedico->cuestionario, 'ccollum3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccollum3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Cadera:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('ccaderad1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccaderad1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccaderad1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccaderad1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccaderad1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccaderad1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('ccaderai1',1,kvfjsn($detservicio->examedico->cuestionario, 'ccaderai1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccaderai1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccaderai1',2,kvfjsn($detservicio->examedico->cuestionario, 'ccaderai1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccaderai1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ccadera2',1,kvfjsn($detservicio->examedico->cuestionario, 'ccadera2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccadera2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccadera2',2,kvfjsn($detservicio->examedico->cuestionario, 'ccadera2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccadera2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ccadera3',1,kvfjsn($detservicio->examedico->cuestionario, 'ccadera3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccadera3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ccadera3',2,kvfjsn($detservicio->examedico->cuestionario, 'ccadera3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ccadera3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Rodillas:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('crodillad1',1,kvfjsn($detservicio->examedico->cuestionario, 'crodillad1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodillad1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('crodillad1',2,kvfjsn($detservicio->examedico->cuestionario, 'crodillad1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodillad1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('crodillai1',1,kvfjsn($detservicio->examedico->cuestionario, 'crodillai1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodillai1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('crodillai1',2,kvfjsn($detservicio->examedico->cuestionario, 'crodillai1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodillai1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('crodilla2',1,kvfjsn($detservicio->examedico->cuestionario, 'crodilla2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodilla2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('crodilla2',2,kvfjsn($detservicio->examedico->cuestionario, 'crodilla2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodilla2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('crodilla3',1,kvfjsn($detservicio->examedico->cuestionario, 'crodilla3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodilla3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('crodilla3',2,kvfjsn($detservicio->examedico->cuestionario, 'crodilla3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('crodilla3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>
                            <span class="colorprin">Tobillos / Pies:</span><br>
                            Derecho<br>
                            Izquierdo
                        </strong>
                    </td>
                    <td>
                        <br>
                        <div class="text-center">
                            {!! Form::radio('ctobillod1',1,kvfjsn($detservicio->examedico->cuestionario, 'ctobillod1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillod1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ctobillod1',2,kvfjsn($detservicio->examedico->cuestionario, 'ctobillod1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillod1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::radio('ctobilloi1',1,kvfjsn($detservicio->examedico->cuestionario, 'ctobilloi1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobilloi1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ctobilloi1',2,kvfjsn($detservicio->examedico->cuestionario, 'ctobilloi1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobilloi1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ctobillo2',1,kvfjsn($detservicio->examedico->cuestionario, 'ctobillo2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillo2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ctobillo2',2,kvfjsn($detservicio->examedico->cuestionario, 'ctobillo2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillo2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                    <td>
                        <div class="text-center">
                            <br>
                            {!! Form::radio('ctobillo3',1,kvfjsn($detservicio->examedico->cuestionario, 'ctobillo3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillo3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('ctobillo3',2,kvfjsn($detservicio->examedico->cuestionario, 'ctobillo3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('ctobillo3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
