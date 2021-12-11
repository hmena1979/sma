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
                                    <h4 class="title colorprin">Permisos Faltantes</h4>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-agregar mt-2" href="{{ route('admin.permisosfaltantes') }}">
                                        Agregar Permisos
                                    </a>
                                </div>
                            </div>
                        </div>
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
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Pruebas Bioquímica</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/prueba', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Prueba.xlsx</label>
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
                            <div class="card-group">
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Observaciones Hemograma</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/obshemog', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Obshemog.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Otros Hemograma</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/otrhemog', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Otrhemog.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Importar Categorias - Orina</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/catorina', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Catorina.xlsx</label>
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
                                    <h4 class="title colorprin">Importar Categorias - Heces</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/cathece', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Cathece.xlsx</label>
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
                                    <h4 class="title colorprin">Importar CIE10</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/cie10', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos Cie10.xlsx</label>
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
                                    <h4 class="title colorprin">Importar Doctores</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/doctor', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos Doctor.xlsx</label>
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
                            <div class="card-group">
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Reportes</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/reporte', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Reporte.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Detalle Reporte</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/detreporte', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo DetReporte.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row mtop16">
                            <div class="card-group">
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Colaboradores</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/colaborador', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos Colaborador.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Antecedente Familiar - Colaborador</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/colantfamiliar', 'files' => true]) !!}
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label for="archivo" class="">Archivo:</label>
                                                    <div class="custom-file">
                                                        {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                        <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos Colaborador.xlsx</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="card-group">
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Antecedente Patologico - Colaborador</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/colantpatologico', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos Colaborador.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="card w-50 ml-2">
                                    <div class="card-header">
                                        <h4 class="title colorprin">Importar Antecedente Ocupacional - Colaborador</h4>
                                    </div>
                                    <div class="card-body">
                                        {!! Form::open(['url'=>'/admin/import/colantocupacional', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivos AntOcupacional.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mtop16">
                            <div class="card w-100 ml-2">
                                <div class="card-header">
                                    <h4 class="title colorprin">Prueba DNI</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::open(['url'=>'/admin/import/dni', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="archivo" class="">Archivo:</label>
                                                <div class="custom-file">
                                                    {!! Form::file('archivo', ['class'=>'custom-file-input','id'=>'customFile', 'accept'=>'.xlsx']) !!}
                                                    <label class="custom-file-label" for="customFile" data-browse="Buscar">Buscar archivo Prueba.xlsx</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::submit('Importar', ['class'=>'btn btn-convertir mtop25']) !!}

                                            </div>
                                        </div>
                                    {!! Form::close() !!}
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