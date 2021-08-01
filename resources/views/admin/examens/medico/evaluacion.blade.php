<div class="row mt-2">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-10 form-group">
        {!! Form::label('anamnesis', 'Anamnesis:') !!}
        {!! Form::text('anamnesis', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('talla', 'Talla(m):') !!}
                {!! Form::text('talla', null, ['class'=>'form-control decimal','id'=>'talla','maxlength'=>'4','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('peso', 'Peso(Kg):') !!}
                {!! Form::text('peso', null, ['class'=>'form-control numero','id'=>'peso','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('imc', 'IMC:') !!}
                {!! Form::text('imc', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('pabdominal', 'P.Abdominal:') !!}
                {!! Form::text('pabdominal', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('fresp', 'F.Resp(/MIN):') !!}
                {!! Form::text('fresp', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('fcard', 'F.Car(/MIN):') !!}
                {!! Form::text('fcard', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('sato2', 'SatO2:') !!}
                {!! Form::text('sato2', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('temperatura', 'Temperatura:') !!}
                {!! Form::text('temperatura', null, ['class'=>'form-control decimal','maxlength'=>'5','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('cintura', 'Cintura(CM):') !!}
                {!! Form::text('cintura', null, ['class'=>'form-control decimal','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('cadera', 'Cadera(CM):') !!}
                {!! Form::text('cadera', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('torax', 'Torax(CM):') !!}
                {!! Form::text('torax', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('toraxesp', 'T.Expinar(CM):') !!}
                {!! Form::text('toraxesp', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('pasisto', 'PA Sistólica:') !!}
                {!! Form::text('pasisto', null, ['class'=>'form-control decimal','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('padisto', 'PA Distólica:') !!}
                {!! Form::text('padisto', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('pa', 'PA:') !!}
                {!! Form::text('pa', null, ['class'=>'form-control','maxlength'=>'7','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('otros', 'Otros:') !!}
        {!! Form::text('otros', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('ectoscopia', 'Ectoscopia:') !!}
        {!! Form::text('ectoscopia', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('estmental', 'Estado Mental:') !!}
        {!! Form::text('estmental', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Hallazgos:
    </h5>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('piel', 'Piel:') !!}
        {!! Form::text('piel', kvfj($detservicio->examedico->hallazgos, 'piel'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('cabello', 'Cabello:') !!}
        {!! Form::text('cabello', kvfj($detservicio->examedico->hallazgos, 'cabello'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('ojos', 'Ojos y Anexos:') !!}
        {!! Form::text('ojos', kvfj($detservicio->examedico->hallazgos, 'ojos'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('avod', 'AV. O.Der:',['datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Derecho"]) !!}
        {!! Form::text('avod', kvfj($detservicio->examedico->hallazgos, 'avod'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Derecho"]) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('avoi', 'AV. O.Izq:',['datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Izquierdo"]) !!}
        {!! Form::text('avoi', kvfj($detservicio->examedico->hallazgos, 'avoi'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Izquierdo"]) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('ccod', 'CC. O.Der:',['datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Derecho"]) !!}
        {!! Form::text('ccod', kvfj($detservicio->examedico->hallazgos, 'ccod'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Derecho"]) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('ccoi', 'CC. O.Izq:',['datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Izquierdo"]) !!}
        {!! Form::text('ccoi', kvfj($detservicio->examedico->hallazgos, 'ccoi'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Izquierdo"]) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('fojo', 'Fondo Ojo:',['datatoggle'=>"tooltip",'title'=>"Fondo Ojo"]) !!}
        {!! Form::text('fojo', kvfj($detservicio->examedico->hallazgos, 'fojo'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Fondo Ojo"]) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::label('vcolores', 'V.Colores:',['datatoggle'=>"tooltip",'title'=>"Visión de Colores"]) !!}
        {!! Form::text('vcolores', kvfj($detservicio->examedico->hallazgos, 'vcolores'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Visión de Colores"]) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('vprofundidad', 'Visión Profundidad:',['datatoggle'=>"tooltip",'title'=>"Visión Profundidad"]) !!}
        {!! Form::text('vprofundidad', kvfj($detservicio->examedico->hallazgos, 'vprofundidad'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Visión Profundidad"]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('oidos', 'Oidos:') !!}
        {!! Form::text('oidos', kvfj($detservicio->examedico->hallazgos, 'oidos'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('nariz', 'Nariz:') !!}
        {!! Form::text('nariz', kvfj($detservicio->examedico->hallazgos, 'nariz'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('boca', 'Boca:') !!}
        {!! Form::text('boca', kvfj($detservicio->examedico->hallazgos, 'boca'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('faringe', 'Faringe:') !!}
        {!! Form::text('faringe', kvfj($detservicio->examedico->hallazgos, 'faringe'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('cuello', 'Cuello:') !!}
        {!! Form::text('cuello', kvfj($detservicio->examedico->hallazgos, 'cuello'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('aprespira', 'Aparato Respiratorio:') !!}
        {!! Form::text('aprespira', kvfj($detservicio->examedico->hallazgos, 'aprespira'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('apcardio', 'Aparato Cardiovascular:') !!}
        {!! Form::text('apcardio', kvfj($detservicio->examedico->hallazgos, 'apcardio'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('apdiges', 'Aparato Digestivo:') !!}
        {!! Form::text('apdiges', kvfj($detservicio->examedico->hallazgos, 'apdiges'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('apgenit', 'Aparato Genitourinario:') !!}
        {!! Form::text('apgenit', kvfj($detservicio->examedico->hallazgos, 'apgenit'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('aploco', 'Aparato Locomotor:') !!}
        {!! Form::text('aploco', kvfj($detservicio->examedico->hallazgos, 'aploco'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('marcha', 'Marcha:') !!}
        {!! Form::text('marcha', kvfj($detservicio->examedico->hallazgos, 'marcha'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('columna', 'Columna:') !!}
        {!! Form::text('columna', kvfj($detservicio->examedico->hallazgos, 'columna'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('miesup', 'Miembros Superiores:') !!}
        {!! Form::text('miesup', kvfj($detservicio->examedico->hallazgos, 'miesup'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('mieinf', 'Miembros Inferiores:') !!}
        {!! Form::text('mieinf', kvfj($detservicio->examedico->hallazgos, 'mieinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('sislinf', 'Sistema Linfático:') !!}
        {!! Form::text('sislinf', kvfj($detservicio->examedico->hallazgos, 'sislinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('sisnerv', 'Sistema Nervioso:') !!}
        {!! Form::text('sisnerv', kvfj($detservicio->examedico->hallazgos, 'sisnerv'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
