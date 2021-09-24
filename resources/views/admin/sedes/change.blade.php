@extends('admin.master')
@section('title','Sedes')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.sedes.index') }}"><i class="fas fa-boxes"></i> Sedes</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
        {!! Form::open(['route'=>'admin.sedes.postchange']) !!}
		<div class="row">
			<div class="col-md-12">
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-boxes"></i> Cambiar Sede</h2>
                        <ul>
                            {{-- <li>
                                
                            </li> --}}
                        </ul>
                    </div>
					<div class="inside">
						<div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('sede', 'Sede*:') !!}
                                {!! Form::select('sede',$sedes,session('sede'),['class'=>'custom-select']) !!}
							</div>
							<div class="col-md-1">
								{!! Form::submit('Cambiar', ['class'=>'btn btn-convertir mtop20', 'id'=>'guardar']) !!}
							</div>
						</div>
						<div class="mt-2 colorprin">
							(*)La <b>Sede</b> solo se cambiará para la <b>sesión actual</b>, si desea hacerlo de manera definitiva cambie la sede de su <b>Usuario</b>.
							<br>
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
    });
</script>
@endsection