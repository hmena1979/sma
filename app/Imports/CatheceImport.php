<?php

namespace App\Imports;

use App\Models\Cathece;
use Maatwebsite\Excel\Concerns\ToModel;

class CatheceImport implements ToModel
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

        return new Cathece([
            'modulo' => $row[0],
            'nombre' => $row[2],
        ]);
    }
}
