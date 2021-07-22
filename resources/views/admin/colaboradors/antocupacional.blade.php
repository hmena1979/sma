<table id='antecedente' class='table table-responsive-md table-hover table-sm tablaao'>
    <thead>
        <tr>
            <th width='27%'>Empresa</th>
            <th width='10%'>Área</th>
            <th width='10%'>Ocupación</th>
            <th width='10%'>Fecha</th>
            <th width='10%'>Tiempo</th>
            <th width='5%'>Exposición</th>
            <th width='5%'>EPP</th>
            <th width='10%'>C.Retiro</th>
            <th width='7%'></th>
        </tr>
    </thead>
    <tbody>
        @foreach($antecedente as $ant)
        {{-- {{ dd($ant->area) }} --}}
        <tr>
            <td>{{ $ant->empresa }}</td>
            <td>{{ $ant->area->nombre }}</td>
            <td>{{ $ant->puesto->nombre }}</td>
            <td>{{ $ant->fecha }}</td>
            <td>{{ $ant->tiempo }}</td>
            <td>{{ $ant->exposicion==1 ? 'SI' : 'No' }}</td>
            <td>{{ $ant->epp==1 ? 'SI' : 'No' }}</td>
            <td>{{ $ant->cretiro }}</td>
            <td>
                <div class='opts'>
                    {{-- <a href='{{ route('admin.colaboradors.editao',$ant) }}' datatoggle='tooltip' data-placement='top' title='Editar'><i class='fas fa-edit'></i></a> --}}
                    <button type="button" class="btn btn-convertir" data-toggle="modal" title="Editar" data-target="#ingantecedente" onclick = "editao('{{ $ant->id }}');">
                        <i class='fas fa-edit'></i>
                    </button>
                    <button type="button" class="btn btn-convertir" id='eliminaao' title="Eliminar" onclick="destroyao('{{ $ant->id }}');">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {{ route('admin.colaboradors.edit',$ant) }} --}}