<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Categoria;
use App\Models\Detservicio;
use App\Models\Param;
use App\Models\Sede;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        return false;
    	$param = Param::find('1');
        $sedes = Sede::where('activo',1)->orderBy('id')->get();
    	$data = [
            'param'=>$param,
            'sedes'=>$sedes,
        ];
    	return view('welcome', $data);
    }

    public function verifica()
    {
        return view('verificar');
    }

    public function resultado(Request $request)
    {
        $codigo = e($request->input('codigo'));
        $param = Param::find('1');
        $sedes = Sede::where('activo',1)->orderBy('id')->get();
        $res = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $valida = 0;
        $titulo = '';
        if(strlen($codigo) <> 7){
            $data = [
                'param' => $param,
                'sedes' => $sedes,
                'valida' => 0
            ];
            return view('resultado',$data);
        }else{
            // 0123456
            $detservicio = Detservicio::with('colaborador')->where('id', intval(substr($codigo,0,5)))->first();
            if($detservicio){
                switch(substr($codigo,5,2)){
                    case '10':
                        $titulo = 'APTITUD';
                        $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                        $empresa = $detservicio->servicio->cliente->razsoc;
                        $fecha = date('d-m-Y',strtotime($detservicio->servicio->fecha));
                        $resultado = $res[$detservicio->resultado];
                        $valida = 1;
                        break;
                    case '11':
                        $titulo = 'APTITUD';
                        $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                        $empresa = $detservicio->servicio->cliente->razsoc;
                        $fecha = date('d-m-Y',strtotime($detservicio->servicio->fecha));
                        $resultado = $res[$detservicio->resultado];
                        $valida = 1;
                        break;
                    case '26':
                        if($detservicio->exacovidant()->count() <> 0){
                            $titulo = 'COVID-19 | ANTÍGENO';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidant->fecha_val));
                            $resultado = $detservicio->exacovidant->antigeno==1?'POSITIVO':'NEGATIVO';
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    case '27':
                        if($detservicio->exacovidpr()->count() <> 0){
                            $igg = $detservicio->exacovidpr->igg==1?'REACTIVO':'NO REACTIVO';
                            $igm = $detservicio->exacovidpr->igm==1?'REACTIVO':'NO REACTIVO';
                            $titulo = 'COVID-19 | PRUEBA RÁPIDA';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidpr->fecha_val));
                            $resultado = 'IgG: ' . $igg .' | IgM: '. $igm;
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    case '28':
                        if($detservicio->exacovidpcr()->count() <> 0){
                            $titulo = 'COVID-19 | PCR';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_val));
                            $resultado = $detservicio->exacovidpcr->pcr==1?'POSITIVO':'NEGATIVO';
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    default:
                        $valida = 0;
                }
            }
            if($valida == 0){
                $data = [
                    'param' => $param,
                    'sedes' => $sedes,
                    'valida' => 0
                ];
                return view('resultado',$data);
            }

            $data = [
                'param' => $param,
                'sedes' => $sedes,
                'titulo' => $titulo,
                'nombre' => $nombre,
                'empresa' => $empresa,
                'fecha' => $fecha,
                'resultado' => $resultado,
                'valida' => 1
            ];
            return view('resultado',$data);
        }

    }

    public function verificar($codigo)
    {
        // $codigo = e($request->input('codigo'));
        $param = Param::find('1');
        $sedes = Sede::where('activo',1)->orderBy('id')->get();
        $res = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $valida = 0;
        $titulo = '';
        if(strlen($codigo) <> 7){
            $data = [
                'param' => $param,
                'sedes' => $sedes,
                'valida' => 0
            ];
            return view('resultado',$data);
        }else{
            // 0123456
            $detservicio = Detservicio::with('colaborador')->where('id', intval(substr($codigo,0,5)))->first();
            if($detservicio){
                switch(substr($codigo,5,2)){
                    case '10':
                        $titulo = 'APTITUD';
                        $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                        $empresa = $detservicio->servicio->cliente->razsoc;
                        $fecha = date('d-m-Y',strtotime($detservicio->servicio->fecha));
                        $resultado = $res[$detservicio->resultado];
                        $valida = 1;
                        break;
                    case '11':
                        $titulo = 'APTITUD';
                        $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                        $empresa = $detservicio->servicio->cliente->razsoc;
                        $fecha = date('d-m-Y',strtotime($detservicio->servicio->fecha));
                        $resultado = $res[$detservicio->resultado];
                        $valida = 1;
                        break;
                    case '26':
                        if($detservicio->exacovidant()->count() <> 0){
                            $titulo = 'COVID-19 | ANTÍGENO';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidant->fecha_val));
                            $resultado = $detservicio->exacovidant->antigeno==1?'POSITIVO':'NEGATIVO';
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    case '27':
                        if($detservicio->exacovidpr()->count() <> 0){
                            $igg = $detservicio->exacovidpr->igg==1?'REACTIVO':'NO REACTIVO';
                            $igm = $detservicio->exacovidpr->igm==1?'REACTIVO':'NO REACTIVO';
                            $titulo = 'COVID-19 | PRUEBA RÁPIDA';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidpr->fecha_val));
                            $resultado = 'IgG: ' . $igg .' | IgM: '. $igm;
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    case '28':
                        if($detservicio->exacovidpcr()->count() <> 0){
                            $titulo = 'COVID-19 | PCR';
                            $nombre = $detservicio->colaborador->numdoc.' - '.$detservicio->colaborador->nombres;
                            $empresa = $detservicio->servicio->cliente->razsoc;
                            $fecha = date('d-m-Y',strtotime($detservicio->exacovidpcr->fecha_val));
                            $resultado = $detservicio->exacovidpcr->pcr==1?'POSITIVO':'NEGATIVO';
                            $valida = 1;
                        }else{
                            $valida = 0;
                        }
                        break;
                    default:
                        $valida = 0;
                }
            }
            if($valida == 0){
                $data = [
                    'param' => $param,
                    'sedes' => $sedes,
                    'valida' => 0
                ];
                return view('resultado',$data);
            }

            $data = [
                'param' => $param,
                'sedes' => $sedes,
                'titulo' => $titulo,
                'nombre' => $nombre,
                'empresa' => $empresa,
                'fecha' => $fecha,
                'resultado' => $resultado,
                'valida' => 1
            ];
            return view('resultado',$data);
        }

    }
}
