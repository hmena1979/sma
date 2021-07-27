<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detservicio extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'detservicios';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function servicio(){
        return $this->belongsTo('App\Models\Servicio');
    }

    public function colaborador()
    {
        return $this->belongsTo('App\Models\Colaborador');
    }

    public function examedico()
    {
        return $this->hasOne('App\Models\Examedico');
    }

    public function area()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'area_id')->whereIn('modulo',['0','5']);
    }

    public function puesto()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'puesto_id')->whereIn('modulo',['0','6']);
    }
}
