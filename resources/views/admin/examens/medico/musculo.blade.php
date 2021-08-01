<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>MÚSCULO ESQUELÉTICA:</strong>
    </h5>
</div>
<div class="row mt-2">
    <div class="col-md-6 form-group">
        {!! Form::label('metiempo', 'Tiempo en el Trabajo:') !!}
        {!! Form::text('metiempo', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('meaptitud', 'Aptitud de Espalda:') !!}
        {!! Form::text('meaptitud', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th width="15%"></th>
                    <th width="15%">Excelente: 1</th>
                    <th width="15%">Promedio: 2</th>
                    <th width="15%">Regular: 3</th>
                    <th width="15%">Pobre: 4</th>
                    <th width="5%">Ptos.*</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle text-center"><strong>Flexibilidad / Fuerza ABDOMEN</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_11">
                            <img src="{{ url('/static/images/F1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_12">
                            <img src="{{ url('/static/images/F2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_13">
                            <img src="{{ url('/static/images/F3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_14">
                            <img src="{{ url('/static/images/F4.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h1_1pto', kvfj($detservicio->examedico->mehoja1, 'h1_1pto')==null?0:kvfj($detservicio->examedico->mehoja1, 'h1_1pto'), ['class'=>'form-control numero','id'=>'h1_1pto','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>CADERA</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_21">
                            <img src="{{ url('/static/images/C1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_22">
                            <img src="{{ url('/static/images/C2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_23">
                            <img src="{{ url('/static/images/C3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_24">
                            <img src="{{ url('/static/images/C4.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h1_2pto', kvfj($detservicio->examedico->mehoja1, 'h1_2pto')==null?0:kvfj($detservicio->examedico->mehoja1, 'h1_2pto'), ['class'=>'form-control numero','id'=>'h1_2pto','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>MUSLO</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_31">
                            <img src="{{ url('/static/images/M1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_32">
                            <img src="{{ url('/static/images/M2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_33">
                            <img src="{{ url('/static/images/M3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_34">
                            <img src="{{ url('/static/images/M4.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h1_3pto', kvfj($detservicio->examedico->mehoja1, 'h1_3pto')==null?0:kvfj($detservicio->examedico->mehoja1, 'h1_3pto'), ['class'=>'form-control numero','id'=>'h1_3pto','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>ABDOMEN LATERAL</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_41">
                            <img src="{{ url('/static/images/A1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_42">
                            <img src="{{ url('/static/images/A2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_43">
                            <img src="{{ url('/static/images/A3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h1_44">
                            <img src="{{ url('/static/images/A4.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h1_4pto', kvfj($detservicio->examedico->mehoja1, 'h1_4pto')==null?0:kvfj($detservicio->examedico->mehoja1, 'h1_4pto'), ['class'=>'form-control numero','id'=>'h1_4pto','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="align-middle text-right"><strong>TOTAL</strong></td>
                    <td>
                        {!! Form::text('h1_tpto', kvfj($detservicio->examedico->mehoja1, 'h1_tpto')==null?0:kvfj($detservicio->examedico->mehoja1, 'h1_tpto'), ['class'=>'form-control numero','id'=>'h1_tpto','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>OBSERVACIONES</strong></td>
                    <td colspan="5">
                        {!! Form::text('h1_obs', kvfj($detservicio->examedico->mehoja1, 'h1_obs'), ['class'=>'form-control mayuscula','id'=>'h1_obs','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="align-middle text-center" width="15%">RANGOS ARTICULARES</th>
                    <th class="align-middle text-center" width="15%">Óptimo: 1</th>
                    <th class="align-middle text-center" width="15%">Limitado: 2</th>
                    <th class="align-middle text-center" width="15%">Muy Limitado: 3</th>
                    <th class="align-middle text-center" width="5%">Ptos.*</th>
                    <th class="align-middle text-center" width="15%">Dolor contra resistencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle text-center"><strong>Abducción de hombro<br>(Normal 0° - 180°)
                        </strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_11">
                            <img src="{{ url('/static/images/RAA1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_12">
                            <img src="{{ url('/static/images/RAA2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_13">
                            <img src="{{ url('/static/images/RAA3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h2_1pto', kvfj($detservicio->examedico->mehoja2, 'h2_1pto')==null?0:kvfj($detservicio->examedico->mehoja2, 'h2_1pto'), ['class'=>'form-control numero','id'=>'h2_1pto','autocomplete'=>'off']) !!}
                    </td>
                    <td class="align-middle text-center">
                        <div class="text-center">
                            {!! Form::radio('h2_dcr1',1,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr1')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr1', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('h2_dcr1',2,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr1')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr1', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>Abducción del hombro<br>(0° -80°)</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_21">
                            <img src="{{ url('/static/images/RAB1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_22">
                            <img src="{{ url('/static/images/RAB2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_23">
                            <img src="{{ url('/static/images/RAB3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h2_2pto', kvfj($detservicio->examedico->mehoja2, 'h2_2pto')==null?0:kvfj($detservicio->examedico->mehoja2, 'h2_2pto'), ['class'=>'form-control numero','id'=>'h2_2pto','autocomplete'=>'off']) !!}
                    </td>
                    <td class="align-middle text-center">
                        <div class="text-center">
                            {!! Form::radio('h2_dcr2',1,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr2')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr2', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('h2_dcr2',2,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr2')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr2', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>Rotación externa<br>(0° - 90°)</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_31">
                            <img src="{{ url('/static/images/RAC1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_32">
                            <img src="{{ url('/static/images/RAC2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_33">
                            <img src="{{ url('/static/images/RAC3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h2_3pto', kvfj($detservicio->examedico->mehoja2, 'h2_3pto')==null?0:kvfj($detservicio->examedico->mehoja2, 'h2_3pto'), ['class'=>'form-control numero','id'=>'h2_3pto','autocomplete'=>'off']) !!}
                    </td>
                    <td class="align-middle text-center">
                        <div class="text-center">
                            {!! Form::radio('h2_dcr3',1,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr3')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr3', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('h2_dcr3',2,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr3')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr3', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>Rotación externa de hombro interna</strong></td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_41">
                            <img src="{{ url('/static/images/RAD1.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_42">
                            <img src="{{ url('/static/images/RAD2.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" id="h2_43">
                            <img src="{{ url('/static/images/RAD3.png') }}" alt="">
                        </button>
                    </td>
                    <td class="align-middle text-center">
                        {!! Form::text('h2_4pto', kvfj($detservicio->examedico->mehoja2, 'h2_4pto')==null?0:kvfj($detservicio->examedico->mehoja2, 'h2_4pto'), ['class'=>'form-control numero','id'=>'h2_4pto','autocomplete'=>'off']) !!}
                    </td>
                    <td class="align-middle text-center">
                        <div class="text-center">
                            {!! Form::radio('h2_dcr4',1,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr4')==1?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr4', 'SI',['class' =>'form-check-label mr-4']) !!}
                            {!! Form::radio('h2_dcr4',2,kvfjsn($detservicio->examedico->mehoja2, 'h2_dcr4')==2?'checked':'',['class'=>'form-check-input']) !!}
                            {!! Form::label('h2_dcr4', 'NO',['class' =>'form-check-label mr-4']) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="align-middle text-right"><strong>TOTAL</strong></td>
                    <td>
                        {!! Form::text('h2_tpto', kvfj($detservicio->examedico->mehoja2, 'h2_tpto')==null?0:kvfj($detservicio->examedico->mehoja2, 'h2_tpto'), ['class'=>'form-control numero','id'=>'h2_tpto','autocomplete'=>'off']) !!}
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="align-middle text-center"><strong>OBSERVACIONES</strong></td>
                    <td colspan="5">
                        {!! Form::text('h2_obs', kvfj($detservicio->examedico->mehoja2, 'h2_obs'), ['class'=>'form-control mayuscula','id'=>'h2_obs','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>