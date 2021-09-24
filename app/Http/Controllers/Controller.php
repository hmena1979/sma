<?php

namespace App\Http\Controllers;

use App\Models\Param;
use App\Models\Sede;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
    	$param = Param::find('1');
        $sedes = Sede::where('activo',1)->orderBy('id')->get();
    	$data = [
            'param'=>$param,
            'sedes'=>$sedes,
        ];
    	return view('welcome', $data);
    }
}
