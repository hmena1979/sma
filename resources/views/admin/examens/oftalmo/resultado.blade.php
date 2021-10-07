<div class="row mt-3">
    <div class="col-md-12 form-group">
        {!! Form::label('diagnostico', 'Diagnóstico:') !!}
        {!! Form::text('diagnostico', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
        {!! Form::text('recomendaciones', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('restricciones', 'Restricciones:') !!}
        {!! Form::text('restricciones', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
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