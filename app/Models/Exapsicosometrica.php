<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exapsicosometrica extends Model
{
    use HasFactory;
    protected $dates = ['deteted_at'];
    protected $table = 'exapsicosometricas';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detservicio(){
        return $this->belongsTo('App\Models\Detservicio');
    }
}
