<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'servicios';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function detservicios()
    {
        return $this->hasMany('App\Models\Detservicio');
    }

    public function eval()
    {
        return $this->hasOne('App\Models\Categoria', 'codigo', 'evaluacion')->where('modulo','9');
    }

    public function depart()
    {
        return $this->hasOne('App\Models\Departamento', 'codigo', 'departamento');
    }

    public function prov()
    {
        return $this->hasOne('App\Models\Provincia', 'codigo', 'provincia');
    }

    public function ubig()
    {
        return $this->hasOne('App\Models\Ubigeo', 'codigo', 'ubigeo');
    }
}
