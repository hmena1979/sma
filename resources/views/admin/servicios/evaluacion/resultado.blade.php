<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>DIAGNÓSTICO OCUPACIONAL:</strong>
    </h5>
</div>
<div class="row">
    <div class="col-md-5 form-group">
        {!! Form::text('diagocu', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        <div class="cuadro">
            {!! Form::radio('diagpdr',1,['class'=>'form-check-input']) !!}
            {!! Form::label('diagpdr', 'P',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('diagpdr',2,['class'=>'form-check-input']) !!}
            {!! Form::label('diagpdr', 'D',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('diagpdr',3,['class'=>'form-check-input']) !!}
            {!! Form::label('diagpdr', 'R',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-5">
        {!! Form::select('diagcie',$cie10s,null,['class'=>'custom-select cieselect','placeholder' => 'Seleccione CIE10']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>OTROS DIAGNÓSTICOS:</strong>
    </h5>
</div>
<div class="row">
    <div class="col-md-5 form-group">
        {!! Form::text('otrdiagocu1', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        <div class="cuadro">
            {!! Form::radio('otrdiagpdr1',1,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr1', 'P',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr1',2,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr1', 'D',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr1',3,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr1', 'R',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-5">
        {!! Form::select('otrdiagcie1',$cie10s,null,['class'=>'custom-select cieselect','placeholder' => 'Seleccione CIE10']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-5 form-group">
        {!! Form::text('otrdiagocu2', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        <div class="cuadro">
            {!! Form::radio('otrdiagpdr2',1,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr2', 'P',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr2',2,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr2', 'D',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr2',3,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr2', 'R',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-5">
        {!! Form::select('otrdiagcie2',$cie10s,null,['class'=>'custom-select cieselect','placeholder' => 'Seleccione CIE10']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-5 form-group">
        {!! Form::text('otrdiagocu3', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        <div class="cuadro">
            {!! Form::radio('otrdiagpdr3',1,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr3', 'P',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr3',2,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr3', 'D',['class' =>'form-check-label mr-4']) !!}
            {!! Form::radio('otrdiagpdr3',3,['class'=>'form-check-input']) !!}
            {!! Form::label('otrdiagpdr3', 'R',['class' =>'form-check-label']) !!}
        </div>
    </div>
    <div class="col-md-5">
        {!! Form::select('otrdiagcie3',$cie10s,null,['class'=>'custom-select cieselect','placeholder' => 'Seleccione CIE10']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
        {!! Form::textarea('conclusion',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('recomendaciones', 'RECOMENDACIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('recomendaciones',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('restricciones', 'RESTRICCIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('restricciones',null,['class'=>'form-control mayuscula', 'rows'=>'2','autocomplete'=>'off']) !!}
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
    <div class="col-md-2">
        {!! Form::label('finalizado', 'FINALIZADO:',['class' => 'colorprin']) !!}
        {!! Form::select('finalizado',[1=> 'SI', 2=>'NO'],null,['class'=>'custom-select']) !!}
    </div>
</div>