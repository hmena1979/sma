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
        @foreach($toxicologico as $tox)
        <tr>
            <td>{{ $tox->prueba->nombre }}</td>
            <td>{{ $tox->resultado==1?'POSITIVO':'NEGATIVO' }}</td>
            <td>{{ $tox->prueba->medida }}</td>
            <td>
                {{ valreferencial($tox->prueba->tipo, \Carbon\Carbon::parse($tox->detservicio->colaborador->fecnac)->age,
                    $tox->detservicio->colaborador->sexo_id,$tox->prueba->valorref01,$tox->prueba->valorref02) }}
            </td>
            <td>
                <div class='opts'>
                    <button type="button" class="btn btn-convertir" data-toggle="modal" title="Editar" data-target="#ingpruebae" onclick = "edittox('{{ $tox->id }}');">
                        <i class='fas fa-edit'></i>
                    </button>
                    <button type="button" class="btn btn-convertir" id='eliminatox' title="Eliminar" onclick="destroytox('{{ $tox->id }}');">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>