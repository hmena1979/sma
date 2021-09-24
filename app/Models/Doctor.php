<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'doctors';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detservicio()
    {
        return $this->hasOne('App\Models\Detservicio');
    }

    public function exapsico()
    {
        return $this->hasOne('App\Models\Exapsico');
    }

    public function exaaudio()
    {
        return $this->hasOne('App\Models\Exaaudio');
    }

    public function exaoftalmo()
    {
        return $this->hasOne('App\Models\Exaoftalmo');
    }

    public function exaodonto()
    {
        return $this->hasOne('App\Models\Exaodonto');
    }

    public function exaekg()
    {
        return $this->hasOne('App\Models\Exaekg');
    }

    public function exaderma()
    {
        return $this->hasOne('App\Models\Exaderma');
    }

    public function exaespiro()
    {
        return $this->hasOne('App\Models\Exaespiro');
    }

    public function exaalt18()
    {
        return $this->hasOne('App\Models\Exaalt18');
    }

    public function exaalt25()
    {
        return $this->hasOne('App\Models\Exaalt25');
    }

    public function exaconfinado()
    {
        return $this->hasOne('App\Models\Exaconfinado');
    }
}
