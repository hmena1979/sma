<table id='antecedente' class='table table-responsive-md table-hover table-estrecha'>
    <thead>
        <tr>
            <th width='40%'>PRUEBA</th>
            <th width='10%'>RESULTADO</th>
            <th width='15%'>MEDIDA</th>
            <th width='25%'>VALOR REFERENCIAL</th>
            <th width='10%'></th>
        </tr>
    </thead>
    <tbody>
        @foreach($bioquimica as $bio)
        {{-- {{ dd($ant->area) }} --}}
        <tr>
            <td>{{ $bio->prueba->nombre }}</td>
            <td>{{ $bio->valor }}</td>
            <td>{{ $bio->prueba->medida }}</td>
            <td>{{ valreferencial($bio->prueba->tipo, \Carbon\Carbon::parse($bio->detservicio->colaborador->fecnac)->age,
                    $bio->detservicio->colaborador->sexo_id,$bio->prueba->valorref01,$bio->prueba->valorref02) }}</td>
            <td>
                <div class='opts'>
                    {{-- <a href='{{ route('admin.colaboradors.editao',$ant) }}' datatoggle='tooltip' data-placement='top' title='Editar'><i class='fas fa-edit'></i></a> --}}
                    <button type="button" class="btn btn-convertir" data-toggle="modal" title="Editar" data-target="#ingpruebae" onclick = "editpr('{{ $bio->id }}');">
                        <i class='fas fa-edit'></i>
                    </button>
                    @if($bio->prueba_id > 12)
                    <button type="button" class="btn btn-convertir" id='eliminaao' title="Eliminar" onclick="destroypr('{{ $bio->id }}');">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    @endif
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>