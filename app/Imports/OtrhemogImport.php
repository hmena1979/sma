<?php

namespace App\Imports;

use App\Models\Otrhemog;
use Maatwebsite\Excel\Concerns\ToModel;

class OtrhemogImport implements ToModel
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

        return new Otrhemog([
            'nombre' => $row[1],
            'valorref' => $row[2],
        ]);
    }
}
