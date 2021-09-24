<div class="row mt-2">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <h5 class="colorprin ml-2">
        ANTECEDENTES(del registro médico):
    </h5>
</div>
<div class="row mt-2">
    <div class="col-md-6">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tbody>
                <tr>
                    <td width='80%' class="align-middle">
                        Tiene Fobia o miedo a las alturas
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm01',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm01', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm01',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm01', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Epilepsia/convulsiones o otra enfermedad que condiciona pérdida de conciencia
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm02',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm02', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm02',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm02', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Alcoholismo o abuso de sistancias(adicción)
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm03',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm03', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm03',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm03', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Portados de enfermedad psiquiátrica
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm04',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm04', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm04',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm04', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Diabetes mellitus o hipoglicemia no controlada
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm05',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm05', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm05',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm05', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Migraña
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm06',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm06', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm06',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm06', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tbody>
                <tr>
                    <td width='80%' class="align-middle">
                        Insuficiencia cardiaca, enfermedad coronaria, arritmias, porta marcapaso, prótesis valvular
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm07',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm07', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm07',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm07', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Crisis asmatica
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm08',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm08', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm08',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm08', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Hipertención arterial no controlada
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm09',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm09', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm09',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm09', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Hipoacusia severa
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm10',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm10', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm10',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm10', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Alteración de la agudeza visual(de lejos) y/o estereopsia
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm11',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm11', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm11',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm11', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Declarado INAPTO para labor de altura en último examen ocupacional
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('arm12',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm12', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('arm12',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('arm12', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>