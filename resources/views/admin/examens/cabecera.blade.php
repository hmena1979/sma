<div class="row mismaaltura">
    <div class="col-md-10 d-flex">
        <div class="panelprin shadow">
            <div class="headercontent">
                <h2 class="title"><i class="fas fa-address-card"></i>
                    Colaborador: <strong> {{ $detservicio->colaborador->numdoc.'-'.$detservicio->colaborador->nombres }}</strong>
                     / Edad: <strong>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}} años</strong>
                </h2>
            </div>
            <div class="inside">
                <div class="row">
                    <div class="col-md-2 form-group">
                        {!! Form::label('departamento', 'Departamento:') !!}
                        {!! Form::text('departamento', $detservicio->colaborador->depart->nombre, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('provincia', 'Provincia:') !!}
                        {!! Form::text('provincia', $detservicio->colaborador->prov->nombre, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('ubigeo', 'Ubigeo:') !!}
                        {!! Form::text('ubigeo', $detservicio->colaborador->ubig->nombre, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('domicilio', 'Domicilio:') !!}
                        {!! Form::text('domicilio', $detservicio->colaborador->domicilio, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('telefono', 'Telefono:') !!}
                        {!! Form::text('telefono', $detservicio->colaborador->telefono, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 form-group">
                        {!! Form::label('residencia', 'Residencia:') !!}
                        {!! Form::text('residencia', $detservicio->colaborador->residencia = 1 ? 'SI' : 'NO', ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('tieresi', 'T. Residencia:') !!}
                        {!! Form::text('tieresi', $detservicio->colaborador->tieresi, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('lugnac', 'Lugar Nacimiento:') !!}
                        {!! Form::text('lugnac', $detservicio->colaborador->lugnac, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('estciv_id', 'Estado Civil:') !!}
                        {!! Form::text('estciv_id', $detservicio->colaborador->estciv->nombre, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                    <div class="col-md-2 form-group">
                        {!! Form::label('gradinst_id', 'Grado Instrucción:') !!}
                        {!! Form::text('gradinst_id', $detservicio->colaborador->gradinst->nombre, ['class'=>'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 d-flex">
        <div class="panelprin shadow">
            <div class="inside">
                <img class="img img-fluid" src="{{ url('/static/images/sinfoto.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
{{-- <div class="row mtop16">
    <div class="col-md-12">
        <div class="panelprin shadow">
            {!! Form::model($detservicio, ['route'=>['admin.servicios.updatevaluacion',$detservicio], 'method'=> 'put']) !!}
            <div class="headercontent">
                <h2 class="title"><i class="fas fa-address-card"></i>
                    Información del Puesto al que postula
                </h2>
                <ul>
                    <li>
                        {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                    </li>
                </ul>
            </div>
            <div class="inside">
                <div class="row">                                    
                    <div class="col-md-4 form-group">
                        {!! Form::label('area_id', 'Área:') !!}
                        {!! Form::select('area_id',$area,null,['class'=>'custom-select']) !!}
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('puesto_id', 'Ocupación:') !!}
                        {!! Form::select('puesto_id',$puesto,null,['class'=>'custom-select']) !!}
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('ocuactual', 'Ocupación Actual:') !!}
                        {!! Form::text('ocuactual', null, ['class'=>'form-control mayuscula','maxlength'=>'30']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 form-group">
                        {!! Form::label('lugar', 'Lugar:') !!}
                        {!! Form::select('lugar',[1=>'SUPERFICIE',2=>'SUBSUELO'],null,['class'=>'custom-select']) !!}
                    </div>
                    <div class="col-md-3 form-group">
                        {!! Form::label('tielabor', 'Tiempo Laborado:') !!}
                        {!! Form::text('tielabor', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
                    </div>
                    <div class="col-md-3 form-group">
                        {!! Form::label('riesgos', 'Principales Riesgos:') !!}
                        {!! Form::text('riesgos', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('seguridad', ' Medidas de Seguridad:') !!}
                        {!! Form::text('seguridad', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div> --}}