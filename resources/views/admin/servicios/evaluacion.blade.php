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
		<div class="row mtop16">
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
		</div>
        <div class="row mtop16 mb-5">
			<div class="col-md-12">
				<div class="panelprin shadow">
                    {{-- {!! Form::model($detservicio, ['route'=>['admin.servicios.updatevaluacion',$detservicio], 'method'=> 'put']) !!} --}}
                    <div class="headercontent">
                        {{-- {{ dd($detservicio->colaborador->nombres) }} --}}
						<h2 class="title"><i class="fas fa-address-card"></i>
                            Evaluación
                        </h2>
                        <ul>
                            <li>
                                {{-- {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2']) !!} --}}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
                        @if(kvfa($detservicio->servicio->examenes,'1'))
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('emedica', 'Médica:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('emresultado',$resultado,'0',['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('emconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('admin.servicios.examedico',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'5'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('epsico', 'Psicológico:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('epsresultado',$resultado,0,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {!! Form::text('epsconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'3'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eoftalmo', 'Oftalmológica:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eofresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eofconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>                            
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'4'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eodonto', 'Odontológico:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eodresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eodconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'9'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eradio', 'Radiográfico:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eradresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eradconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'6'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eekg', 'EKG:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eekgresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eekgconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'8'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eespiro', 'Espirometría:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eespresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eespconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'2'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('eaudio', 'Audiometría:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('eaudresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('eaudconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                        @if(kvfa($detservicio->servicio->examenes,'7'))
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        {!! Form::label('ederma', 'Dermatológico:',['class' => 'mt-2']) !!}
                                    </div>
                                    <div class="col-md-8">
                                        {!! Form::select('edermresultado',$resultado,null,['class'=>'custom-select']) !!}
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                {!! Form::text('edermconclusion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('admin/inicio') }}" class="btn btn-convertir" target="_blank" datatoggle="tooltip" data-placement="top" title="Evaluación Médica">
                                    Examen
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
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