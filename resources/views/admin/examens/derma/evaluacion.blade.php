<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        I.- EXAMEN GENERAL
    </h5>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        I.1 Piel y anexos
    </h5>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('elasticidad', 'A) Elasticidad de la Piel:') !!}
        {!! Form::select("elasticidad",[1=>'Conservada',2=>'Patológico'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('elasticidadp', null, ['class'=>'form-control mayuscula mtop23','id'=>'elasticidadp','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('textura', 'B) Textura:') !!}
        {!! Form::select("textura",[1=>'Conservada',2=>'Patológico'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('texturap', null, ['class'=>'form-control mayuscula mtop23','id'=>'texturap','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('dolor', 'C) Dolor a la palpación digital:') !!}
        {!! Form::select("dolor",[1=>'No hay dolor',2=>'Leve',3=>'Moderado',4=>'Severo'],null,['class'=>'custom-select']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('coloracion', 'D) Coloración:') !!}
        {!! Form::select("coloracion",[1=>'Conservada',2=>'Hipopigmentación',3=>'Hiperpigmentación',4=>'Otros'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('coloracionotr', null, ['class'=>'form-control mayuscula mtop23','id'=>'coloracionotr','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('cicatrices', 'E) Cicatrices:') !!}
        {!! Form::select("cicatrices",[1=>'No Existen',2=>'En MMII',3=>'En MMSS',4=>'Otras'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('cicatricesotr', null, ['class'=>'form-control mayuscula mtop23','id'=>'cicatricesotr','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-1 form-group">
        {!! Form::label('tatuajes', 'Tatuajes:') !!}
        {!! Form::select("tatuajes",[1=>'Si',2=>'No'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-11 form-group">
        {!! Form::text('tatuajesd', null, ['class'=>'form-control mayuscula mtop23','id'=>'tatuajesd','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('tumor', 'F) Tumoraciones:') !!}
        {!! Form::select("tumor",[1=>'No Existen',2=>'En MMII',3=>'En MMSS',4=>'Otras'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('tumorotr', null, ['class'=>'form-control mayuscula mtop23','id'=>'tumorotr','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        I.2 Tejido celular y subcutáneo
    </h5>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('edema', 'A) Edema:') !!}
        {!! Form::select("edema",[1=>'No Existen',2=>'En MMII',3=>'En MMSS',4=>'Otras'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-9 form-group">
        {!! Form::text('edemaotr', null, ['class'=>'form-control mayuscula mtop23','id'=>'edemaotr','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-3 form-group">
        {!! Form::label('nikolski', 'II. MANIOBRA DE NIKOLSKI:',['class'=>'colorprin']) !!}
        {!! Form::select("nikolski",[1=>'Positivo',2=>'Negativo'],null,['class'=>'custom-select']) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-3 form-group">
        {!! Form::label('wood', 'III. LUZ DE WOOD:',['class'=>'colorprin']) !!}
        {!! Form::select("wood",[1=>'Positivo',2=>'Negativo',3=>'No Aplica'],null,['class'=>'custom-select']) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-3 form-group">
        {!! Form::label('dermatofitos', 'IV. EXAMEN DIRECTO DE DERMATOFITOS:',['class'=>'colorprin']) !!}
        {!! Form::select("dermatofitos",[1=>'Positivo',2=>'Negativo',3=>'No Aplica'],null,['class'=>'custom-select']) !!}
    </div>
</div>