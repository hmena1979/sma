{{-- @extends('adminlte::page') --}}
@extends('admin.master')

@section('title','Colaboradores')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.colaboradors.index') }}"><i class="far fa-user"></i> Colaboradores</a>
	</li>
@endsection

@section('contenido')
	{{-- @parent --}}
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="far fa-user"></i> Colaboradores</h2>
						<ul>
							@can('admin.colaboradors.create')
							<li>
								<a href="{{ route('admin.colaboradors.create') }}">
									Agregar registro
								</a>
							</li>
							@endcan
							
							{{-- <li>
								<a class="mt-1" href="#">
									Filtrar <i class="fas fa-angle-down"></i></a>
								<ul class="shadow">
									<li><a href="{{ url('/admin/usuarios/1') }}"><i class="fas fa-eye"></i> Activos</a></li>
									<li><a href="{{ url('/admin/usuarios/2') }}"><i class="fas fa-eye-slash"></i> No Activos</a></li>
									<li><a href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-globe"></i> Todos</a></li>
								</ul>
							</li> --}}
						</ul>
					</div>
					<div class="inside">
						<table id= "colregistro" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="60%">Nombre</th>
									<th width="10%">N° Doc</th>
									<th width="10%">F.Nacim</th>
									<th width="10%">Teléfono</th>
									<th width="10%"></th>
								</tr>
							</thead>
							{{-- <tbody>
								@foreach($colaboradors as $colaborador)
								<tr>
									<td>{{ $colaborador->nombres }}</td>
									<td>{{ $colaborador->numdoc }}</td>
									<td>{{ $colaborador->fecnac }}</td>
									<td>{{ $colaborador->telefono }}</td>
									<td>
										<div class="opts">
											@can('admin.colaboradors.edit')
											<a class="" href="{{ route('admin.colaboradors.edit',$colaborador) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
										</div>
									</td>
								</tr>
								@endforeach
							</tbody> --}}
						</table>
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
		$('#colregistro').DataTable({
           "processing": true,
            "serverSide": true,
            "paging": true,
            "ordering": true,
            "info": true,
            "language":{
                "info": "_TOTAL_ Registros",
                "search": "Buscar",
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                    },
                "lengthMenu": "Mostrar <select>"+
                    "<option value='10'>10</option>"+
                    "<option value='25'>25</option>"+
                    "<option value='50'>50</option>"+
                    "<option value='100'>100</option>"+
                    "<option value='-1'>Todos</option>"+
                    "</select> Registros"
            },
            "ajax": "{{ url('/admin/colaboradors/registro') }}",
            "columns": [
                {data: 'nombres'},
                {data: 'numdoc'},
                {data: 'fecnac'},
                {data: 'telefono'},
				{data: 'btn'}
                ]
            });
		
	});
</script>
@endsection