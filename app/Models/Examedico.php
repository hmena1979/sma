<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examedico extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'examedicos';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detservicio(){
        return $this->belongsTo('App\Models\Detservicio');
    }

    public function resultad()
    {
        return $this->hasOne('App\Models\Categoria', 'codigo', 'resultado')->whereIn('modulo',['7']);
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
