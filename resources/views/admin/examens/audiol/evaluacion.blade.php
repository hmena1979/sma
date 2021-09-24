<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('hora', 'Hora:') !!}
        {!! Form::time('hora', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Audiometro:
    </h5>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('aud_marca', 'Marca:') !!}
        {!! Form::text('aud_marca', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('aud_modelo', 'Modelo:') !!}
        {!! Form::text('aud_modelo', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('aud_calibra', 'Calibración:') !!}
        {!! Form::text('aud_calibra', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Evaluación:
    </h5>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('tie_expo', 'Tiempo Exposición (h/d):') !!}
        {!! Form::text('tie_expo', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('epp', 'Uso EPP:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('epp',1,['class'=>'form-check-input']) !!}
            {!! Form::label('epp', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('epp',2,['class'=>'form-check-input']) !!}
            {!! Form::label('epp', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('apre_ruido', 'Apreciación de Ruido:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('apre_ruido',1,['class'=>'form-check-input']) !!}
            {!! Form::label('apre_ruido', 'MUY INTENSO',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('apre_ruido',2,['class'=>'form-check-input']) !!}
            {!! Form::label('apre_ruido', 'MODERADO',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('apre_ruido',3,['class'=>'form-check-input']) !!}
            {!! Form::label('apre_ruido', 'NO MOLESTO',['class' =>'form-check-label']) !!}
        </div>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Antecedentes:
    </h5>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('tabaco', 'Consumo de Tabaco:') !!}
        {!! Form::text('tabaco', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('sermil', 'Servicio Militar:') !!}
        {!! Form::text('sermil', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('hobbies', 'Hobbies con exposición a ruido:') !!}
        {!! Form::text('hobbies', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('expoquimico', 'Exposición laboral a químicos:') !!}
        {!! Form::text('expoquimico', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('infecoido', 'Infección al oído:') !!}
        {!! Form::text('infecoido', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('ototoxico', 'Uso de Ototóxicos:') !!}
        {!! Form::text('ototoxico', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('discoteca', 'Asiste a discotecas:') !!}
        {!! Form::text('discoteca', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('audifono', 'Dispositivos musicales con audífonos:') !!}
        {!! Form::text('audifono', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('arma', 'Deporte de caza con arma de fuego:') !!}
        {!! Form::text('arma', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('deporte', 'Deporte aéreo:') !!}
        {!! Form::text('deporte', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('submarino', 'Deporte Submarino:') !!}
        {!! Form::text('submarino', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('tec', 'TEC:') !!}
        {!! Form::text('tec', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('meningitis', 'Meningitis:') !!}
        {!! Form::text('meningitis', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('parotiditis', 'Parotiditis:') !!}
        {!! Form::text('parotiditis', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('sarampion', 'Sarampión:') !!}
        {!! Form::text('sarampion', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('otros', 'Otros:') !!}
        {!! Form::text('otros', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Síntomas:
    </h5>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('disminucion', 'Disminución de la Audición:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('disminucion',1,['class'=>'form-check-input']) !!}
            {!! Form::label('disminucion', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('disminucion',2,['class'=>'form-check-input']) !!}
            {!! Form::label('disminucion', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('otalgia', 'Otalgia:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('otalgia',1,['class'=>'form-check-input']) !!}
            {!! Form::label('otalgia', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('otalgia',2,['class'=>'form-check-input']) !!}
            {!! Form::label('otalgia', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('acufenos', 'Acúfenos:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('acufenos',1,['class'=>'form-check-input']) !!}
            {!! Form::label('acufenos', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('acufenos',2,['class'=>'form-check-input']) !!}
            {!! Form::label('acufenos', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('mareos', 'Mareos:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('mareos',1,['class'=>'form-check-input']) !!}
            {!! Form::label('mareos', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('mareos',2,['class'=>'form-check-input']) !!}
            {!! Form::label('mareos', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('vertigos', 'Vértigos:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('vertigos',1,['class'=>'form-check-input']) !!}
            {!! Form::label('vertigos', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('vertigos',2,['class'=>'form-check-input']) !!}
            {!! Form::label('vertigos', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('infeccion', 'Infección al Oído:') !!}
        {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
        <div class="cuadro">
            {!! Form::radio('infeccion',1,['class'=>'form-check-input']) !!}
            {!! Form::label('infeccion', 'SI',['class' =>'form-check-label mr-2']) !!}
            {!! Form::radio('infeccion',2,['class'=>'form-check-input']) !!}
            {!! Form::label('infeccion', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('otrsintomas', 'Otros:') !!}
        {!! Form::text('otrsintomas', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
</div>