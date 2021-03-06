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
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fab fa-creative-commons-by"></i> Clientes</h2>
						<ul>
							@can('admin.clientes.create')
							<li>
								<a href="{{ route('admin.clientes.create') }}">
									Agregar registro
								</a>
							</li>
							@endcan
						</ul>
					</div>
					<div class="inside">
						<table id= "colcliente" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="50%">Nombre</th>
									<th width="10%">RUC</th>
									<th width="10%">Celular</th>
									<th width="10%">Teléfono</th>
									<th width="10%">Clave</th>
									<th width="10%"></th>
								</tr>
							</thead>
							{{-- <tbody>
								@foreach($clientes as $cliente)
								<tr>
									<td>{{ $cliente->razsoc }}</td>
									<td>{{ $cliente->numdoc }}</td>
									<td>{{ $cliente->celular }}</td>
									<td>{{ $cliente->telefono }}</td>
									<td>
										<div class="opts">
											@can('admin.clientes.edit')
											<a class="" href="{{ route('admin.clientes.edit',$cliente) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
                                            @can('admin.clientes.destroy')
                                            <form action="{{ route('admin.clientes.destroy',$cliente) }}" method="POST" class="formulario_eliminars">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
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
		$('#colcliente').DataTable({
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
            "ajax": "{{ url('/admin/clientes/registro') }}",
            "columns": [
                {data: 'razsoc'},
                {data: 'numdoc'},
                {data: 'celular'},
                {data: 'telefono'},
                {data: 'clave'},
				{data: 'btn'}
                ]
            });
		
	});
</script>
@endsection