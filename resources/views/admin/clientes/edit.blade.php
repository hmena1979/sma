{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Clientes')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.clientes.index') }}"><i class="fab fa-creative-commons-by"></i> Clientes</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        <div class="alert alert-warning" role="alert" style="display:none" id = 'buscando'>
			Buscando número de documento
		</div>
        {!! Form::model($cliente, ['route'=>['admin.clientes.update',$cliente], 'method'=>'put']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fab fa-creative-commons-by"></i> Clientes</h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('tipo', 'Tipo:') !!}
                                {!! Form::select('tipo',[1=>'EMPRESA',2=>'PARTICULAR'],null,['class'=>'custom-select']) !!}
							</div>
							<div class="col-md-2 form-group">
                                {!! Form::label('numdoc', 'Número documento:') !!}
								{!! Form::text('numdoc', null, ['class'=>'form-control','maxlength'=>'15','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-4 form-group">
                                {!! Form::label('razsoc', 'Razón Social o Nombre:') !!}
								{!! Form::text('razsoc', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-4 form-group">
                                {!! Form::label('contacto', 'Contacto:') !!}
								{!! Form::text('contacto', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('direccion', 'Dirección:') !!}
								{!! Form::text('direccion', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('telefono', 'Teléfono:') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control numero','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('celular', 'Celular:') !!}
								{!! Form::text('celular', null, ['class'=>'form-control numero','maxlength'=>'20','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
                                {!! Form::label('email', 'E-mail:') !!}
                                {!! Form::text('email', null, ['class'=>'form-control','maxlength'=>'50','autocomplete'=>'off']) !!}
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-4 form-group">
                                {!! Form::label('actividad', 'Actividad:') !!}
								{!! Form::text('actividad', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('clave', 'Clave:') !!}
								{!! Form::text('clave', null, ['class'=>'form-control mayusculas','maxlength'=>'10','autocomplete'=>'off']) !!}
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

        $('#numdoc').blur(function(e){
            e.preventDefault();
            var td = '0';
            var numdoc = this.value;
            var entidad = '';
            var mensaje = 1;
            let repetido = 0;

            if(this.value.length == 8){
                var td = '1';
                entidad = 'RENIEC';
            }
            if(this.value.length == 11){
                var td = '6';
                entidad = 'SUNAT';
            }
            if((td == '1' || td == '6') && (mensaje == 1)){
                document.getElementById('buscando').style.display = 'block';
                $.get(url_global+"/admin/busquedas/"+td+"/"+numdoc+"/0/busapicli/",function(response){
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
                            document.getElementById("razsoc").value = response['apellidoPaterno'] + ' ' +
                                                                    response['apellidoMaterno'] + ' ' + response['nombres'];
                        }
                        if(td == '6'){
                            // document.getElementById('guardar').style.display = 'block';                                
                            document.getElementById("razsoc").value = response['razonSocial'];
                        }
                    }
                });
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