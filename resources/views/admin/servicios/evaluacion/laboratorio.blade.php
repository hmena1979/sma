@if ($pagina==1)
<div class="row mt-3">
    <h5 class="colorprin ml-2">
        Valores:
    </h5>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label("hemoglobina", 'Hemoglobina:') !!}
                {!! Form::text('hemoglobina', null, ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[glucosa]", 'Glucosa:') !!}
                {!! Form::text('bioquimica[glucosa]', $laboratorio['Glucosa'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[triglicerido]", 'Trigliceridos:') !!}
                {!! Form::text('bioquimica[triglicerido]', $laboratorio['Trigliceridos'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[colesterol]", 'Colesterol:') !!}
                {!! Form::text('bioquimica[colesterol]', $laboratorio['Colesterol'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label("bioquimica[hdl]", 'HDL:') !!}
        {!! Form::text('bioquimica[hdl]', $laboratorio['HDL'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label("bioquimica[ldl]", 'LDL:') !!}
        {!! Form::text('bioquimica[ldl]', $laboratorio['LDL'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label("bioquimica[tgo]", 'TGO:') !!}
        {!! Form::text('bioquimica[tgo]', $laboratorio['TGO'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[tgp]", 'TGP:') !!}
                {!! Form::text('bioquimica[tgp]', $laboratorio['TGP'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[creatinina]", 'Creatinina:') !!}
                {!! Form::text('bioquimica[creatinina]', $laboratorio['Creatinina'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[aurico]", 'Acido Úrico:') !!}
                {!! Form::text('bioquimica[aurico]', $laboratorio['AUrico'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label("bioquimica[urea]", 'Urea:') !!}
                {!! Form::text('bioquimica[urea]', $laboratorio['Urea'], ['class'=>'form-control decimal','maxlength'=>'10','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>    
    <div class="col-md-2 form-group">
        {!! Form::label("bioquimica[gruposan]", 'Grupo Sanguineo:') !!}
        {!! Form::text('bioquimica[gruposan]', $laboratorio['GrupoSan'], ['class'=>'form-control mayuscula','maxlength'=>'2','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label("bioquimica[factorrh]", 'Factor RH:') !!}
        {!! Form::text('bioquimica[factorrh]', $laboratorio['FactorRH'], ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label("orinap", 'Orina:') !!}
        {!! Form::select('orinap',[1=> 'POSITIVO', 2=>'NEGATIVO'],null,['class'=>'custom-select']) !!}
    </div>
</div>    
@endif
<div class="row">
    <div class="col-md-6">
        <table class="table table-hover table-bordered table-estrecha">
            <thead>
                <tr>
                    <th width='80%'>EVALUACIÓN</th>
                    <th width='20%'></th>
                </tr>
            </thead>
            <tbody>
                @if(kvfa($examenes,'16'))
                <tr>
                    <th class="align-middle">Bioquímica</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.bioquimica',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Laboratorio Bioquímica">
                            <i class="fas fa-microscope"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'17'))
                <tr>
                    <th class="align-middle">Hemograma</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.hemograma',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Laboratorio Hemograma">
                            <i class="fas fa-burn"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'18'))
                <tr>
                    <th class="align-middle">Examen Orina</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.orina',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Laboratorio Examen Orina">
                            <i class="fas fa-vial"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'19'))
                <tr>
                    <th class="align-middle">Examen Heces Completa</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.hece',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Laboratorio Examen Heces Completa">
                            <i class="fas fa-poop"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'20'))
                <tr>
                    <th class="align-middle">Parasitología Clínica</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.parasitologia',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Laboratorio Parasitología Clínica">
                            <i class="fas fa-disease"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @if(kvfa($examenes,'13'))
                <tr>
                    <th class="align-middle">Covid19 - Antígeno</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidant) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba Antígeno | Covid-19">
                            <i class="fas fa-virus"></i>
                        </a>
                    </td>
                </tr>
                @endif  
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <table class="table table-hover table-bordered table-estrecha">
            <thead>
                <tr>
                    <th width='80%'>EVALUACIÓN</th>
                    <th width='20%'></th>
                </tr>
            </thead>
            <tbody>
                @if(kvfa($examenes,'21'))
                <tr>
                    <th class="align-middle">Bacteriología Clínica</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.bacteriologia',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Microbiología Clínica">
                            <i class="fas fa-bacterium"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'22'))
                <tr>
                    <th class="align-middle">Urocultivo</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.urocultivo',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Urocultivo">
                            <i class="fas fa-bacterium"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'23'))
                <tr>
                    <th class="align-middle">Toxicológico</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.toxicologico',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Toxicológico">
                            <i class="fas fa-bacterium"></i>
                        </a>
                    </td>
                </tr>
                @endif               
                @if(kvfa($examenes,'24'))
                <tr>
                    <th class="align-middle">Metales Pesados</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.laboratorio.metalpesado',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Metales Pesados">
                            <i class="fas fa-bacterium"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @if(kvfa($examenes,'14'))
                <tr>
                    <th class="align-middle">Covid19 - Prueba Rápida</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidpr) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba Rápida | Covid-19">
                            <i class="fas fa-viruses"></i>
                        </a>
                    </td>
                </tr>
                @endif
                @if(kvfa($examenes,'15'))
                <tr>
                    <th class="align-middle">Covid19 - PCR</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.examens.exacovid',$detservicio->exacovidpcr) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Prueba PCR | Covid-19">
                            <i class="fas fa-lungs-virus"></i>
                        </a>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>