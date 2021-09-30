<?php

namespace App\Imports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;

class ClienteImport implements ToModel
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

        return new Cliente([
            'codigo' => $row[0],
            'numdoc' => $row[1],
            'razsoc' => $row[2],
            'contacto' => $row[3],
            'direccion' => $row[4],
            'telefono' => $row[5],
            'actividad' => $row[6],
            'clave' => azarMayusculas(),
        ]);
    }
}
