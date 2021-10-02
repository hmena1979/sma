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
                            Examen de Drogas en Orina
                        </h2>
                        <ul>
                            @can('admin.informes.edit')
                            <li>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-convertir mt-2','id'=>'guardar']) !!}
                            </li>                                
                            @endcan
                        </ul>
                    </div>
                    <div class="inside">
                        <div class="row mt-1">
                            <div class="col-md-12 form-group">
                                {!! Form::label('confidencial', 'AUTORIZACIÓN PARA EXAMEN DE DROGAS EN ORINA:',['class' => 'colorprin']) !!}
                                @if(empty($detservicio->informe->drogas))
                                {!! Form::textarea('drogas',$drogas,['class'=>'form-control mayuscula', 'id'=>'editor']) !!}
                                @else
                                {!! Form::textarea('drogas',null,['class'=>'form-control mayuscula', 'id'=>'editor']) !!}
                                @endif
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                <strong>MEDICAMENTOS CONSUMIDOS LOS ÚLTIMOS 7 DÍAS:</strong>
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {!! Form::label('novocaina', 'Novocaina:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('novocaina',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('novocaina', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('novocaina',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('novocaina', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('dextrometorfano', 'Dextrometorfano:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('dextrometorfano',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('dextrometorfano', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('dextrometorfano',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('dextrometorfano', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ibuprofeno', 'Ibuprofeno:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('ibuprofeno',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('ibuprofeno', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('ibuprofeno',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('ibuprofeno', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('naproxeno', 'Naproxeno:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('naproxeno',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('naproxeno', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('naproxeno',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('naproxeno', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('ranitidina', 'Ranitidina:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('ranitidina',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('ranitidina', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('ranitidina',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('ranitidina', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                                {!! Form::label('penicilina', 'Penicilina:') !!}
                                {{-- {!! Form::select('postura',[1=>'SENTADO',2=>'DE PIE'],null,['class'=>'custom-select']) !!} --}}
                                <div class="cuadro">
                                    {!! Form::radio('penicilina',1,['class'=>'form-check-input']) !!}
                                    {!! Form::label('penicilina', 'SI',['class' =>'form-check-label mr-2']) !!}
                                    {!! Form::radio('penicilina',2,['class'=>'form-check-input']) !!}
                                    {!! Form::label('penicilina', 'NO',['class' =>'form-check-label']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                {!! Form::label('otros', 'Otros:') !!}
                                {!! Form::text('otros', null, ['class'=>'form-control mayuscula','maxlength'=>'100','autocomplete'=>'off']) !!}
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