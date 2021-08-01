<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\Param;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;
use App\Models\Colaborador;
use App\Models\Colantocupacional;

class BusquedaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
    }

    public function departamento(Request $request)
    {
        if($request->ajax()){
            $term = trim($request->q);
            if (empty($term)) {
                return response()->json([]);
            }
            $departamento = Departamento::select('codigo','nombre')
                ->where('nombre','like','%'.$term.'%')
                ->get();

            $respuesta = array();
            foreach($departamento as $dep){
                $respuesta[] = [
                    'id' => $dep->codigo,
                    'text' => $dep->nombre,
                ];            
            }
            return $respuesta;
        }
    }

    public function provincia(Request $request, $departamento)
    {
        if($request->ajax()){
            $provincia = Provincia::select('codigo','nombre')
                ->where('departamento',$departamento)
                ->get();
            return response()->json($provincia);
        }
    }

    public function ubigeo(Request $request, $provincia)
    {
        if($request->ajax()){
            $ubigeo = Ubigeo::select('codigo','nombre')
                ->where('provincia',$provincia)
                ->get();
            return response()->json($ubigeo);
        }
    }

    public function busapi(Request $request, $tipo, $numero, $id = 0)
    {
        if($request->ajax()){
            $parametro = Param::findOrFail(1);
            $token = $parametro->apitoken;
            $context = stream_context_create(array(
                'http' => array('ignore_errors' => true),
            ));
            if($id == 0){
                if(
                    Colaborador::where('numdoc', $numero)->count() > 0){
                    return 'REPETIDO';
                }
            }
            else{
                if(Colaborador::where('id','<>',$id)->where('numdoc', $numero)->count() > 0){
                    return 'REPETIDO';
                }
            }
            if($tipo=='1'){
                $api = file_get_contents('https://dniruc.apisperu.com/api/v1/dni/'.$numero.'?token='.$token,false,$context);
    
            }else{
                $api = file_get_contents('https://dniruc.apisperu.com/api/v1/ruc/'.$numero.'?token='.$token,false,$context);
            }
            if($api == false){
                return 0;
            }else{
                $api = str_replace('&Ntilde;','Ñ',$api);
                $api = json_decode($api);
                return response()->json($api);
                //return $api;
            }
        }
    }

    public function colaborador(Request $request)
    {
        if($request->ajax()){
            $term = trim($request->q);
            if (empty($term)) {
                return response()->json([]);
            }
            $colaboradores = Colaborador::select('id','nombres','numdoc')
                ->where('numdoc','like','%'.$term.'%')
                ->orWhere('nombres','like','%'.$term.'%')
                ->limit(5)
                ->get();

            $respuesta = array();
            foreach($colaboradores as $colaborador){
                $respuesta[] = [
                    'id' => $colaborador->id,
                    'text' => $colaborador->numdoc.'-'.$colaborador->nombres,
                ];            
            }
            return $respuesta;
        }
    }

    // public function addao($envio)
    // {
    //     $ao = json_decode($envio);

    //     // $empresa,$area,$ocupacion,$fecha,$tiempo,$exposicion,$epp,$cretiro

    //     // $ao = Colantocupacional::create([
    //     //     'colaborador_id'=>$ao->id,
    //     //     'empresa'=>$ao->empresa,
    //     //     'area_id'=>$ao->area,
    //     //     'puesto_id'=>$ao->puesto,
    //     //     'fecha'=>$ao->fecha,
    //     //     'tiempo'=>$ao->tiempo,
    //     //     'exposicion'=>$ao->exposicion,
    //     //     'epp'=>$ao->epp,
    //     //     'cretiro'=>$ao->cretiro
    //     // ]);
    //     return $ao->id;
    // }


}
