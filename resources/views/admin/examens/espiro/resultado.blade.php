<div class="row mt-3">
    <div class="col-md-3 form-group">
        {!! Form::label('etnico', 'Origen Étnico:') !!}
        <div class="cuadro">
            {!! Form::radio('etnico',1,['class'=>'form-check-input']) !!}
            {!! Form::label('etnico', 'Caucásico',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('etnico',2,['class'=>'form-check-input']) !!}
            {!! Form::label('etnico', 'No Caucásico',['class' =>'form-check-label mr-4']) !!}
        </div>
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('fumador', 'Fumador:') !!}
        <div class="cuadro">
            {!! Form::radio('fumador',1,['class'=>'form-check-input']) !!}
            {!! Form::label('fumador', 'Si',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('fumador',2,['class'=>'form-check-input']) !!}
            {!! Form::label('fumador', 'No',['class' =>'form-check-label mr-4']) !!}
        </div>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        VALORES OBSERVADOS DE ESPIROMETRÍA
    </h5>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed table-bordered table-sm">
            <thead>
                <tr>
                    <th width="10%"></th>
                    <th width="10%">% Pred</th>
                    <th width="80%">Edad Pulmonar Estimada</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="align-middle">FVC</th>
                    <td>
                        {!! Form::text('fvc_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('fvc_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">FEV1</th>
                    <td>
                        {!! Form::text('fev1_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('fev1_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">PEF</th>
                    <td>
                        {!! Form::text('pef_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('pef_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">FER</th>
                    <td>
                        {!! Form::text('fer_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('fer_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">F25</th>
                    <td>
                        {!! Form::text('f25_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('f25_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">F50</th>
                    <td>
                        {!! Form::text('f50_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('f50_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">MEF</th>
                    <td>
                        {!! Form::text('mef_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('mef_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">R50</th>
                    <td>
                        {!! Form::text('r50_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('r50_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">MVV(IND)</th>
                    <td>
                        {!! Form::text('mvv_pred', null, ['class'=>'form-control decimal','maxlength'=>'6','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('mvv_edad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('res_espiro', 'RESULTADO DE ESPIROMETRÍA:') !!}
        <div class="cuadro">
            {!! Form::radio('res_espiro',1,['class'=>'form-check-input']) !!}
            {!! Form::label('res_espiro', 'Normal',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('res_espiro',2,['class'=>'form-check-input']) !!}
            {!! Form::label('res_espiro', 'Síndrome Restrictivo',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('res_espiro',3,['class'=>'form-check-input']) !!}
            {!! Form::label('res_espiro', 'Síndrome Obstructivo',['class' =>'form-check-label']) !!}
        </div>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('observacion', 'OBSERVACIONES:',['class' => 'colorprin']) !!}
        {!! Form::text('observacion', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
        {!! Form::text('conclusion', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-4">
        {!! Form::label('resultado', 'RESULTADO:',['class' => 'colorprin']) !!}
        {!! Form::select('resultado',$resultado,null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('doctor_id', 'DOCTOR:',['class' => 'colorprin']) !!}
        {!! Form::select('doctor_id',$doctors,null,['class'=>'custom-select','placeholder' => 'Seleccione Doctor']) !!}
    </div>
</div>