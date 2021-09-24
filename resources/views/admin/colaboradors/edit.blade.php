{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Colaboradores')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.colaboradors.index') }}"><i class="far fa-user"></i> Colaboradores</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        <div class="alert alert-warning" role="alert" style="display:none" id = 'buscando'>
			Buscando número de documento
		</div>
        {!! Form::model($colaborador, ['route'=>['admin.colaboradors.update',$colaborador],'method' => 'put']) !!}
        {!! Form::hidden('id',null,['id'=>'id']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="far fa-user"></i> Colaborador: <strong>{{ $colaborador->nombres }}</strong></h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
							<div class="col-md-3 form-group">
                                {!! Form::label('tipdoc_id', 'Tipo documento:') !!}
								{!! Form::select('tipdoc_id',$tipdoc,null,['class'=>'custom-select']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('numdoc', 'Número documento:') !!}
								{!! Form::text('numdoc', null, ['class'=>'form-control','maxlength'=>'15','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('apellido', 'Apellidos:') !!}
								{!! Form::text('apellido', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-4 form-group">
                                {!! Form::label('nombre', 'Nombres:') !!}
								{!! Form::text('nombre', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
							</div>
						</div>
						<div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('sexo_id', 'Sexo:') !!}
                                {!! Form::select('sexo_id',$sexo,null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>                            
							<div class="col-md-2 form-group">
                                {!! Form::label('estciv_id', 'Estado Civil:') !!}
                                {!! Form::select('estciv_id',$estciv,null,['class'=>'custom-select']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('fecnac', 'Fecha nacimiento:') !!}
								{!! Form::date('fecnac', null, ['class'=>'form-control','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('lugnac', 'Lugar nacimiento:') !!}
								{!! Form::text('lugnac', null, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-1 form-group">
                                {!! Form::label('residencia', 'Residencia:',['datatoggle'=>"tooltip",'title'=>"Reside en el Lugar de Trabajo"]) !!}
								{!! Form::select('residencia',[1=>'SI',2=>'NO'],null,['class'=>'custom-select','datatoggle'=>"tooltip",'title'=>"Reside en el Lugar de Trabajo"]) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tieresi', 'Tiempo Residencia:',['datatoggle'=>"tooltip",'title'=>"Tiempo de residencia en el Lugar de Trabajo"]) !!}
								{!! Form::text('tieresi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Tiempo de residencia en el Lugar de Trabajo"]) !!}
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
								{!! Form::text('nacionalidad', null, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('domicilio', 'Domicilio:') !!}
								{!! Form::text('domicilio', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('departamento', 'Departamento:') !!}
                                {!! Form::select('departamento',$departamentos,null,['class'=>'custom-select', 'id'=>'departamento']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('provincia', 'Provincia:') !!}
                                {!! Form::select('provincia',$provincias,null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ubigeo', 'Ubigeo:') !!}
                                {!! Form::select('ubigeo',$ubigeo,null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>
                        </div>
						<div class="row">
							<div class="col-md-3 form-group">
                                {!! Form::label('email', 'E-mail:') !!}
								{!! Form::text('email', null, ['class'=>'form-control','maxlength'=>'50','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('telefono', 'Teléfono:') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control numero','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-3 form-group">
                                {!! Form::label('gradinst_id', 'Grado Instrucción:') !!}
                                {!! Form::select('gradinst_id',$gradins,null,['class'=>'custom-select']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('numhijos', '# Hijos:') !!}
								{!! Form::text('numhijos', null, ['class'=>'form-control numero','maxlength'=>'2','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('numdepend', '# Dependientes:') !!}
								{!! Form::text('numdepend', null, ['class'=>'form-control numero','maxlength'=>'2','autocomplete'=>'off']) !!}
							</div>
						</div>
                        
						
					</div>
				</div>
			</div>
            
		</div>
        {{-- //Antecedentes Ocupacionales --}}
        <div class="row mtop16">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title">Antecedentes Ocupacionales</h2>
                        <ul>
                            <li>
                                <button type="button" class="btn btn-convertir mt-2" data-toggle="modal" data-target="#ingantecedente" onclick="limpia('{{ $colaborador->id }}');">
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
        {{-- Antecedentes Patalógicos --}}
        <div class="row mtop16">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title">Antecedentes Patológicos</h2>
                    </div>
					<div class="inside">
                        <div class="row">
                            <div class="col-md-1 form-group">
                                {!! Form::label("colantpatologicos[alergias]", 'Alergias:') !!}
								{!! Form::select("colantpatologicos[alergias]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->alergias,['class'=>'custom-select', 'id'=>'alergias']) !!}
							</div>
                            <div class="col-md-5 form-group">
                                {!! Form::label('colantpatologicos[descalergias]', 'Detalle:') !!}
								{!! Form::text('colantpatologicos[descalergias]', $colaborador->colantpatologico->descalergias, ['class'=>'form-control mayuscula activo', 'id'=>'descalergias','maxlength'=>'40','autocomplete'=>'off','disabled']) !!}
							</div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        {!! Form::label("colantpatologicos[diabetes]", 'Diabetes:') !!}
                                        {!! Form::select("colantpatologicos[diabetes]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->diabetes,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label("colantpatologicos[tbc]", 'TBC:') !!}
                                        {!! Form::select("colantpatologicos[tbc]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->tbc,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-4 form-group">
                                        {!! Form::label("colantpatologicos[hepatitis]", 'Hepatitis:') !!}
                                        {!! Form::select("colantpatologicos[hepatitis]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->hepatitis,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[asma]", 'Asma:') !!}
                                        {!! Form::select("colantpatologicos[asma]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->asma,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[hta]", 'HTA:') !!}
                                        {!! Form::select("colantpatologicos[hta]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->its,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[its]", 'ITS:') !!}
                                        {!! Form::select("colantpatologicos[its]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->its,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[tifoidea]", 'Tifoidea:') !!}
                                        {!! Form::select("colantpatologicos[tifoidea]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->tifoidea,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[bronquitis]", 'Bronquitis:') !!}
                                        {!! Form::select("colantpatologicos[bronquitis]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->bronquitis,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[neoplasia]", 'Neoplasia:') !!}
                                        {!! Form::select("colantpatologicos[neoplasia]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->neoplasia,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[convulsion]", 'Convulsión:') !!}
                                        {!! Form::select("colantpatologicos[convulsion]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->convulsion,['class'=>'custom-select']) !!}
                                    </div>
                                    <div class="col-md-3 form-group">
                                        {!! Form::label("colantpatologicos[intoxicacion]", 'Intoxicación:') !!}
                                        {!! Form::select("colantpatologicos[intoxicacion]",[1=>'SI',2=>'NO'],$colaborador->colantpatologico->intoxicacion,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label("colantpatologicos[medicamento]", 'Medicamentos:') !!}
								{!! Form::text('colantpatologicos[medicamento]', $colaborador->colantpatologico->medicamento, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label("colantpatologicos[quemadura]", 'Quemadura:') !!}
                                {!! Form::text('colantpatologicos[quemadura]', $colaborador->colantpatologico->quemadura, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                {!! Form::label("colantpatologicos[cirugia]", 'Cirugía:') !!}
								{!! Form::text('colantpatologicos[cirugia]', $colaborador->colantpatologico->cirugia, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-6 form-group">
                                {!! Form::label("colantpatologicos[otros]", 'Otros:') !!}
                                {!! Form::text('colantpatologicos[otros]', $colaborador->colantpatologico->otros, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[alcohol]", 'Frecuencia Alcohol:') !!}
								{!! Form::text('colantpatologicos[alcohol]', $colaborador->colantpatologico->alcohol, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[tabaco]", 'Frecuencia Tabaco:') !!}
                                {!! Form::text('colantpatologicos[tabaco]', $colaborador->colantpatologico->tabaco, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[droga]", 'Frecuencia Drogas:') !!}
                                {!! Form::text('colantpatologicos[droga]', $colaborador->colantpatologico->droga, ['class'=>'form-control mayuscula','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[antpersonal]", 'Antecedente Personal:') !!}
								{!! Form::text('colantpatologicos[antpersonal]', $colaborador->colantpatologico->antpersonal, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[antfamiliar]", 'Antecedente Familiar:') !!}
                                {!! Form::text('colantpatologicos[antfamiliar]', $colaborador->colantpatologico->antfamiliar, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-4 form-group">
                                {!! Form::label("colantpatologicos[inmunizaciones]", 'Inmunizaciones:') !!}
                                {!! Form::text('colantpatologicos[inmunizaciones]', $colaborador->colantpatologico->inmunizaciones, ['class'=>'form-control mayuscula','maxlength'=>'255','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Antecedentes Patalógicos Familiares / Enfermedad y Accidentes Laborales --}}
        <div class="row mtop16 mbottom16">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title">Antecedentes Patológicos Familiares / Enfermedad y Accidentes Laborales</h2>
                    </div>
					<div class="inside">
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[padre]", 'Padre:') !!}
								{!! Form::text('colantfamiliar[padre]', $colaborador->colantfamiliar->padre, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[madre]", 'Madre:') !!}
                                {!! Form::text('colantfamiliar[madre]', $colaborador->colantfamiliar->madre, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[hermano]", 'Hermano:') !!}
                                {!! Form::text('colantfamiliar[hermano]', $colaborador->colantfamiliar->hermano, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[esposo]", 'Esposo:') !!}
                                {!! Form::text('colantfamiliar[esposo]', $colaborador->colantfamiliar->esposo, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[hijo_viv]", 'Hijos Vivos:') !!}
                                {!! Form::text('colantfamiliar[hijo_viv]', $colaborador->colantfamiliar->hijo_viv, ['class'=>'form-control mayuscula', 'id'=>'hijo_viv','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[hijo_fall]", 'Hijos Fallecidos:') !!}
                                {!! Form::text('colantfamiliar[hijo_fall]', $colaborador->colantfamiliar->hijo_fall, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            {!! Form::label("titulo1", 'Absentismo: Enfermedades y Accidentes(asociado a trabajo o no)',['class'=>'colorprin ml-2 mb-2']) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label("colantfamiliar[enfact1]", 'Enfermedad Accidente(I):') !!}
								{!! Form::text('colantfamiliar[enfact1]', $colaborador->colantfamiliar->enfact1, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[asoctrab1]", 'Asociado Trabajo:') !!}
								{!! Form::select("colantfamiliar[asoctrab1]",[1=>'SI',2=>'NO'],$colaborador->colantfamiliar->asoctrab1,['class'=>'custom-select']) !!}
							</div>
                            <div class="col-md-1 form-group">
                                {!! Form::label("colantfamiliar[anio1]", 'Año:') !!}
								{!! Form::text('colantfamiliar[anio1]', $colaborador->colantfamiliar->anio1, ['class'=>'form-control numero','maxlength'=>'4','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[diasdesc1]", 'Días descanso:') !!}
								{!! Form::text('colantfamiliar[diasdesc1]', $colaborador->colantfamiliar->diasdesc1, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label("colantfamiliar[enfact2]", 'Enfermedad Accidente(II):') !!}
								{!! Form::text('colantfamiliar[enfact2]', $colaborador->colantfamiliar->enfact2, ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[asoctrab2]", 'Asociado Trabajo:') !!}
								{!! Form::select("colantfamiliar[asoctrab2]",[1=>'SI',2=>'NO'],$colaborador->colantfamiliar->asoctrab2,['class'=>'custom-select']) !!}
							</div>
                            <div class="col-md-1 form-group">
                                {!! Form::label("colantfamiliar[anio2]", 'Año:') !!}
								{!! Form::text('colantfamiliar[anio2]', $colaborador->colantfamiliar->anio2, ['class'=>'form-control numero','maxlength'=>'4','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label("colantfamiliar[diasdesc2]", 'Días descanso:') !!}
								{!! Form::text('colantfamiliar[diasdesc2]', $colaborador->colantfamiliar->diasdesc2, ['class'=>'form-control mayuscula','maxlength'=>'20','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')
<script>
    var url_global='{{url("/")}}';
    $(document).ready(function(){
        verao();
        $('#guardar').click(function(){
            $('#descalergias').prop('disabled',false);
        });

        $('#departamento').select2({
            placeholder:"Departamento"
        });

        $('#provincia').select2({
            placeholder:"Provincia"
        });

        $('#ubigeo').select2({
            placeholder:"Ubigeo"
        });

        $('#departamento').on('select2:close',function(){
            var departamento = this.value;
            $.get(url_global+"/admin/busquedas/"+departamento+"/provincia/",function(response){
                $('#provincia').empty();
                for(i=0;i<response.length;i++){
                    $('#provincia').append("<option value='"+response[i].codigo+"'>"
                        + response[i].nombre
                        + "</option>");
                }
                $('#provincia').val(null);
                $('#ubigeo').empty();
            });
        });

        $('#provincia').on('select2:close',function(){
            var provincia = this.value;
            $.get(url_global+"/admin/busquedas/"+provincia+"/ubigeo/",function(response){
                $('#ubigeo').empty();
                for(i=0;i<response.length;i++){
                    $('#ubigeo').append("<option value='"+response[i].codigo+"'>"
                        + response[i].nombre
                        + "</option>");
                }
                // $('#ubigeo').val(null);
            });
        });

        $('#numdoc').blur(function(e){
            e.preventDefault();
            var id = $('#id').val();
            var td = $('#tipdoc_id').val();
            var numdoc = this.value;
            var entidad = '';
            var mensaje = 1;
            let repetido = 0;

            if(td == '1'){
                entidad = 'RENIEC';
            }
            if(numdoc.length != 0){
                if(td == '1' && numdoc.length != 8){
                    mensaje = 0;
                    this.focus();
                    // alert('DNI debe contener 8 dígitos');
                    Swal.fire(
                        'Error!',
                        'DNI debe contener 8 dígitos!',
                        'error'
                        );
                        return false;
                }

                if((td == '1') && (mensaje == 1)){
                    document.getElementById('buscando').style.display = 'block';
                    $.get(url_global+"/admin/busquedas/"+td+"/"+numdoc+"/"+id+"/busapi/",function(response){
                        document.getElementById('buscando').style.display = 'none';
                        if(response['success'] == false){
                            Swal.fire(
                                'Error!',
                                'Documento no existe en la Base de datos de ' + entidad,
                                'error'
                                );
                        }else if(response == 'REPETIDO'){
                            Swal.fire(
                                'Error!',
                                'Número de documento ya se encuentra registrado',
                                'error'
                                );
                            $('#numdoc').val(null);
                        }else{
                            if(td == '1'){
                                // document.getElementById('guardar').style.display = 'block';                                
                                document.getElementById("apellido").value = response['apellidoPaterno'] + ' ' + response['apellidoMaterno'];
                                document.getElementById("nombre").value = response['nombres'];
                            }
                        }
                    });
                }
                
            }
        });

        $('#numhijos').blur(function(){
            $('#hijo_viv').val(this.value);
        });

        $('#addantecedente').click(function(){
            var ant = {
                'tipo':$('#tipo_i').val(),
                'id':$('#id_i').val(),
                'empresa':$('#empresa_i').val(),
                'area':$('#area_i').val(),
                'puesto':$('#puesto_id_i').val(),
                'fecha':$('#fecha_i').val(),
                'tiempo':$('#tiempo_i').val(),
                'exposicion':$('#exposicion_i').val(),
                'epp':$('#epp_i').val(),
                'cretiro':$('#cretiro_i').val()
            };

            var envio = JSON.stringify(ant);

            $.get(url_global+"/admin/colaboradors/"+envio+"/addao/",function(response){
                verao();
            });
        });

        $('#alergias').change(function(){
            if(this.value == 1){
                $('#descalergias').prop('disabled',false);
            }else{
                $('#descalergias').prop('disabled',true);
                $('#descalergias').val(null);
            }
        });



        
        // document.getElementById('nombre2').addEventListener("blur",function(){
        //     this.value = this.value.toUpperCase();
        //     document.getElementById("razsoc").value = document.getElementById("ape_pat").value + ' '
        //         + document.getElementById("ape_mat").value + ' '
        //         + document.getElementById("nombres").value;// + ' '
        //         // + document.getElementById("nombre2").value;
        // });
    });

    function verao(){
        var colaborador = $('#id').val();
        $.get(url_global+"/admin/colaboradors/"+colaborador+"/tabla_ao/",function(response){
            $('#tantocupa').empty();
            $('#tantocupa').html(response);
        });
    }

    function editao(id){
        $('#tipo_i').val(2),
        $.get(url_global+"/admin/colaboradors/"+id+"/busao/",function(response){
            $('#id_i').val(id),
            $('#empresa_i').val(response['empresa']),
            $('#area_i').val(response['area_id']),
            $('#area_i').select2();
            $('#area_i').select2({
                placeholder:"Área",
                dropdownParent: $('#ingantecedente')
            });
            $('#puesto_id_i').val(response['puesto_id']),
            $('#puesto_id_i').select2();
            $('#puesto_id_i').select2({
                placeholder:"Ocupación",
                dropdownParent: $('#ingantecedente')
            });
            $('#fecha_i').val(response['fecha']),
            $('#tiempo_i').val(response['tiempo']),
            $('#exposicion_i').val(response['exposicion']),
            $('#epp_i').val(response['epp']),
            $('#cretiro_i').val(response['cretiro'])
        });
    }

    function destroyao(id){
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
                $.get(url_global+"/admin/colaboradors/"+id+"/destroyao/",function(response){
                    verao();
                });
            }
            })
    }

    function limpia(id){
        $('#tipo_i').val(1);
        $('#id_i').val(id);
        $('#empresa_i').val(null);
        $('#area_i').val('1');
        $('#area_i').select2();
        $('#area_i').select2({
                placeholder:"Área",
                dropdownParent: $('#ingantecedente')
            });
        $('#puesto_id_i').val('1');
        $('#puesto_id_i').select2();
        $('#puesto_id_i').select2({
                placeholder:"Ocupación",
                dropdownParent: $('#ingantecedente')
            });
        $('#fecha_i').val(null);
        $('#tiempo_i').val(null);
        $('#exposicion_i').val(null);
        $('#epp_i').val(null);
        $('#cretiro_i').val(null);
    }
</script>
@endsection