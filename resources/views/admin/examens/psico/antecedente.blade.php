<div class="row mt-4">
    <h5 class="colorprin ml-2">
        Hábitos Nocivos:
    </h5>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label("colantpatologicos[alcohol]", 'Frecuencia Alcohol:') !!}
        {!! Form::text('colantpatologicos[alcohol]', empty($detservicio->colaborador->colantpatologico->alcohol)?'NIEGA':$detservicio->colaborador->colantpatologico->alcohol, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label("colantpatologicos[tabaco]", 'Frecuencia Tabaco:') !!}
        {!! Form::text('colantpatologicos[tabaco]', empty($detservicio->colaborador->colantpatologico->tabaco)?'NIEGA':$detservicio->colaborador->colantpatologico->tabaco, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label("colantpatologicos[droga]", 'Frecuencia Drogas:') !!}
        {!! Form::text('colantpatologicos[droga]', empty($detservicio->colaborador->colantpatologico->droga)?'NIEGA':$detservicio->colaborador->colantpatologico->droga, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label("colantpatologicos[medicamento]", 'Medicamentos:') !!}
        {!! Form::text('colantpatologicos[medicamento]', empty($detservicio->colaborador->colantpatologico->medicamento)?'NIEGA':$detservicio->colaborador->colantpatologico->medicamento, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <div class="panelprin shadow">
            <div class="headercontent">
                <h2 class="title">Antecedentes Ocupacionales</h2>
                <ul>
                    <li>
                        <button type="button" class="btn btn-convertir mt-2" data-toggle="modal" data-target="#ingantecedente" onclick="limpia('{{ $detservicio->colaborador->id }}');">
                            Agregar Antecedente
                        </button>
                    </li>
                </ul>
            </div>
            <div class="inside">
                <div class="row">
                    <!-- Modal -->
                    <div class="modal fade" id="ingantecedente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title colorprin" id="exampleModalLabel">Antecedente Ocupacional</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            {!! Form::hidden('tipo_i', 1, ['id'=>'tipo_i']) !!}
                                            {!! Form::hidden('id_i', 1, ['id'=>'id_i']) !!}
                                            {!! Form::label('empresa_i', 'Empresa:') !!}
                                            {!! Form::text('empresa_i', null, ['class'=>'form-control mayuscula','id'=>'empresa_i','maxlength'=>'50','autocomplete'=>'off']) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            {!! Form::label('area_i', 'Área:') !!}
                                            {!! Form::select('area_i',$area,'1',['class'=>'custom-select','id'=>'area_i']) !!}
                                        </div>
                                        <div class="col-md-6 form-group">
                                            {!! Form::label('puesto_id_i', 'Ocupación:') !!}
                                            {!! Form::select('puesto_id_i',$puesto,'1',['class'=>'custom-select','id'=>'puesto_id_i']) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    {!! Form::label('fecha_i', 'Fecha:') !!}
                                                    {!! Form::text('fecha_i', null, ['class'=>'form-control mayuscula','id'=>'fecha_i','maxlength'=>'15','autocomplete'=>'off']) !!}
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    {!! Form::label('tiempo_i', 'Tiempo:') !!}
                                                    {!! Form::text('tiempo_i', null, ['class'=>'form-control mayuscula','id'=>'tiempo_i','maxlength'=>'15','autocomplete'=>'off']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    {!! Form::label('exposicion_i', 'Exposición:') !!}
                                                    {!! Form::select('exposicion_i',[1=>'Si',2=>'NO'],null,['class'=>'custom-select','id'=>'exposicion_i', 'placeholder'=>'']) !!}
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    {!! Form::label('epp_i', 'EPP:') !!}
                                                    {!! Form::select('epp_i',[1=>'Si',2=>'NO'],null,['class'=>'custom-select','id'=>'epp_i', 'placeholder'=>'']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            {!! Form::label('cretiro_i', 'Causa de Retiro:') !!}
                                            {!! Form::text('cretiro_i', null, ['class'=>'form-control mayuscula','maxlength'=>'20','id'=>'cretiro_i','autocomplete'=>'off']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id='addantecedente' class="btn btn-convertir" data-dismiss="modal">Guardar</button>
                                    {{-- {!! Form::submit('Guardar', ['class'=>'btn btn-convertir', 'id'=>'addantecedente']) !!} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Modal -->
                    <div class="tablaao" id="tantocupa">
                        {{-- @include('admin.colaboradors.antocupacional')    --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
