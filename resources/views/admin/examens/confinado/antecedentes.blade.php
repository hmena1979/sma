<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Antecedentes personales del trabajador:
    </h5>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tbody>
                <tr>
                    <td width='90%' class="align-middle">
                        Diabetes Mellitus o Hipoglicemia
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant1',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant1', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant1',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant1', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Enfermedad Vertiginosa
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant2',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant2', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant2',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant2', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Enfermedad Convulsiva
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant3',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant3', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant3',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant3', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Medicamentos que produzcan somnolencia, mareos o afecten el estado vigente
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant4',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant4', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant4',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant4', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Alteraciones Pulmonares(Asma)
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant5',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant5', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant5',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant5', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Alteraciones de la agudeza visual(de lejos) y/o de la visión de profundidad
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant6',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant6', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant6',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant6', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Enfermedad Cardiovascular, Arritmias, Hipo e Hipertensión Arterial
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant7',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant7', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant7',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant7', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Enfermedad o Alteración en la Columna Vertebral o Miembros Superiores o Inferiores
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant8',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant8', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant8',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant8', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Alcoholismo o abuso de otras sustancias (adicción)
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant9',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant9', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant9',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant9', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 form-group">
        {!! Form::label('observaciones', 'OBSERVACIONES:') !!}
        {!! Form::text('observaciones', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('electro', 'ELECTROCARDIOGRAMA (ULTMO EMO):') !!}
        {!! Form::text('electro', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-6 form-group">
        {!! Form::label('radio', 'RADIOGRAFÍA DE TORAX (ULTMO EMO):') !!}
        {!! Form::text('radio', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('espiro', 'ESPIROMETRÍA (ULTMO EMO):') !!}
        {!! Form::text('espiro', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>