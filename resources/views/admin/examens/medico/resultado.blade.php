<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>EVALUACIÓN POR SISTEMAS Y APARATOS:</strong>
    </h5>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('hallazgoexafisico', 'Hallazgos al Examen Físico:') !!}
        {!! Form::text('hallazgoexafisico', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('hallazgorestante', 'Examen Físico Restante:') !!}
        {!! Form::text('hallazgorestante', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('comentarios', 'COMENTARIOS / OBSERVACIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('comentarios',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('diagosteo', 'DIAGNÓSTICO OSTEOMUSCULAR:',['class' => 'colorprin']) !!}
        {!! Form::textarea('diagosteo',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('recomendaciones', 'RECOMENDACIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('recomendaciones',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
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