<?php

namespace App\Imports;

use App\Models\Colantocupacional;
use App\Models\Colaborador;
use App\Models\Categoria;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ColantocupacionalImport implements ToModel, WithBatchInserts
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
        $id = Colaborador::where('codigo',$row[0])->value('id');
        if(empty($id)){
            return null;
        }
        if(!empty(trim($row[2]))){
            $area = Categoria::where('modulo',5)->where('codigo',trim($row[2]))->value('id');
        }else{
            $area = 1;
        }
        if(!empty(trim($row[3]))){
            $puesto = Categoria::where('modulo',6)->where('codigo',trim($row[3]))->value('id');
        }else{
            $puesto = 1;
        }

        return new Colantocupacional([
            'colaborador_id' => $id,
            'empresa' => trim($row[1]),
            'area_id' => empty($area)?1:$area,
            'puesto_id' => empty($puesto)?1:$puesto,
            'fecha' => trim($row[4]),
            'tiempo' => trim($row[5]),
            'exposicion' => trim($row[6]),
            'epp' => trim($row[7]),
            'cretiro' => trim($row[8]),
        ]);
    }

    public function batchSize(): int
    {
        return 300;
    }
}
