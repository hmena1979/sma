<div class="row mt-3">
    <div class="col-md-6">
        <table class="table table-hover table-bordered table-estrecha">
            <thead>
                <tr>
                    <th width='80%'>INFORME</th>
                    <th width='20%'></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="align-middle">Informe Confidencial</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.informes.confidencial',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Informe Confidencial">
                            <i class="fas fa-book-medical"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Declaración Jurada</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.informes.dj',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Declaración Jurada">
                            <i class="fas fa-book-medical"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Examen de Drogas en Orina</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.informes.drogas',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Drogas en Orina">
                            <i class="fas fa-book-medical"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th class="align-middle">Examenes Realizados</th>
                    <td class="align-middle">
                        <a href="{{ route('admin.informes.realizados',$detservicio) }}" class="btn btn-convertir" datatoggle="tooltip" data-placement="top" title="Exámenes Realizados">
                            <i class="fas fa-book-medical"></i>
                        </a>
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
</div>