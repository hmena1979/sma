<?php

namespace App\Imports;

use App\Models\Colantpatologico;
use App\Models\Colaborador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ColantpatologicoImport implements ToModel, WithBatchInserts
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

        if(empty(trim($row[125])) || trim($row[125])==='NIEGA' || trim($row[125])==='NO' || trim($row[125])==='X'){
            $medicamento = 'NIEGA';
        }else{
            $medicamento = trim($row[125]).' '.trim($row[126]).' '.trim($row[127]);
        }

        return new Colantpatologico([
            'colaborador_id' => $id,
            'alergias' => trim($row[101])<>'NIEGA'?1:2,
            'descalergias' => trim($row[101])<>'NIEGA'?null:trim($row[101]),
            'diabetes' => trim($row[102])<>'NIEGA'?1:2,
            'tbc' => trim($row[103])<>'NIEGA'?1:2,
            'hepatitis' => trim($row[104])<>'NIEGA'?1:2,
            'asma' => trim($row[105])<>'NIEGA'?1:2,
            'hta' => trim($row[106])<>'NIEGA'?1:2,
            'its' => trim($row[107])<>'NIEGA'?1:2,
            'tifoidea' => trim($row[108])<>'NIEGA'?1:2,
            'bronquitis' => trim($row[109])<>'NIEGA'?1:2,
            'neoplasia' => trim($row[110])<>'NIEGA'?1:2,
            'convulsion' => trim($row[111])<>'NIEGA'?1:2,
            'intoxicacion' => trim($row[112])<>'NIEGA'?1:2,
            'medicamento' => $medicamento,
            'quemadura' => trim($row[113]),
            'cirugia' => trim($row[114]),
            'otros' => trim($row[115]),
            'alcohol' => trim($row[118]),
            'tabaco' => trim($row[121]),
            'droga' => trim($row[124]),
            'antfamiliar' => trim($row[142]),
            'antpersonal' => trim($row[143]),
        ]);
    }

    public function batchSize(): int
    {
        return 50;
    }
}
