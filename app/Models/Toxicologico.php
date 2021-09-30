<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toxicologico extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'toxicologicos';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detservicio(){
        return $this->belongsTo('App\Models\Detservicio');
    }

    public function prueba(){
        return $this->belongsTo('App\Models\Prueba');
    }
}
