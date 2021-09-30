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

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }

    public function examedico()
    {
        return $this->hasOne('App\Models\Examedico');
    }
    
    public function exaoftalmo()
    {
        return $this->hasOne('App\Models\Exaoftalmo');
    }

    public function exaaudio()
    {
        return $this->hasOne('App\Models\Exaaudio');
    }

    public function exapsico()
    {
        return $this->hasOne('App\Models\Exapsico');
    }
    
    public function exaderma()
    {
        return $this->hasOne('App\Models\Exaderma');
    }

    public function exaespiro()
    {
        return $this->hasOne('App\Models\Exaespiro');
    }

    public function exaekg()
    {
        return $this->hasOne('App\Models\Exaekg');
    }

    public function exaodonto()
    {
        return $this->hasOne('App\Models\Exaodonto');
    }

    public function exaradio()
    {
        return $this->hasOne('App\Models\Exaradio');
    }

    public function exaconfinado()
    {
        return $this->hasOne('App\Models\Exaconfinado');
    }

    public function exaalt18()
    {
        return $this->hasOne('App\Models\Exaalt18');
    }

    public function exaalt25()
    {
        return $this->hasOne('App\Models\Exaalt25');
    }

    public function exacovidant()
    {
        return $this->hasOne('App\Models\Exacovid')->where('examen',1);
    }

    public function exacovidpr()
    {
        return $this->hasOne('App\Models\Exacovid')->where('examen',2);
    }

    public function exacovidpcr()
    {
        return $this->hasOne('App\Models\Exacovid')->where('examen',3);
    }

    public function bioquimica()
    {
        return $this->hasMany('App\Models\Bioquimica');
    }

    public function hemograma()
    {
        return $this->hasOne('App\Models\Hemograma');
    }

    public function orina()
    {
        return $this->hasOne('App\Models\Orina');
    }

    public function hece()
    {
        return $this->hasOne('App\Models\Hece');
    }

    public function parasitologia()
    {
        return $this->hasOne('App\Models\Parasitologia');
    }

    public function bacteriologia()
    {
        return $this->hasOne('App\Models\Bacteriologia');
    }

    public function urocultivo()
    {
        return $this->hasOne('App\Models\Urocultivo');
    }

    public function toxicologico()
    {
        return $this->hasMany('App\Models\Toxicologico');
    }

    public function metalpesado()
    {
        return $this->hasOne('App\Models\Metalpesado');
    }

    public function otros()
    {
        return $this->hasMany('App\Models\Otro');
    }

    public function informe()
    {
        return $this->hasOne('App\Models\Informe');
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
