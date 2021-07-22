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
        {!! Form::open(['route'=>'admin.colaboradors.store']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="far fa-user"></i> Colaboradores</h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
							<div class="col-md-3 form-group">
                                {!! Form::label('tipdoc_id', 'Tipo documento:') !!}
								{!! Form::select('tipdoc_id',$tipdoc,'1',['class'=>'custom-select']) !!}
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
                                {!! Form::select('estciv_id',$estciv,null,['class'=>'custom-select','placeholder'=>'']) !!}
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
								{!! Form::select('residencia',[1=>'SI',2=>'NO'],'1',['class'=>'custom-select','datatoggle'=>"tooltip",'title'=>"Reside en el Lugar de Trabajo"]) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('tieresi', 'Tiempo Residencia:',['datatoggle'=>"tooltip",'title'=>"Tiempo de residencia en el Lugar de Trabajo"]) !!}
								{!! Form::text('tieresi', null, ['class'=>'form-control mayuscula','maxlength'=>'10','autocomplete'=>'off','datatoggle'=>"tooltip",'title'=>"Tiempo de residencia en el Lugar de Trabajo"]) !!}
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
								{!! Form::text('nacionalidad', 'PERUANO', ['class'=>'form-control mayuscula','maxlength'=>'30','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('domicilio', 'Domicilio:') !!}
								{!! Form::text('domicilio', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('departamento', 'Departamento:') !!}
                                {!! Form::select('departamento',$departamentos,'20',['class'=>'custom-select', 'id'=>'departamento']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('provincia', 'Provincia:') !!}
                                {!! Form::select('provincia',$provincias,null,['class'=>'custom-select','placeholder'=>'']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ubigeo', 'Ubigeo:') !!}
                                {!! Form::select('ubigeo',[],null,['class'=>'custom-select','placeholder'=>'']) !!}
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
                                {!! Form::select('gradinst_id',$gradins,'01',['class'=>'custom-select','placeholder'=>'']) !!}
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
        // document.getElementById('guardar').addEventListener("click",function(){
        //     // document.getElementById("ape_pat").disabled = false;
        //     // document.getElementById("ape_mat").disabled = false;
        //     // document.getElementById("nombres").disabled = false;
        // });

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
                    $.get(url_global+"/admin/busquedas/"+td+"/"+numdoc+"/0/busapi/",function(response){
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


        
        // document.getElementById('nombre2').addEventListener("blur",function(){
        //     this.value = this.value.toUpperCase();
        //     document.getElementById("razsoc").value = document.getElementById("ape_pat").value + ' '
        //         + document.getElementById("ape_mat").value + ' '
        //         + document.getElementById("nombres").value;// + ' '
        //         // + document.getElementById("nombre2").value;
        // });
    });
</script>
@endsection