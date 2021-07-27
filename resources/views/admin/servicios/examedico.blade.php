{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	{{-- <li class="breadcrumb-item">
		<a href="{{ route('admin.inicio') }}"><i class="fas fa-address-card"></i> Servicios</a>
	</li> --}}
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
                        {{-- {{ dd($detservicio->colaborador->nombres) }} --}}
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Colaborador: <strong> {{ $detservicio->colaborador->numdoc.'-'.$detservicio->colaborador->nombres }}</strong>
                             / Edad: <strong>{{\Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age}} años</strong>
                        </h2>
                    </div>
					<div class="inside">
						{{-- {!! Form::open(['url'=>'/admin/categoria/add/'.$module]) !!} --}}
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
                                {!! Form::label('tieresi', 'Tiempo Residencia:') !!}
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
        <div class="row mtop16 mb-5">
            {!! Form::model($detservicio->examedico, ['route'=>['admin.servicios.updatexamed',$detservicio->examedico], 'method'=> 'put']) !!}
			<div class="col-md-12">
				<div class="panelprin shadow">
                    <div class="headercontent">
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación Médica
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
                        <div class="row">
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
                                        {!! Form::text('talla', null, ['class'=>'form-control decimal','maxlength'=>'4','autocomplete'=>'off']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label('peso', 'Peso(Kg):') !!}
                                        {!! Form::text('peso', null, ['class'=>'form-control numero','maxlength'=>'3','autocomplete'=>'off']) !!}
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
                        <div class="row">
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
                                {!! Form::label('cabello', 'Cabello:') !!}
                                {!! Form::text('cabello', kvfj($detservicio->examedico->hallazgos, 'cabello'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('ojos', 'Ojos y Anexos:') !!}
                                {!! Form::text('ojos', kvfj($detservicio->examedico->hallazgos, 'ojos'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('avod', 'AV. O.Der:',['datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Derecho"]) !!}
                                {!! Form::text('avod', kvfj($detservicio->examedico->hallazgos, 'avod'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Derecho"]) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('avoi', 'AV. O.Izq:',['datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Izquierdo"]) !!}
                                {!! Form::text('avoi', kvfj($detservicio->examedico->hallazgos, 'avoi'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Agudeza Visual - Ojo Izquierdo"]) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('ccod', 'CC. O.Der:',['datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Derecho"]) !!}
                                {!! Form::text('ccod', kvfj($detservicio->examedico->hallazgos, 'ccod'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Derecho"]) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('ccoi', 'CC. O.Izq:',['datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Izquierdo"]) !!}
                                {!! Form::text('ccoi', kvfj($detservicio->examedico->hallazgos, 'ccoi'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Con Correctores - Ojo Izquierdo"]) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('fojo', 'Fondo Ojo:',['datatoggle'=>"tooltip",'title'=>"Fondo Ojo"]) !!}
                                {!! Form::text('fojo', kvfj($detservicio->examedico->hallazgos, 'fojo'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Fondo Ojo"]) !!}
                            </div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('vcolores', 'V.Colores:',['datatoggle'=>"tooltip",'title'=>"Visión de Colores"]) !!}
                                {!! Form::text('vcolores', kvfj($detservicio->examedico->hallazgos, 'vcolores'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Visión de Colores"]) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('vprofundidad', 'Visión Profundidad:',['datatoggle'=>"tooltip",'title'=>"Visión Profundidad"]) !!}
                                {!! Form::text('vprofundidad', kvfj($detservicio->examedico->hallazgos, 'vprofundidad'), ['class'=>'form-control mayuscula','maxlength'=>'7','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Visión Profundidad"]) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('oidos', 'Oidos:') !!}
                                {!! Form::text('oidos', kvfj($detservicio->examedico->hallazgos, 'oidos'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('nariz', 'Nariz:') !!}
                                {!! Form::text('nariz', kvfj($detservicio->examedico->hallazgos, 'nariz'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('boca', 'Boca:') !!}
                                {!! Form::text('boca', kvfj($detservicio->examedico->hallazgos, 'boca'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('faringe', 'Faringe:') !!}
                                {!! Form::text('faringe', kvfj($detservicio->examedico->hallazgos, 'faringe'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('cuello', 'Cuello:') !!}
                                {!! Form::text('cuello', kvfj($detservicio->examedico->hallazgos, 'cuello'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('aprespira', 'Aparato Respiratorio:') !!}
                                {!! Form::text('aprespira', kvfj($detservicio->examedico->hallazgos, 'aprespira'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('apcardio', 'Aparato Cardiovascular:') !!}
                                {!! Form::text('apcardio', kvfj($detservicio->examedico->hallazgos, 'apcardio'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('apdiges', 'Aparato Digestivo:') !!}
                                {!! Form::text('apdiges', kvfj($detservicio->examedico->hallazgos, 'apdiges'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('apgenit', 'Aparato Genitourinario:') !!}
                                {!! Form::text('apgenit', kvfj($detservicio->examedico->hallazgos, 'apgenit'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('aploco', 'Aparato Locomotor:') !!}
                                {!! Form::text('aploco', kvfj($detservicio->examedico->hallazgos, 'aploco'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('marcha', 'Marcha:') !!}
                                {!! Form::text('marcha', kvfj($detservicio->examedico->hallazgos, 'marcha'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('columna', 'Columna:') !!}
                                {!! Form::text('columna', kvfj($detservicio->examedico->hallazgos, 'columna'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('miesup', 'Miembros Superiores:') !!}
                                {!! Form::text('miesup', kvfj($detservicio->examedico->hallazgos, 'miesup'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('mieinf', 'Miembros Inferiores:') !!}
                                {!! Form::text('mieinf', kvfj($detservicio->examedico->hallazgos, 'mieinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label('sislinf', 'Sistema Linfático:') !!}
                                {!! Form::text('sislinf', kvfj($detservicio->examedico->hallazgos, 'sislinf'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label('sisnerv', 'Sistema Nervioso:') !!}
                                {!! Form::text('sisnerv', kvfj($detservicio->examedico->hallazgos, 'sisnerv'), ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="colorprin ml-2">
                                Cuestionario de Síntomas:
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('manicarga', 'Manipulación Carga(Kg):') !!}
                                {!! Form::select('manicarga',[1=>'< 25',2=>'25 - 50',3=>'> 50'],null,['class'=>'custom-select']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('postura', 'Postura Habitual:') !!}
                                {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!}
							</div>
                            <div class="col-md-4">
                                {!! Form::label('postura', 'Movimientos Repetitivos:') !!} <br>
                                <label class="mt-2">
                                    {!! Form::checkbox('mrcabeza', true, kvfj($detservicio->examedico->movrep, 'mrcabeza'),['class' => '']) !!}
                                    CABEZA
                                </label>
                                <label class="ml-4">
                                    {!! Form::checkbox('mrtronco', true, kvfj($detservicio->examedico->movrep, 'mrtronco'),['class' => '']) !!}
                                    TRONCO
                                </label>
                                <label class="ml-4">
                                    {!! Form::checkbox('mrmmss', true, kvfj($detservicio->examedico->movrep, 'mrmmss'),['class' => '']) !!}
                                    MMSS
                                </label>
                                <label class="ml-4">
                                    {!! Form::checkbox('mrmmii', true, kvfj($detservicio->examedico->movrep, 'mrmmii'),['class' => '']) !!}
                                    MMII
                                </label>
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('pertiempo', 'Periodo Tiempo:') !!}
                                {!! Form::text('pertiempo', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')
<script>
    var url_global='{{url("/")}}';
	$(document).ready(function(){
        $('#colaborador_id').select2({
            placeholder:"Ingrese 4 dígitos del Documento o Nombre",
            minimumInputLength: 4,
            ajax:{
                url: "{{ route('admin.busquedas.colaborador') }}",
                dataType:'json',
                delay:250,
                processResults:function(response){
                    return{
                        results: response
                    };
                },
                cache: true,
            }
        });

        $('#area_id').select2({
            placeholder:"Área"
        });
        $('#puesto_id').select2({
            placeholder:"Ocupación"
        });

    });
    function destroycol(){
        // e.preventDefault();
            Swal.fire({
            title: 'Está Seguro de Eliminar el Registro?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.value) {
               this.submit();
            }
            })
    }
</script>
@endsection