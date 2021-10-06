{{-- @extends('adminlte::page') --}}
@extends('admin.master')

@section('title','Pruebas Bioquímica')

@section('breadcrumb')
	<li class="breadcrumb-item">
		<a href="{{ route('admin.pruebas.index') }}"><i class="fas fa-microscope"></i> Pruebas Bioquímica</a>
	</li>
@endsection

@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panelprin shadow">
					<div class="headercontent">
						<h2 class="title"><i class="fas fa-microscope"></i> Pruebas Bioquímica</h2>
						<ul>
							@can('admin.pruebas.create')
							<li>
								<a href="{{ route('admin.pruebas.create') }}">
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
									<th width="15%">Medida</th>
									<th width="45%">Método</th>
									<th width="10%"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($pruebas as $prueba)
								<tr>
									<td>{{ $prueba->nombre }}</td>
									<td>{{ $prueba->medida }}</td>
									<td>{{ $prueba->metodo }}</td>
									<td>
										<div class="opts">
											@can('admin.pruebas.edit')
											<a class="" href="{{ route('admin.pruebas.edit',$prueba) }}"datatoggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
											@endcan
                                            @if (Auth::user()->can('admin.pruebas.destroy') && $prueba->id >= 12)
                                            <form action="{{ route('admin.pruebas.destroy',$prueba) }}" method="POST" class="formulario_eliminars">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" datatoggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            @endif
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