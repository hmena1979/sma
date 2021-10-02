<div class="row mt-3">
    <div class="col-md-4 form-group">
        {!! Form::label('area_id', 'Área:') !!}
        {!! Form::select('area_id',$area,null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('puesto_id', 'Puesto al que Postula:') !!}
        {!! Form::select('puesto_id',$puesto,null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('ocuactual', 'Puesto Actual:') !!}
        {!! Form::text('ocuactual', null, ['class'=>'form-control mayuscula','maxlength'=>'30']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        {!! Form::label('seguridad', ' Reubicación:') !!}
        <div class="cuadro">
            {!! Form::radio('reubicacion',1,['class'=>'form-check-input']) !!}
            {!! Form::label('reubicacion', 'SI',['class' =>'form-check-label mr-3']) !!}
            {!! Form::radio('reubicacion',2,['class'=>'form-check-input']) !!}
            {!! Form::label('reubicacion', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('tielabor', 'Tiempo Laborado:') !!}
        {!! Form::text('tielabor', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('lugar', 'Lugar:') !!}
        {!! Form::select('lugar',[1=>'SUPERFICIE',2=>'CONCENTRADORA',3=>'SUBSUELO'],null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('altitud', 'Altitud de la Labor:') !!}
        {!! Form::select('altitud',$altitud,null,['class'=>'custom-select']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('seguridad', ' Medidas de Seguridad:') !!}
        {!! Form::text('seguridad', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    
</div>
<div class="row">
    {!! Form::label('riesgos', 'Principales Riesgos:',['class'=>'ml-2']) !!}
</div>
<div class="row cuadro">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prbiologico', true, kvfj($detservicio->riesgos, 'prbiologico'),['class' => '']) !!}
                    Biológicos
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prcancerigenos', true, kvfj($detservicio->riesgos, 'prcancerigenos'),['class' => '']) !!}
                    Cancerígenos
                </label>
            </div>
            <div class="col-md-2">
                <label class="mr-3">
                    {!! Form::checkbox('prcargas', true, kvfj($detservicio->riesgos, 'prcargas'),['class' => '']) !!}
                    Cargas
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prmetpesado', true, kvfj($detservicio->riesgos, 'prmetpesado'),['class' => '']) !!}
                    Metales pesados
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prmovrep', true, kvfj($detservicio->riesgos, 'prmovrep'),['class' => '']) !!}
                    Mov. Repet.
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prmutagenico', true, kvfj($detservicio->riesgos, 'prmutagenico'),['class' => '']) !!}
                    Mutagénicos
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prpolvo', true, kvfj($detservicio->riesgos, 'prpolvo'),['class' => '']) !!}
                    Polvo
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prpostura', true, kvfj($detservicio->riesgos, 'prpostura'),['class' => '']) !!}
                    Posturas
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prpvd', true, kvfj($detservicio->riesgos, 'prpvd'),['class' => '']) !!}
                    PVD
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prruido', true, kvfj($detservicio->riesgos, 'prruido'),['class' => '']) !!}
                    Ruido
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prsolvente', true, kvfj($detservicio->riesgos, 'prsolvente'),['class' => '']) !!}
                    Solventes
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prtemperaturas', true, kvfj($detservicio->riesgos, 'prtemperaturas'),['class' => '']) !!}
                    Temperaturas
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prturno', true, kvfj($detservicio->riesgos, 'prturno'),['class' => '']) !!}
                    Turnos
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prvibseg', true, kvfj($detservicio->riesgos, 'prvibseg'),['class' => '']) !!}
                    Vib. Segmentaria
                </label>
            </div>
            <div class="col-md-2">
                <label class="">
                    {!! Form::checkbox('prvibtot', true, kvfj($detservicio->riesgos, 'prvibtot'),['class' => '']) !!}
                    Vib. Total
                </label>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1">
                        {!! Form::label('protros', 'Otros:',['class'=>'mt-1']) !!}
                    </div>
                    <div class="col-md-11">
                        {!! Form::text('protros', kvfj($detservicio->riesgos, 'protros'), ['class'=>'form-control mayuscula']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 oculto">
                {!! Form::file('firma', ['id' => 'firma', 'accept'=>'image/*']) !!}
            </div>
            <div class="col-md-4 oculto">
                {!! Form::file('foto', ['id' => 'foto', 'accept'=>'image/*']) !!}
            </div>
            <div class="col-md-4 oculto">
                {!! Form::file('huella', ['id' => 'huella', 'accept'=>'image/*']) !!}
            </div>
        </div>
    </div>
</div>
@can('admin.medica.edit')
<div class="row mt-3">
    <div class="col-md-2 d-flex">
        <div class="panelprin shadow">
            <div class="inside">
                <div class="row justify-content-center">
                    @if (!empty($detservicio->firma))
                    <img id='imgfirma' class="img img-fluid" src="{{ url('media/'.$detservicio->firma) }}" alt="">
                    @else    
                    <img id='imgfirma' class="img img-fluid" src="{{ url('/static/images/sinfirma.png') }}" alt="">
                    @endif
                </div>
                <div class="row mt-3 text-center">
                    <div class="col-md-12">
                        <a class="btn btn-convertir" href="#" id="btnfirma">Modificar Firma</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2 d-flex">
        <div class="panelprin shadow">
            <div class="inside">
                <div class="row justify-content-center">
                    @if (!empty($detservicio->foto))
                    <img id='imgfoto' class="img img-fluid" src="{{ url('media/'.$detservicio->foto) }}" alt="">
                    @else    
                    <img id='imgfoto' class="img img-fluid" src="{{ url('/static/images/sinfoto.png') }}" alt="">
                    @endif
                </div>
                <div class="row mt-3 text-center">
                    <div class="col-md-12">
                        <a class="btn btn-convertir" href="#" id="btnfoto">Modificar Foto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-2 d-flex">
        <div class="panelprin shadow">
            <div class="inside">
                <div class="row justify-content-center">
                    @if (!empty($detservicio->huella))
                    <img id='imghuella' class="img img-fluid" src="{{ url('media/'.$detservicio->huella) }}" alt="">
                    @else    
                    <img id='imghuella' class="img img-fluid" src="{{ url('/static/images/sinhuella.png') }}" alt="">
                    @endif
                </div>
                <div class="row mt-3 text-center">
                    <div class="col-md-12">
                        <a class="btn btn-convertir" href="#" id="btnhuella">Modificar Huella</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endcan