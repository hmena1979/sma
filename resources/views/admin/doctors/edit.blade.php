@extends('admin.master')
@section('title','Doctores')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin/doctors/all') }}"><i class="fas fa-user-md"></i> Doctores</a>
	</li>
@endsection

@section('contenido')
<div class="container-fluid">
        {!! Form::model($doctor,['route'=>['admin.doctors.update',$doctor],'method'=>'put','files' => true]) !!}
		<div class="row">
			<div class="col-md-10 d-flex">
				<div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-user-md"></i> Doctores</h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2', 'id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
							<div class="col-md-1 form-group">
								{!! Form::label('activo', 'Activo') !!}
								{!! Form::select('activo',['1'=>'Si','2'=>'No'],null,['class'=>'custom-select']) !!}	
							</div>
							<div class="col-md-5 form-group">
								{!! Form::label('nombre', 'Nombre') !!}
								{!! Form::text('nombre', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 form-group">
								{!! Form::label('especialidad', 'Especialidad') !!}
								{!! Form::text('especialidad', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-2 form-group">
								{!! Form::label('cmp', 'CMP') !!}
								{!! Form::text('cmp', null, ['class'=>'form-control mayuscula','autocomplete'=>'off']) !!}
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 form-group">
								{!! Form::label('telefono', 'Teléfono') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control numero','autocomplete'=>'off']) !!}
							</div>
							<div class="col-md-2 form-group">
								{!! Form::label('celular', 'Celular') !!}
								{!! Form::text('celular', null, ['class'=>'form-control numero','autocomplete'=>'off']) !!}
							</div>
                            <div class="col-md-4 oculto">
                                {!! Form::file('firma', ['id' => 'firma', 'accept'=>'image/*']) !!}
                            </div>
						</div>
						{{-- <div class="row mtop16">
							<div class="col-md-6">
								<label for="doctor_id">Doctor asignado al usuario:</label>
								{!! Form::select('doctor_id',$doctores,1,['class'=>'custom-select']) !!}	
							</div>
						</div> --}}
                        
					</div>				
				</div>
			</div>
            <div class="col-md-2 d-flex">
				<div class="panelprin shadow">
					<div class="inside">
                        <div class="row justify-content-center">
                            @if ($doctor->firma)
                            <img id='imgfirma' class="img img-fluid" src="{{ url('firmas/'.$doctor->firma) }}" alt="">
                            @else    
                            <img id='imgfirma' class="img img-fluid" src="{{ url('/static/images/sinfirma.png') }}" alt="">
                            @endif
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col-md-12">
                                <a class="btn btn-convertir" href="#" id="btnfirma">Modificar Firma</a>
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
    $(document).ready(function(){
        $('#btnfirma').click(function(){
            $('#firma').click();
        });
    });
    document.getElementById('firma').addEventListener('change',cambiarImagen);

    function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById('imgfirma').setAttribute('src',event.target.result);
        }
        reader.readAsDataURL(file);
    }
</script>

@endsection