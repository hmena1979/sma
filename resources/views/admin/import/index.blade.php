{{-- @extends('adminlte::page') --}}
@extends('admin.master')
@section('title','Importar - Carga inicial')
@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ url('/admin/umedidas') }}"><i class="fas fa-file-download"></i> Importar - Carga inicial</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-file-download"></i> Importar - Carga inicial</h2>
					</div>
					<div class="inside">
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Categorias</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/categoria', 'files' => true]) !!}
                                        {{-- @csrf --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Categoria.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Departamento</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/departamento', 'files' => true]) !!}
                                        {{-- @csrf --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Departamento.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Provincias</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/provincia', 'files' => true]) !!}
                                        {{-- @csrf --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Provincia.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Ubigeo</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/ubigeo', 'files' => true]) !!}
                                        {{-- @csrf --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Ubigeo.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Examen</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/examen', 'files' => true]) !!}
                                        {{-- @csrf --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Examen.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Cliente</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/cliente', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Cliente.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row mtop16">
                            <div class="col-md-12">
                                <div class="panelprin shadow">
                                    <div class="headercontent">
                                        <h2 class="title">Importar Comprobantes</h2>
                                    </div>
                                    <div class="inside">
                                        {!! Form::open(['url'=>'/admin/import/comprobantes', 'files' => true]) !!}
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Comprantes.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-danger mtop30']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>				
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row mtop16">
                            <div class="col-md-12">
                                <div class="panelprin shadow">
                                    <div class="headercontent">
                                        <h2 class="title">Importar Afectaciones</h2>
                                    </div>
                                    <div class="inside">
                                        {!! Form::open(['url'=>'/admin/import/afectacion', 'files' => true]) !!}
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Afectacion.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-danger mtop30']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>				
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row mtop16">
                            <div class="col-md-12">
                                <div class="panelprin shadow">
                                    <div class="headercontent">
                                        <h2 class="title">Importar Tipos de NC / ND</h2>
                                    </div>
                                    <div class="inside">
                                        {!! Form::open(['url'=>'/admin/import/tiponota', 'files' => true]) !!}
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo TipoNota.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-danger mtop30']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>				
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row mtop16">
                            <div class="col-md-12">
                                <div class="panelprin shadow">
                                    <div class="headercontent">
                                        <h2 class="title">Importar Detracciones</h2>
                                    </div>
                                    <div class="inside">
                                        {!! Form::open(['url'=>'/admin/import/detraccion', 'files' => true]) !!}
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Detracciones.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-danger mtop30']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>				
                                </div>
                            </div>
                        </div> --}}

                    </div>
				</div>
            </div>
            
        </div>
            
			
	</div>

@endsection
{{-- @section('css')
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">
@stop --}}