<div class="row mt-3">
    <div class="col-md-6 form-group">
        {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
        {!! Form::text('conclusion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('desde', 'DESDE:',['class' => 'colorprin']) !!}
        {!! Form::text('desde', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('hasta', 'HASTA:',['class' => 'colorprin']) !!}
        {!! Form::text('hasta', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('para', 'PARA:',['class' => 'colorprin']) !!}
        {!! Form::text('para', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('restriccion', 'RESTRICCIONES:',['class' => 'colorprin']) !!}
        {!! Form::text('restriccion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('lente', 'USO PERMANENTE DE LENTES:',['class' => 'colorprin']) !!}
        <div class="cuadro">
            {!! Form::radio('lente',1,['class'=>'form-check-input']) !!}
            {!! Form::label('lente', 'SI',['class' =>'form-check-label mr-1']) !!}
            {!! Form::radio('lente',2,['class'=>'form-check-input']) !!}
            {!! Form::label('lente', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-3">
        {!! Form::label('audifono', 'USO PERMANENTE AUDIFONOS:',['class' => 'colorprin']) !!}
        <div class="cuadro">
            {!! Form::radio('audifono',1,['class'=>'form-check-input']) !!}
            {!! Form::label('audifono', 'SI',['class' =>'form-check-label mr-1']) !!}
            {!! Form::radio('audifono',2,['class'=>'form-check-input']) !!}
            {!! Form::label('audifono', 'NO',['class' =>'form-check-label']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('observacion', 'OBSERVACIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('observacion',null,['class'=>'form-control mayuscula','maxlength'=>'100', 'rows'=>'2','autocomplete'=>'off']) !!}
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