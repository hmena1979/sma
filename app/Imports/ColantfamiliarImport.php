<?php

namespace App\Imports;

use App\Models\Colantfamiliar;
use App\Models\Colaborador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ColantfamiliarImport implements ToModel, WithBatchInserts
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
        return new Colantfamiliar([
            'colaborador_id' => $id,
            'padre' => trim($row[128]),
            'madre' => trim($row[129]),
            'hermano' => trim($row[130]),
            'esposo' => trim($row[131]),
            'hijo_viv' => trim($row[132]),
            'hijo_fall' => trim($row[133]),
            'enfact1' => trim($row[134]),
            'asoctrab1' => trim($row[135]=='1'?1:2),
            'anio1' => trim($row[136]),
            'diasdesc1' => trim($row[137]),
            'enfact2' => trim($row[138]),
            'asoctrab2' => trim($row[139]=='1'?1:2),
            'anio2' => trim($row[140]),
            'diasdesc2' => trim($row[141]),
        ]);
    }

    public function batchSize(): int
    {
        return 300;
    }
}
