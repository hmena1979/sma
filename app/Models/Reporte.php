<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporte extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'reportes';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detreportes()
    {
        return $this->hasMany('App\Models\Detreporte');
    }
}
