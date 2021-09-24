<div class="row mt-3">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        El/la paciente presenta o ha presentado en los últimos 6 meses:
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table table-hover table-borderless table-estrecha">
            <tbody>
                <tr>
                    <td width='90%' class="align-middle">
                        Anemia
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant01',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant01', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant01',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant01', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Cirugía mayor reciente
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant02',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant02', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant02',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant02', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Desórdenes de la coagulación, trombosos, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant03',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant03', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant03',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant03', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Diabetes Mellitus
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant04',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant04', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant04',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant04', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Hipertención Arterial
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant05',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant05', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant05',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant05', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Embarazo
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant06',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant06', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant06',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant06', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Problemas neurológicos: epilepsia, vértigo, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant07',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant07', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant07',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant07', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Infecciones recientes(especialmente oídos, nariz, garganta)
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant08',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant08', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant08',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant08', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Obesidad Mórbida (IMC mayor a 35 m/kg2)
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant09',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant09', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant09',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant09', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Problemas Cardíacos: marcapasos, coronariopatía, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant10',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant10', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant10',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant10', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Problemas Respiratórios: asma, EPOC, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant11',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant11', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant11',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant11', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Problemas Oftalmológicos: retinopatía, glaucoma, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant12',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant12', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant12',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant12', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Problemas Digestivos: úlcera péptica, hepatitis, etc
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant13',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant13', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant13',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant13', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Apnea del Sueño
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant14',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant14', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant14',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant14', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Otra condición médica importante
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant15',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant15', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant15',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant15', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='90%' class="align-middle">
                        Alergías
                    </td>
                    <td width='10%' class="align-middle">
                        {!! Form::radio('ant16',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant16', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('ant16',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('ant16', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('medicamento', 'Uso de medicacíon actual:',['class' => '']) !!}
        {!! Form::text('medicamento', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>