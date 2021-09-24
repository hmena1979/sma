<?php

namespace App\Imports;

use App\Models\Detreporte;
use Maatwebsite\Excel\Concerns\ToModel;

class DetreporteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] === 'codigo'){
            return null;
        }

        return new Detreporte([
            'reporte_id' => $row[1],
            'nombre' => $row[2]
        ]);
    }
}
