<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colantocupacional extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'colantocupacionals';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function colaborador(){
        return $this->belongsTo('App\Models\Colaborador');
    }
}
