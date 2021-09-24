<?php

namespace App\Imports;

use App\Models\Examen;
use Maatwebsite\Excel\Concerns\ToModel;

class ExamenImport implements ToModel
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

        return new Examen([
            'nombre' => $row[1],
            'tipo' => $row[2],
        ]);
    }
}
