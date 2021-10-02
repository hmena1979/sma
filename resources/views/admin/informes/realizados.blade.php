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
                {!! Form::model($detservicio->informe, ['route'=>['admin.informes.updatrealizados',$detservicio->informe], 'method'=> 'put']) !!}
                <div class="panelprin shadow">
                    <div class="headercontent">
                        <h2 class="title"><i class="fas fa-address-card"></i>
                            Examenes Realizados
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
                        <div class="row mt-2">
                            <h5 class="colorprin ml-2">
                                <strong>EXÁMENES REALIZADOS:</strong>
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'medica', kvfa($detservicio->informe->examenes,'medica'),['class' => '']) !!}
                                            Examen Médico Ocupacional
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'oftalmo', kvfa($detservicio->informe->examenes,'oftalmo'),['class' => '']) !!}
                                            Evaluación Oftalmológica
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'derma', kvfa($detservicio->informe->examenes,'derma'),['class' => '']) !!}
                                            Evaluación Dermatolófica
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'osteo', kvfa($detservicio->informe->examenes,'osteo'),['class' => '']) !!}
                                            Evaluación Osteomuscular
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'neuro', kvfa($detservicio->informe->examenes,'neuro'),['class' => '']) !!}
                                            Evaluación Neurológica
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'audio', kvfa($detservicio->informe->examenes,'audio'),['class' => '']) !!}
                                            Audiometría
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'espiro', kvfa($detservicio->informe->examenes,'espiro'),['class' => '']) !!}
                                            Espirometría
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'electro', kvfa($detservicio->informe->examenes,'electro'),['class' => '']) !!}
                                            Electrocardiograma
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'odonto', kvfa($detservicio->informe->examenes,'odonto'),['class' => '']) !!}
                                            Evaluación Odontológica
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'psicologica', kvfa($detservicio->informe->examenes,'psicologica'),['class' => '']) !!}
                                            Evaluación Psicológica
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'psicosometrico', kvfa($detservicio->informe->examenes,'psicosometrico'),['class' => '']) !!}
                                            Examen Psicosensométrico
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'altura', kvfa($detservicio->informe->examenes,'altura'),['class' => '']) !!}
                                            Examen de Altura
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'esfuerzo', kvfa($detservicio->informe->examenes,'esfuerzo'),['class' => '']) !!}
                                            Prueba de Esfuerzo
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'wood', kvfa($detservicio->informe->examenes,'wood'),['class' => '']) !!}
                                            Luz de WOOD
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'nikolsky', kvfa($detservicio->informe->examenes,'nikolsky'),['class' => '']) !!}
                                            Maniobra de NIKOLSKY
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'hemograma', kvfa($detservicio->informe->examenes,'hemograma'),['class' => '']) !!}
                                            Hemograma
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'glucosa', kvfa($detservicio->informe->examenes,'glucosa'),['class' => '']) !!}
                                            Glucosa
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'urea', kvfa($detservicio->informe->examenes,'urea'),['class' => '']) !!}
                                            Urea
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'creatina', kvfa($detservicio->informe->examenes,'creatina'),['class' => '']) !!}
                                            Creatinina
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'lipido', kvfa($detservicio->informe->examenes,'lipido'),['class' => '']) !!}
                                            Perfil Lípido
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'transaminasas', kvfa($detservicio->informe->examenes,'transaminasas'),['class' => '']) !!}
                                            Transaminasas
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'aglutinaciones', kvfa($detservicio->informe->examenes,'aglutinaciones'),['class' => '']) !!}
                                            Aglutinaciones
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'rtorax', kvfa($detservicio->informe->examenes,'rtorax'),['class' => '']) !!}
                                            Radiografía de Torax
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'rlumbarf', kvfa($detservicio->informe->examenes,'rlumbarf'),['class' => '']) !!}
                                            Rx de Columna Lumbar F
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'carboxihemoglobina', kvfa($detservicio->informe->examenes,'carboxihemoglobina'),['class' => '']) !!}
                                            Carboxihemoglobina
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'psa', kvfa($detservicio->informe->examenes,'psa'),['class' => '']) !!}
                                            PSA
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'orina', kvfa($detservicio->informe->examenes,'orina'),['class' => '']) !!}
                                            Examen de Orina
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'parasitologico', kvfa($detservicio->informe->examenes,'parasitologico'),['class' => '']) !!}
                                            Examen de Parasitológico
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'drogas', kvfa($detservicio->informe->examenes,'drogas'),['class' => '']) !!}
                                            Dosaje de Drogas en Orina
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'esputo', kvfa($detservicio->informe->examenes,'esputo'),['class' => '']) !!}
                                            Basiloscopia: Bk en Esputo
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'psf', kvfa($detservicio->informe->examenes,'psf'),['class' => '']) !!}
                                            Grupo Sanguineo y Factor
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'vdrl', kvfa($detservicio->informe->examenes,'vdrl'),['class' => '']) !!}
                                            VDRL Cuantitativo
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'confinado', kvfa($detservicio->informe->examenes,'confinado'),['class' => '']) !!}
                                            Test para espacios confinados
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'coronario', kvfa($detservicio->informe->examenes,'coronario'),['class' => '']) !!}
                                            Riesgo Coronario
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'embarazo', kvfa($detservicio->informe->examenes,'embarazo'),['class' => '']) !!}
                                            Test de Embarazo
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'rlumbar', kvfa($detservicio->informe->examenes,'rlumbar'),['class' => '']) !!}
                                            Radiografía de Columna Lumbar
                                        </label><br>
                                        <label>
                                            {!! Form::checkbox('examenes[]', 'rlumbarl', kvfa($detservicio->informe->examenes,'rlumbarl'),['class' => '']) !!}
                                            Rx de Columna Lumbar L
                                        </label>
                                    </div>
                                </div>
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