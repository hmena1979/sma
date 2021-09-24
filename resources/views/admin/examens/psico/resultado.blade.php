<div class="row mt-3">
    <div class="col-md-12">
        <table class="table table-condensed table-bordered table-sm">
            <thead>
                <tr>
                    <th width="7%" class="align-middle">A/NA</th>
                    <th width="15%" class="align-middle">ÁREA</th>
                    <th width="15%" class="align-middle">NIVEL</th>
                    <th width="63%" class="align-middle">CARACTERISTICAS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">
                        {!! Form::select('dfinteligencia_ana',[1=>'A',2=>'NA'],null,['class'=>'custom-select']) !!}
                    </td>
                    <td class="align-middle">Inteligencia</td>
                    <td class="align-middle">
                        {!! Form::text('dfinteligencia_nivel', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::textarea('dfinteligencia_carac',null,['class'=>'form-control mayuscula', 'rows'=>'4','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        {!! Form::select('dfpersonalidad_ana',[1=>'A',2=>'NA'],null,['class'=>'custom-select']) !!}
                    </td>
                    <td class="align-middle">Personalidad</td>
                    <td class="align-middle">
                        {!! Form::text('dfpersonalidad_nivel', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::textarea('dfpersonalidad_carac',null,['class'=>'form-control mayuscula', 'rows'=>'7','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        {!! Form::select('dfansiedad_ana',[1=>'A',2=>'NA'],null,['class'=>'custom-select']) !!}
                    </td>
                    <td class="align-middle">Ansiedad</td>
                    <td class="align-middle">
                        {!! Form::text('dfansiedad_nivel', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::textarea('dfansiedad_carac',null,['class'=>'form-control mayuscula', 'rows'=>'4','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">
                        {!! Form::select('dfpatologias_ana',[1=>'A',2=>'NA'],null,['class'=>'custom-select']) !!}
                    </td>
                    <td class="align-middle">Patologías</td>
                    <td class="align-middle">
                        {!! Form::text('dfpatologias_nivel', null, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::textarea('dfpatologias_carac',null,['class'=>'form-control mayuscula', 'rows'=>'4','autocomplete'=>'off']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-3">
    <h5 class="colorprin ml-2">
        DIAGNOSTICO FINAL / CONCLUSIONES:
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('conc_congnitiva', 'ÁREA COGNITIVA / PERSONALIDAD:',['class' => '']) !!}
        {!! Form::textarea('conc_congnitiva',null,['class'=>'form-control mayuscula', 'rows'=>'7','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('conc_emocional', 'ÁREA EMOCIONAL:',['class' => '']) !!}
        {!! Form::textarea('conc_emocional',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('recomendaciones', 'RECOMENDACIONES:',['class' => 'colorprin']) !!}
        {!! Form::textarea('recomendaciones',null,['class'=>'form-control mayuscula', 'rows'=>'3','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12 form-group">
        {!! Form::label('conclusion', 'CONCLUSIÓN:',['class' => 'colorprin']) !!}
        {!! Form::text('conclusion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
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