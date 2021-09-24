<?php

namespace App\Imports;

use App\Models\Obshemog;
use Maatwebsite\Excel\Concerns\ToModel;

class ObshemogImport implements ToModel
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

        return new Obshemog([
            'nombre' => $row[1],
        ]);
    }
}
