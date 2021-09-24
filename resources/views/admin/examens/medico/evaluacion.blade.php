<div class="row mt-2">
    <div class="col-md-2 form-group">
        {!! Form::label('fecha', 'Fecha:') !!}
        {!! Form::date('fecha', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-10 form-group">
        {!! Form::label('anamnesis', 'Anamnesis:') !!}
        {!! Form::text('anamnesis', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('talla', 'Talla(m):') !!}
                {!! Form::text('talla', null, ['class'=>'form-control decimal','id'=>'talla','maxlength'=>'4','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('peso', 'Peso(Kg):') !!}
                {!! Form::text('peso', null, ['class'=>'form-control numero','id'=>'peso','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('imc', 'IMC:') !!}
                {!! Form::text('imc', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('pabdominal', 'P.Abdominal:') !!}
                {!! Form::text('pabdominal', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('fresp', 'F.Resp(/MIN):') !!}
                {!! Form::text('fresp', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('fcard', 'F.Car(/MIN):') !!}
                {!! Form::text('fcard', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('sato2', 'SatO2:') !!}
                {!! Form::text('sato2', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('temperatura', 'Temperatura:') !!}
                {!! Form::text('temperatura', null, ['class'=>'form-control decimal','maxlength'=>'5','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('cintura', 'Cintura(CM):') !!}
                {!! Form::text('cintura', null, ['class'=>'form-control decimal','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('cadera', 'Cadera(CM):') !!}
                {!! Form::text('cadera', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('torax', 'Torax(CM):') !!}
                {!! Form::text('torax', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('toraxesp', 'T.Expinar(CM):') !!}
                {!! Form::text('toraxesp', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 form-group">
                {!! Form::label('pasisto', 'PA Sistólica:') !!}
                {!! Form::text('pasisto', null, ['class'=>'form-control decimal','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('padisto', 'PA Distólica:') !!}
                {!! Form::text('padisto', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
            </div>
            <div class="col-md-3 form-group">
                {!! Form::label('pa', 'PA:') !!}
                {!! Form::text('pa', null, ['class'=>'form-control','maxlength'=>'7','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('otros', 'Otros:') !!}
        {!! Form::text('otros', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('ectoscopia', 'Ectoscopia:') !!}
        {!! Form::text('ectoscopia', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('estmental', 'Estado Mental:') !!}
        {!! Form::text('estmental', null, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row mt-2">
    <h5 class="colorprin ml-2">
        Hallazgos:
    </h5>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('piel', 'Piel:') !!}
        {!! Form::text('piel', kvfj($detservicio->examedico->hallazgos, 'piel'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('cabeza', 'Cabeza:') !!}
        {!! Form::text('cabeza', kvfj($detservicio->examedico->hallazgos, 'cabeza'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('cuello', 'Cuello:') !!}
        {!! Form::text('cuello', kvfj($detservicio->examedico->hallazgos, 'cuello'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('nariz', 'Nariz:') !!}
        {!! Form::text('nariz', kvfj($detservicio->examedico->hallazgos, 'nariz'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('boca', 'Boca, Amígdalas, Faringe, Laringe:') !!}
        {!! Form::text('boca', kvfj($detservicio->examedico->hallazgos, 'boca'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('piezaeme', 'Piezas en mal Estado:') !!}
        {!! Form::text('piezaeme', kvfj($detservicio->examedico->hallazgos, 'piezaeme'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('piezaf', 'Piezas que Faltan:') !!}
        {!! Form::text('piezaf', kvfj($detservicio->examedico->hallazgos, 'piezaf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Form::label('ojos', 'Ojos y Anexos:') !!}
    </div>
</div>
<div class="row cuadro_ojos">
    <div class="col-md-7">
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th rowspan="2" width="10%" class="align-middle text-center">OJOS</th>
                    <th colspan="2" width="15%" class="align-middle text-center">SIN CORREGIR</th>
                    <th colspan="2" width="15%" class="align-middle text-center">CORREGIDA</th>
                </tr>
                <tr>
                    <th width="7.5%" class="align-middle text-center">OD</th>
                    <th width="7.5%" class="align-middle text-center">OI</th>
                    <th width="7.5%" class="align-middle text-center">OD</th>
                    <th width="7.5%" class="align-middle text-center">OI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">VISIÓN DE CERCA</td>
                    <td>
                        {!! Form::text('vc_sc_od', $detservicio->exaoftalmo->vc_sc_od, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_sc_oi', $detservicio->exaoftalmo->vc_sc_oi, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_cc_od', $detservicio->exaoftalmo->vc_cc_od, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vc_cc_oi', $detservicio->exaoftalmo->vc_cc_oi, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">VISIÓN DE LEJOS</td>
                    <td>
                        {!! Form::text('vl_sc_od', $detservicio->exaoftalmo->vl_sc_od, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_sc_oi', $detservicio->exaoftalmo->vl_sc_oi, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_cc_od', $detservicio->exaoftalmo->vl_cc_od, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                    <td>
                        {!! Form::text('vl_cc_oi', $detservicio->exaoftalmo->vl_cc_oi, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off']) !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                {!! Form::label('oj_enfocu', 'Enfermedades Oculares:') !!}
                {!! Form::text('oj_enfocu', kvfj($detservicio->examedico->hallazgos, 'oj_enfocu'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::label('oj_refpup', 'Reflejos Pupilares:') !!}
                {!! Form::text('oj_refpup', kvfj($detservicio->examedico->hallazgos, 'oj_refpup'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::label('oj_vcol', 'Visión de Colores:') !!}
                {!! Form::text('oj_vcol', kvfj($detservicio->examedico->hallazgos, 'oj_vcol'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::label('oj_vprof', 'Visión de Profundidad:') !!}
                {!! Form::text('oj_vprof', kvfj($detservicio->examedico->hallazgos, 'oj_vprof'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3 form-group">
        {!! Form::label('oidoder', 'Oido Derecho:') !!}
        {!! Form::text('oidoder', $detservicio->exaaudio->oidoder, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('oidoizq', 'Oido Izquierdo:') !!}
        {!! Form::text('oidoizq', $detservicio->exaaudio->oidoizq, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-6 form-group">
        {!! Form::label('aprespira', 'Aparato Respiratorio:') !!}
        {!! Form::text('aprespira', kvfj($detservicio->examedico->hallazgos, 'aprespira'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('apcardio', 'Aparato Cardiovascular:') !!}
        {!! Form::text('apcardio', kvfj($detservicio->examedico->hallazgos, 'apcardio'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('apdiges', 'Aparato Digestivo:') !!}
        {!! Form::text('apdiges', kvfj($detservicio->examedico->hallazgos, 'apdiges'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('aploco', 'Aparato Locomotor:') !!}
        {!! Form::text('aploco', kvfj($detservicio->examedico->hallazgos, 'aploco'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('apgenit', 'Aparato Genitourinario:') !!}
        {!! Form::text('apgenit', kvfj($detservicio->examedico->hallazgos, 'apgenit'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('anillingui', 'Anillos Inguinales:') !!}
        {!! Form::text('anillingui', kvfj($detservicio->examedico->hallazgos, 'anillingui'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label("tactorectal", 'Tacto Rectal:') !!}
        {!! Form::select("tactorectal",[1=>'NO SE HIZO',2=>'NORMAL','3'=>'ANORMAL'],kvfj($detservicio->examedico->hallazgos, 'tactorectal'),['class'=>'custom-select']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('marcha', 'Marcha:') !!}
        {!! Form::text('marcha', kvfj($detservicio->examedico->hallazgos, 'marcha'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('columna', 'Columna Vertebral:') !!}
        {!! Form::text('columna', kvfj($detservicio->examedico->hallazgos, 'columna'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('refleosteo', 'Reflejos Osteo-Tendinosos:') !!}
        {!! Form::text('refleosteo', kvfj($detservicio->examedico->hallazgos, 'refleosteo'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('miesup', 'Miembros Superiores:') !!}
        {!! Form::text('miesup', kvfj($detservicio->examedico->hallazgos, 'miesup'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('mieinf', 'Miembros Inferiores:') !!}
        {!! Form::text('mieinf', kvfj($detservicio->examedico->hallazgos, 'mieinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('sisnerv', 'Sistema Nervioso:') !!}
        {!! Form::text('sisnerv', kvfj($detservicio->examedico->hallazgos, 'sisnerv'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('sislinf', 'Sistema Linfático:') !!}
        {!! Form::text('sislinf', kvfj($detservicio->examedico->hallazgos, 'sislinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('hernia', 'Hernias:') !!}
        {!! Form::text('hernia', kvfj($detservicio->examedico->hallazgos, 'hernia'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('varice', 'Varices:') !!}
        {!! Form::text('varice', kvfj($detservicio->examedico->hallazgos, 'varice'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>    
</div>
<div class="row">
    <div class="col-md-12 form-group">
        {!! Form::label('lenguaje', 'LENGUAJE, ATENCIÓN, MEMORIA, ORIENTACIÓN, INTELIGENCIA, AFECTIVIDAD:') !!}
        {!! Form::text('lenguaje', kvfj($detservicio->examedico->hallazgos, 'lenguaje'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
    </div>  
</div>
