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

    // Relacion uno a Muchos
    public function colantocupacionals()
    {
        return $this->hasMany('App\Models\Colantocupacional');
    }

}
