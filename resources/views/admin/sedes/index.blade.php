{{-- @extends('adminlte::page') --}}
@extends('admin.master')

@section('title','Sedes')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.sedes.index') }}"><i class="fas fa-boxes"></i> Sedes</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-boxes"></i> Sedes</h2>
						<ul>
							@can('admin.sedes.create')
							<li>
								<a href="{{ route('admin.sedes.create') }}">
									Agregar registro
								</a>
							</li>
							@endcan
						</ul>
					</div>
					<div class="inside">
						<table id= "grid" class="table table-hover table-sm">
							<thead>
								<tr>
									<th width="30%">Nombre</th>
									<th width="40%">Dirección</th>
									<th width="10%">Celular</th>
									<th width="10%">Teléfono</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($sedes as $sede)
								<tr>
									<td>{{ $sede->nombre }}</td>
									<td>{{ $sede->direccion }}</td>
									<td>{{ $sede->celular }}</td>
									<td>{{ $sede->telefono }}</td>
									<td>
										<div class="opts">
											@can('admin.sedes.edit')
											<a class="" href="{{ route('admin.sedes.edit',$sede) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
                                            {{-- @can('admin.clientes.destroy')
                                            <form action="{{ route('admin.clientes.destroy',$sede) }}" method="POST" class="formulario_eliminars">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            @endcan --}}
										</div>
									</td>
								</tr>
								@endforeach
								</tbody>
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