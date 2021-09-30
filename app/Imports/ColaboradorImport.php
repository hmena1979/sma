<?php

namespace App\Imports;

use App\Models\Colaborador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ColaboradorImport implements ToModel, WithBatchInserts
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
        switch($row[6]){
            case '01':
                $td = '1';
                break;
            case '04':
                $td = '4';
                break;
            case '06':
                $td = '6';
                break;
            case '07':
                $td = '7';
                break;
            case '09':
                $td = 'B';
                break;
            case '11':
                $td = '0';
                break;
            default:
                $td = '0';
        }        

        return new Colaborador([
            'codigo' => $row[0],
            'apellido' => trim($row[1]),
            'nombre' => trim($row[2]),
            'nombres' => trim($row[1]). ' '. trim($row[2]),
            'fecnac' => $row[148].'-'.$row[147].'-'.$row[146],
            'sexo_id' => $row[4]=='1'?'M':'F',
            'tipdoc_id' => $td,
            'numdoc' => trim($row[7]),
            'domicilio' => trim($row[8]),
            'departamento' => substr($row[9],0,2),
            'provincia' => substr($row[9],0,4),
            'ubigeo' => $row[9],
            'residencia' => trim($row[12]),
            'lugnac' => trim($row[13]),
            'tieresi' => empty(trim($row[14]))?'SIEMPRE':trim($row[14]),
            'nacionalidad' => trim($row[145]),
            'email' => trim($row[15]),
            'telefono' => trim($row[16]),
            'estciv_id' => trim($row[17]),
            'gradinst_id' => trim($row[18]),
            'numhijos' => $row[19],
            'numdepend' => $row[20],
        ]);
    }

    public function batchSize(): int
    {
        return 50;
    }
}
