<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\Sede;
Use App\Models\Cliente;
use App\Models\Detservicio;
use App\Models\Servicio;
use App\Models\Param;
use App\Models\Doctor;
use App\Models\Obshemog;
use App\Models\Otrhemog;
use App\Models\Catorina;
use App\Models\Cathece;
use App\Models\Reporte;


class ReporteController extends Controller
{
    public function index(Sede $sede)
    {
        $cliente = Cliente::findOrFail(session('cliente'));
        $sedes = Sede::get();
        $servicios = Servicio::with('eval')->where('cliente_id',session('cliente'))->where('sede_id',$sede->id)->get();
        return view('company.reportes.index', compact('cliente','sedes','sede','servicios'));
    }

    public function detalle(Servicio $servicio)
    {
        $cliente = Cliente::findOrFail(session('cliente'));
        $sedes = Sede::get();
        $sede = Sede::findOrFail($servicio->sede_id);
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        return view('company.reportes.detalle', compact('cliente','sedes','sede','servicio','resultado'));
    }

    public function listado(Detservicio $detservicio)
    {
        $reportes = Reporte::with('detreportes')->get();
        $cliente = Cliente::findOrFail(session('cliente'));
        $sedes = Sede::get();
        $sede = Sede::findOrFail($detservicio->servicio->sede_id);
        return view('company.reportes.listado', compact(
            'detservicio','reportes','cliente','sedes','sede'
        )); 

    }

    public function print(Request $request,Detservicio $detservicio)
    {
        $param = Param::find(1);
        $sede = Sede::find($detservicio->servicio->sede_id);
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $doctor = Doctor::pluck('nombre','id');
        $docfirma = Doctor::pluck('firma','id');
        $obshemograma = Obshemog::pluck('nombre','id');
        $otrhemograma = Otrhemog::pluck('nombre','id');
        $otrhemoval = Otrhemog::pluck('valorref','id');
        $catorina = Catorina::pluck('nombre','id');
        $cathece = Cathece::pluck('nombre','id');
        $aprobado = ['0'=>'PENDIENTE','1'=>'APROBADO','2'=>'DESAPROBADO'];
        $laboratorio = [];
        foreach($detservicio->bioquimica as $bio){
            if($bio->prueba_id == 1){
                $laboratorio = array_merge($laboratorio,[
                    'Glucosa' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 2){
                $laboratorio = array_merge($laboratorio,[
                    'Trigliceridos' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 3){
                $laboratorio = array_merge($laboratorio,[
                    'Colesterol' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 4){
                $laboratorio = array_merge($laboratorio,[
                    'HDL' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 5){
                $laboratorio = array_merge($laboratorio,[
                    'LDL' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 6){
                $laboratorio = array_merge($laboratorio,[
                    'TGO' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 7){
                $laboratorio = array_merge($laboratorio,[
                    'TGP' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 8){
                $laboratorio = array_merge($laboratorio,[
                    'Creatinina' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 9){
                $laboratorio = array_merge($laboratorio,[
                    'AUrico' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 10){
                $laboratorio = array_merge($laboratorio,[
                    'Urea' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 11){
                $laboratorio = array_merge($laboratorio,[
                    'GrupoSan' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 12){
                $laboratorio = array_merge($laboratorio,[
                    'FactorRH' => $bio->valor
                ]);
            }
            if($bio->prueba_id == 64){
                $laboratorio = array_merge($laboratorio,[
                    'VLDL' => $bio->valor
                ]);
            }
        }
        
        $inteligencia = [
            '1' => 'MUY SUPERIOR',
            '2' => 'SUPERIOR',
            '3' => 'NORMAL BRILLANTE',
            '4' => 'NORMAL PROMEDIO',
            '5' => 'NORMAL TORPE',
            '6' => 'FRONTERIZO',
            '7' => 'RM LEVE',
            '8' => 'RM MODERADO',
            '9' => 'RM SEVERO',
            '10' => 'RM PROFUNDO',
        ];
        $memoria = [
            '1' => 'CORTO PLAZO',
            '2' => 'NEDIANO PLAZO',
            '3' => 'LARGO PLAZO',
        ];
        
        $qrcode = base64_encode(QrCode::format('svg')
            ->size(100)
            ->errorCorrection('H')
            ->generate($param->dominio.'/verificar/'.str_pad($detservicio->id, 5, '0', STR_PAD_LEFT).'10'));
        $data = [
            'detalle' => $request->detalle,
            'detservicio' => $detservicio,
            'param' => $param,
            'sede' => $sede,
            'meses' => getMeses(),
            'laboratorio' => $laboratorio,
            'obshemograma' => $obshemograma,
            'otrhemograma' => $otrhemograma,
            'otrhemoval' => $otrhemoval,
            'catorina' => $catorina,
            'cathece' => $cathece,
            'resultado' => $resultado,
            'qrcode' => $qrcode,
            'inteligencia' => $inteligencia,
            'memoria' => $memoria,
            'doctor' => $doctor,
            'docfirma' => $docfirma,
            'aprobado' => $aprobado
        ];
        // return view('pdf.informe', $data);
        $pdf = PDF::loadView('pdf.informe', $data)->setPaper('A4', 'portrait');
        return $pdf->stream($detservicio->colaborador->nombres.'.pdf', array('Attachment'=>false));
        // return $request->all();
        // return 'Reporte';
    }

    public function listcolaboradores(Servicio $servicio)
    {
        $detalles = Detservicio::join('colaboradors','detservicios.colaborador_id','colaboradors.id')
            ->select('detservicios.id','detservicios.colaborador_id','colaboradors.nombres',
                    'detservicios.area_id','detservicios.puesto_id','detservicios.resultado')
			->whereNull('detservicios.deleted_at')
            ->where('detservicios.servicio_id', $servicio->id)
            ->where('detservicios.finalizado', 1)
            ->orderBy('colaboradors.nombres')
            ->get();
        $carea =  Detservicio::where('servicio_id',$servicio->id)->pluck('area_id');
        $cpuesto =  Detservicio::where('servicio_id',$servicio->id)->pluck('puesto_id');
        $param = Param::find(1);
        $area = Categoria::whereIn('id',$carea)->pluck('nombre','id');
        $puesto = Categoria::whereIn('id',$cpuesto)->pluck('nombre','id');
        $sede = Sede::find($servicio->sede_id);
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        // return $detalles;
        $data = [
            'servicio' => $servicio,
            'detalles' => $detalles,
            'area' => $area,
            'puesto' => $puesto,
            'resultado' => $resultado,
            'param' => $param,
            'sede' => $sede,
        ];
        $pdf = PDF::loadView('pdf.listado', $data)->setPaper('A4', 'landscape');
        return $pdf->stream($servicio->cliente->razsoc.'.pdf', array('Attachment'=>false));
    }
}
