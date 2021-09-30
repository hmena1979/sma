<?php

namespace App\Imports;

use App\Models\Doctor;
use Maatwebsite\Excel\Concerns\ToModel;

class DoctorImport implements ToModel
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
        return new Doctor([
            'nombre' => $row[1],
            'especialidad' => $row[2],
            'cmp' => $row[3],
            'telefono' => $row[4],
            'celular' => $row[5],
        ]);
    }
}
