<div class="row mt-2">
    <div class="col-md-6">
        <table class="table table-hover table-borderless table-condensed table-estrecha">
            <tbody>
                <tr>
                    <td width='80%' class="align-middle">
                        Se encuentra Usted resfriado o con algún cuadro respiratorio
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('aep01',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep01', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('aep01',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep01', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Sufre de vértigos o mareos diagnosticados recientemente
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('aep02',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep02', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('aep02',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep02', 'NO',['class' =>'form-check-label']) !!}
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
                        Consumo de licor en las  últimas 24 horas
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('aep03',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep03', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('aep03',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep03', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
                <tr>
                    <td width='80%' class="align-middle">
                        Frecuencia de cefaleas
                    </td>
                    <td width='20%' class="align-middle">
                        {!! Form::radio('aep04',1,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep04', 'SI',['class' =>'form-check-label mr-1']) !!}
                        {!! Form::radio('aep04',2,['class'=>'form-check-input']) !!}
                        {!! Form::label('aep04', 'NO',['class' =>'form-check-label']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>