<?php

namespace App\Imports;

use App\Models\Reporte;
use Maatwebsite\Excel\Concerns\ToModel;

class ReporteImport implements ToModel
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

        return new Reporte([
            'nombre' => $row[1]
        ]);
    }
}
