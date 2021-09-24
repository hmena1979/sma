<div class="row mt-2">
    <div class="col-md-8 form-group">
        {!! Form::label('hallazgo[apcardio]', 'Aparato Cardiovascular:') !!}
        {!! Form::text('hallazgo[apcardio]', kvfj($detservicio->examedico->hallazgos, 'apcardio'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-8 form-group">
        {!! Form::label('hallazgo[sisnerv]', 'Neurológico:') !!}
        {!! Form::text('hallazgo[sisnerv]', kvfj($detservicio->examedico->hallazgos, 'sisnerv'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-8 form-group">
        {!! Form::label('hallazgo[refleosteo]', 'Osteo Muscular:') !!}
        {!! Form::text('hallazgo[refleosteo]', kvfj($detservicio->examedico->hallazgos, 'refleosteo'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('hallazgo[miesup]', 'Extreminades Superiores:') !!}
        {!! Form::text('hallazgo[miesup]', kvfj($detservicio->examedico->hallazgos, 'miesup'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('hallazgo[mieinf]', 'Extreminades Inferiores:') !!}
        {!! Form::text('hallazgo[mieinf]', kvfj($detservicio->examedico->hallazgos, 'mieinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-8 form-group">
        {!! Form::label('hallazgo[marcha]', 'Marcha:') !!}
        {!! Form::text('hallazgo[marcha]', kvfj($detservicio->examedico->hallazgos, 'marcha'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
