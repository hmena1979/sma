<div class="row mt-3">
    <h5 class="colorprin ml-2">
        OBSERVACIÓN DE CONDUCTAS:
    </h5>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-condensed table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th colspan="2" width="35%" class="align-middle">Presentación</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-2">
                                        {!! Form::radio('presentacion',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('presentacion', 'Adecuado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-2">
                                        {!! Form::radio('presentacion',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('presentacion', 'Inadecuado',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="align-middle">Postura</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('postura',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('postura', 'Erguida',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('postura',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('postura', 'Encorvada',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="3" width="15%" class="align-middle">Discurso</th>
                            <th width="20%" class="align-middle">Ritmo</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_ritmo',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_ritmo', 'Lento',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_ritmo',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_ritmo', 'Rápido',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_ritmo',3,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_ritmo', 'Fluido',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="20%" class="align-middle">Tono</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_tono',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_tono', 'Bajo',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_tono',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_tono', 'Moderado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_tono',3,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_tono', 'Alto',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="20%" class="align-middle">Articulación</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_articula',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_articula', 'Con dificultad',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('disc_articula',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('disc_articula', 'Sin dificultad',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="3" width="15%" class="align-middle">Orientación</th>
                            <th width="20%" class="align-middle">Tiempo</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_tiempo',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_tiempo', 'Orientado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_tiempo',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_tiempo', 'Desorientado',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="20%" class="align-middle">Espacio</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_espacio',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_espacio', 'Orientado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_espacio',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_espacio', 'Desorientado',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="20%" class="align-middle">Persona</th>
                            <td width="65%">
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_persona',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_persona', 'Orientado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('ori_persona',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('ori_persona', 'Desorientado',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <h5 class="colorprin ml-2">
                PROCESOS COGNITIVOS:
            </h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-condensed table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th width="30%" class="align-middle">Lucido, atento</th>
                            <td width="60%">
                                {!! Form::text('lucido', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Pensamiento</th>
                            <td>
                                {!! Form::text('pensamiento', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Percepcion</th>
                            <td>
                                {!! Form::text('percepcion', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Memoria</th>
                            <td>
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('memoria',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('memoria', 'Corto Plazo',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('memoria',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('memoria', 'Mediano Plazo',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('memoria',3,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('memoria', 'Largo Plazo',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Inteligencia</th>
                            <td>
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('inteligencia',1,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'Muy Superior',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('inteligencia',2,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'Superior',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group mt-1">
                                        {!! Form::radio('inteligencia',3,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'Normal Brillante',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',4,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'N.Promedio',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',5,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'N.Torpe',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',6,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'Fronterizo',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',7,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'RM Leve',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',8,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'RM Moderado',['class' =>'form-check-label']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',9,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'RM Severo',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-4 form-group">
                                        {!! Form::radio('inteligencia',10,null,['class'=>'form-check-input']) !!}
                                        {!! Form::label('inteligencia', 'RM Profundo',['class' =>'form-check-label']) !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Coord. Visomotriz</th>
                            <td>
                                {!! Form::text('visomotriz', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Apetito</th>
                            <td>
                                {!! Form::text('apetito', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Sueño</th>
                            <td>
                                {!! Form::text('sueño', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Personalidad</th>
                            <td>
                                {!! Form::text('personalidad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Afectividad</th>
                            <td>
                                {!! Form::text('afectividad', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Conducta Sexual</th>
                            <td>
                                {!! Form::text('sexual', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-condensed table-bordered table-sm">
                    <thead>
                        <th width="20%" class="align-middle">PJE</th>
                        <th width="80%" class="align-middle">Pruebas Psicológicas</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_mips', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Inventario Millón de Estilos de Personalidad - MIPS</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_mps', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Escala de Motivaciones Psicosociales - MPS</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_luria', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Luria - DNA Diagnóstico Neuropsicológico de Adultos</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_eae', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Escala de Apreciación del Estrés - EAE</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_bumout', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Inventario de Bumount de Maslach</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_clilab', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Clima Laboral</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_conductores', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Batería de Conductores</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_wais', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">WAIS</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_tbenton', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Test BENTON</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_tbender', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Test Bender</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_iazung', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Inventario de la ansiedad ZUNG</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_idzung', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Inventario de la depreción ZUNG</td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                {!! Form::text('pje_wechsler', null, ['class'=>'form-control mayuscula','maxlength'=>'3','autocomplete'=>'off']) !!}
                            </td>
                            <td class="align-middle">Escala de Memoria de Wechsler</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>