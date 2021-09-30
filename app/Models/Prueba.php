<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prueba extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'pruebas';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function bioquimica()
    {
        return $this->hasOne('App\Models\Bioquimica');
    }

    public function toxicologico()
    {
        return $this->hasOne('App\Models\Toxicologico');
    }
    
}
