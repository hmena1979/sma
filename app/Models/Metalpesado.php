<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Metalpesado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deteted_at'];
    protected $table = 'metalpesados';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];

    public function detservicio(){
        return $this->belongsTo('App\Models\Detservicio');
    }
}
