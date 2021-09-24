<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Antecedentes:
    </h5>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('antpersonal', 'Antecedente Personal:') !!}
        {!! Form::text('antpersonal', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('antfamiliar', 'Antecedente Familiar:') !!}
        {!! Form::text('antfamiliar', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Examen:
    </h5>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th rowspan="2" width="10%" class="align-middle text-center">OJOS</th>
                    <th colspan="2" width="15%" class="align-middle text-center">SIN CORREGIR</th>
                    <th colspan="2" width="15%" class="align-middle text-center">CORREGIDA</th>
                </tr>
                <tr>
                    <th width="7.5%" class="align-middle text-center">OD</th>
                    <th width="7.5%" class="align-middle text-center">OI</th>
                    <th width="7.5%" class="align-middle text-center">OD</th>
                    <th width="7.5%" class="align-middle text-center">OI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="align-middle">VISIÓN DE CERCA</th>
                    <td>
                        {!! Form::text('vc_sc_od', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_sc_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_cc_od', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_cc_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">VISIÓN DE LEJOS</th>
                    <td>
                        {!! Form::text('vl_sc_od', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_sc_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_cc_od', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_cc_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <h5 class="colorprin ml-2">
        BIOMICROSCOPÍA:
    </h5>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('parpados', 'Parpados:') !!}
        {!! Form::text('parpados', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('conjuntivas', 'Conjuntivas:') !!}
        {!! Form::text('conjuntivas', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('cristalino', 'Cristalino:') !!}
        {!! Form::text('cristalino', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th width="20%" class="align-middle text-center"></th>
                    <th width="40%" class="align-middle text-center">OD</th>
                    <th width="40%" class="align-middle text-center">OI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="align-middle">Percepción de colores</th>
                    <td>
                        {!! Form::text('percol_od', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('percol_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Fondo de Ojo</th>
                    <td>
                        {!! Form::text('fondojo_od', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('fondojo_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Estereopsis</th>
                    <td>
                        {!! Form::text('estereopsis_od', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('estereopsis_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Tonometría</th>
                    <td>
                        {!! Form::text('tonometria_od', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('tonometria_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Carpimetría</th>
                    <td>
                        {!! Form::text('campimetria_od', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('campimetria_oi', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Nictometría</th>
                    <td class="align-middle">
                        {!! Form::label('nictometria_od', 'NORMAL',['class' =>'form-check-label mr-4']) !!}
                        {!! Form::radio('nictometria_od',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('nictometria_od', 'SI',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('nictometria_od',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('nictometria_od', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="align-middle">
                        {!! Form::label('nictometria_oi', 'NORMAL',['class' =>'form-check-label mr-4']) !!}
                        {!! Form::radio('nictometria_oi',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('nictometria_oi', 'SI',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('nictometria_oi',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('nictometria_oi', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Deslumbramiento</th>
                    <td class="align-middle">
                        {!! Form::label('deslumbramiento_od', 'NORMAL',['class' =>'form-check-label mr-4']) !!}
                        {!! Form::radio('deslumbramiento_od',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('deslumbramiento_od', 'SI',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('deslumbramiento_od',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('deslumbramiento_od', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="align-middle">
                        {!! Form::label('deslumbramiento_oi', 'NORMAL',['class' =>'form-check-label mr-4']) !!}
                        {!! Form::radio('deslumbramiento_oi',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('deslumbramiento_oi', 'SI',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('deslumbramiento_oi',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('deslumbramiento_oi', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Reac. al Encandilamiento</th>
                    <td colspan="2" class="align-middle">
                        {!! Form::radio('encandilamiento',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('encandilamiento', '< 5 seg.',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('encandilamiento',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('encandilamiento', '< 10 seg.',['class' =>'form-check-label mr-2']) !!}
                        {!! Form::radio('encandilamiento',3,['class'=>'form-check-input']) !!}
                        {!! Form::label('encandilamiento', '< 15 seg.',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
