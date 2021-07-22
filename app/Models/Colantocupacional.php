<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colantocupacional extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'colantocupacionals';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function colaborador(){
        return $this->belongsTo('App\Models\Colaborador');
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
