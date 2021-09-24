<div class="row mt-3">
    <h5 class="colorprin ml-2">
        EXAMEN OTOSCÓPICO:
    </h5>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('oidoder', 'Oído Derecho:',['class' => '']) !!}
        {!! Form::textarea('oidoder',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('oidoizq', 'Oído Izquierdo:',['class' => '']) !!}
        {!! Form::textarea('oidoizq',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        AUDIOGRAMA:
    </h5>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('au_interpreta', 'Interpretación:',['class' => '']) !!}
        {!! Form::textarea('au_interpreta',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('au_recomendacion', 'Recomendaciones/Sugerencias:',['class' => '']) !!}
        {!! Form::textarea('au_recomendacion',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 form-group">
        {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
        {!! Form::text('conclusion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
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