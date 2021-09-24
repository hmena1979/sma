<?php

namespace App\Imports;

use App\Models\Prueba;
use Maatwebsite\Excel\Concerns\ToModel;

class PruebaImport implements ToModel
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

        return new Prueba([
            'nombre' => $row[1],
            'medida' => $row[2],
            'tipo' => $row[3],
            'valorref01' => $row[4],
            'valorref02' => $row[5],
            'metodo' => $row[6],
        ]);
    }
}
