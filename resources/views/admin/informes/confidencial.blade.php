{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Servicios')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.servicios.evaluacion',$detservicio) }}"><i class="fas fa-address-card"></i> Evaluación</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid mb-4">
		@include('admin.examens.cabecera')
        <div class="row mtop16">
            <div class="col-md-12">
                {{-- {{ dd($detservicio->informe->confidencial) }} --}}
                {!! Form::model($detservicio->informe, ['route'=>['admin.informes.updatinforme',$detservicio->informe], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Informe Confidencial
                        </h2>
                        <ul>
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2','id'=>'guardar']) !!}
                            </li>
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row mt-1">
                            <div class="col-md-12 form-group">
                                {!! Form::label('confidencial', 'INFORME:',['class' => 'colorprin']) !!}
                                @if(empty($detservicio->informe->confidencial))
                                {!! Form::textarea('confidencial',$confidencial,['class'=>'form-control mayuscula', 'id'=>'editor']) !!}
                                @else
                                {!! Form::textarea('confidencial',null,['class'=>'form-control mayuscula', 'id'=>'editor']) !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    

                </div>
                {!! Form::close() !!}
            </div>
        </div>
	</div>
@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}
@section('script')
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script> --}}
<script src="{{ asset('/static/js/ckeditor.js') }}"></script>
<script>
    var url_global='{{url("/")}}';
    $(document).ready(function(){
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    });
</script>
@endsection