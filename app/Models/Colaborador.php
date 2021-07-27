<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colaborador extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'colaboradors';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];
    // protected $appends = ['numdoc_razsoc'];

    // public function getNumdocRazsocAttribute()
    // {
    //     return $this->numdoc. '-'.$this->razsoc;
    // }
    
    // Relacion Uno a Uno
    public function colantfamiliar()
    {
        return $this->hasOne('App\Models\Colantfamiliar');
    }

    public function colantpatologico()
    {
        return $this->hasOne('App\Models\Colantpatologico');
    }

    public function detservicio()
    {
        return $this->hasOne('App\Models\Detservicio');
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

    public function estciv()
    {
        return $this->hasOne('App\Models\Categoria', 'codigo', 'estciv_id')->whereIn('modulo',['0','3']);
    }
    public function gradinst()
    {
        return $this->hasOne('App\Models\Categoria', 'codigo', 'gradinst_id')->whereIn('modulo',['0','4']);
    }

    // Relacion uno a Muchos
    public function colantocupacionals()
    {
        return $this->hasMany('App\Models\Colantocupacional');
    }

}
