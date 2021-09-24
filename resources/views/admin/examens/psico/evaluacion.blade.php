{{-- <div class="row mt-2">
    <h5 class="colorprin ml-2">
        AUDIOGRAMA:
    </h5>
</div> --}}
<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('motivo', 'Motivo Evaluación:',['class' => '']) !!}
        {!! Form::textarea('motivo',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('hisfamiliar', 'Historia Familiar:',['class' => '']) !!}
        {!! Form::textarea('hisfamiliar',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('accidentes', 'Accidentes Enfermedades(Durante el tiempo de trabajo):',['class' => '']) !!}
        {!! Form::textarea('accidentes',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('habitos', 'Hábitos(pasatiempos, consumo de tabaco, alcohol y/o drogas):',['class' => '']) !!}
        {!! Form::textarea('habitos',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('otros', 'Otras Observaciones:',['class' => '']) !!}
        {!! Form::textarea('otros',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>