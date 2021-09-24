<div class="row mt-3">
    <h5 class="colorprin ml-2">
        INSPECCIÓN
    </h5>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>EJE ANTERO-POSTERIOR(Marque y/o comente):</strong>
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="10%"><strong>Cervical:</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cveacervical',1,kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveacervical', 'Normal',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cveacervical',2,kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveacervical', 'Aumentada',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cveacervical',3,kvfjns($detservicio->examedico->cvejeantero, 'cveacervical')==3?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveacervical', 'Disminuida',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="" width="62%">
                        {!! Form::text('cveacervicaldes', empty(kvfj($detservicio->examedico->cvejeantero, 'cveacervicaldes'))?'X':kvfj($detservicio->examedico->cvejeantero, 'cveacervicaldes'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="10%"><strong>Dorsal:</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cveadorsal',1,kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveadorsal', 'Normal',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cveadorsal',2,kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveadorsal', 'Aumentada',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cveadorsal',3,kvfjns($detservicio->examedico->cvejeantero, 'cveadorsal')==3?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveadorsal', 'Disminuida',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="" width="62%">
                        {!! Form::text('cveadorsaldes', empty(kvfj($detservicio->examedico->cvejeantero, 'cveadorsaldes'))?'X':kvfj($detservicio->examedico->cvejeantero, 'cveadorsaldes'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="10%"><strong>Lumbar:</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvealumbar',1,kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvealumbar', 'Normal',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cvealumbar',2,kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvealumbar', 'Aumentada',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="10%">
                        {!! Form::radio('cvealumbar',3,kvfjns($detservicio->examedico->cvejeantero, 'cvealumbar')==3?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvealumbar', 'Disminuida',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="" width="62%">
                        {!! Form::text('cvealumbardes', empty(kvfj($detservicio->examedico->cvejeantero, 'cvealumbardes'))?'X':kvfj($detservicio->examedico->cvejeantero, 'cvealumbardes'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>EJE LATERAL:</strong>
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="10%"><strong>Dorsal:</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cveldorsal',1,kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveldorsal', 'Normal',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="17%">
                        {!! Form::radio('cveldorsal',2,kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveldorsal', 'Concavidad Derecha',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="17%">
                        {!! Form::radio('cveldorsal',3,kvfjns($detservicio->examedico->cvejelateral, 'cveldorsal')==3?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cveldorsal', 'Concavidad Izquierda',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="" width="48%">
                        {!! Form::text('cveldorsaldes', empty(kvfj($detservicio->examedico->cvejelateral, 'cveldorsaldes'))?'X':kvfj($detservicio->examedico->cvejelateral, 'cveldorsaldes'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="10%"><strong>Lumbar:</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvellumbar',1,kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvellumbar', 'Normal',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="17%">
                        {!! Form::radio('cvellumbar',2,kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvellumbar', 'Concavidad Derecha',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="17%">
                        {!! Form::radio('cvellumbar',3,kvfjns($detservicio->examedico->cvejelateral, 'cvellumbar')==3?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvellumbar', 'Concavidad Izquierda',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="" width="48%">
                        {!! Form::text('cvellumbardes', empty(kvfj($detservicio->examedico->cvejelateral, 'cvellumbardes'))?'X':kvfj($detservicio->examedico->cvejelateral, 'cvellumbardes'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-3">
    <h5 class="colorprin ml-2">
        EXAMEN FÍSICO
    </h5>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>MOVILIDAD DOLOR:</strong>
    </h5>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th class="align-middle" width="8%">Columna Vertebral</th>
                    <th class="align-middle" width="8%">Flexión</th>
                    <th class="align-middle" width="8%">Extención</th>
                    <th class="align-middle" width="8%">Lateraliz. Derecha</th>
                    <th class="align-middle" width="8%">Lateraliz. Izquierda</th>
                    <th class="align-middle" width="8%">Rotación Derecha</th>
                    <th class="align-middle" width="8%">Rotación Izquierda</th>
                    <th class="align-middle" width="8%">Dolor (0/4)</th>
                    <th class="align-middle" width="8%">Irradiación</th>
                </tr>                
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle"><strong>Cervical</strong></td>
                    <td class="text-center">{!! Form::select('cvflexionc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvflexionc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvextencionc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvextencionc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvlatderc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvlatderc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvlatizqc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvlatizqc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvrotderc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvrotderc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvrotizqc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvrotizqc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvdolorc',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvdolorc'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvirradiac',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvirradiac'),['class'=>'custom-select select-grado']) !!}</td>

                </tr>
                <tr>
                    <td class="align-middle"><strong>Lumbar</strong></td>
                    <td class="text-center">{!! Form::select('cvflexionl',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvflexionl'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvextencionl',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvextencionl'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvlatderl',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvlatderl'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvlatizql',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvlatizql'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvrotderl',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvrotderl'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvrotizql',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvrotizql'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvdolorl',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvdolorl'),['class'=>'custom-select select-grado']) !!}</td>
                    <td class="text-center">{!! Form::select('cvirradial',$grado,kvfj($detservicio->examedico->cvmovilidad, 'cvirradial'),['class'=>'custom-select select-grado']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>TEST ESPECIFICOS:</strong>
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="8%"><strong>LASEGUE:</strong></td>
                    <td class="" width="8%"><strong>Derecho</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtlasegued',1,kvfjsn($detservicio->examedico->cvtest, 'cvtlasegued')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtlasegued', 'Positivo',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtlasegued',2,kvfjsn($detservicio->examedico->cvtest, 'cvtlasegued')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtlasegued', 'Negativo',['class' =>'form-check-label']) !!}
                    </td>
                    <td width="3%"></td>
                    <td class="" width="8%"><strong>Izquierdo</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtlaseguei',1,kvfjsn($detservicio->examedico->cvtest, 'cvtlaseguei')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtlaseguei', 'Positivo',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtlaseguei',2,kvfjsn($detservicio->examedico->cvtest, 'cvtlaseguei')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtlaseguei', 'Negativo',['class' =>'form-check-label']) !!}
                    </td>
                    <td width="41%"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table100">
            <tbody>
                <tr>
                    <td class="" width="8%"><strong>SCHOBER:</strong></td>
                    <td class="" width="8%"><strong>Derecho</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtschoberd',1,kvfjsn($detservicio->examedico->cvtest, 'cvtschoberd')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtschoberd', 'Positivo',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtschoberd',2,kvfjsn($detservicio->examedico->cvtest, 'cvtschoberd')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtschoberd', 'Negativo',['class' =>'form-check-label']) !!}
                    </td>
                    <td width="3%"></td>
                    <td class="" width="8%"><strong>Izquierdo</strong></td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtschoberi',1,kvfjsn($detservicio->examedico->cvtest, 'cvtschoberi')==1?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtschoberi', 'Positivo',['class' =>'form-check-label']) !!}
                    </td>
                    <td class="text-center" width="8%">
                        {!! Form::radio('cvtschoberi',2,kvfjsn($detservicio->examedico->cvtest, 'cvtschoberi')==2?'checked':'',['class'=>'form-check-input']) !!}
                        {!! Form::label('cvtschoberi', 'Negativo',['class' =>'form-check-label']) !!}
                    </td>
                    <td width="41%"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        <strong>PALPACIÓN:</strong>
    </h5>
</div>
<div class="row mt-1">
    <div class="col-md-12">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th width="24%">Columna Vertebral</th>
                    <th width="38%">Apófisis Espinosas Dolorosas</th>
                    <th width="38%">Contractura Muscular</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td  class="align-middle"><strong>Cervical:</strong></td>
                    <td class="">
                        {!! Form::text('cpalcervicalap', kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalap')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalap'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                    <td class="">
                        {!! Form::text('cpalcervicalcm', kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalcm')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpalcervicalcm'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle"><strong>Dorsal:</strong></td>
                    <td class="">
                        {!! Form::text('cpaldorsalap', kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalap')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalap'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                    <td class="">
                        {!! Form::text('cpaldorsalcm', kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalcm')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpaldorsalcm'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle"><strong>Lumbar:</strong></td>
                    <td class="">
                        {!! Form::text('cpallumbarap', kvfj($detservicio->examedico->cvpalpacion, 'cpallumbarap')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpallumbarap'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                    <td class="">
                        {!! Form::text('cpallumbarcm', kvfj($detservicio->examedico->cvpalpacion, 'cpallumbarcm')==null?'AUSENCIA DE SIGNOS Y SINTOMAS':kvfj($detservicio->examedico->cvpalpacion, 'cpallumbarcm'), ['class'=>'form-control mayuscula']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>