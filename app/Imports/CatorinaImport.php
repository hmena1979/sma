<?php

namespace App\Imports;

use App\Models\Catorina;
use Maatwebsite\Excel\Concerns\ToModel;

class CatorinaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] === 'modulo'){
            return null;
        }

        return new Catorina([
            'modulo' => $row[0],
            'nombre' => $row[2],
        ]);
    }
}
