<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detservicio;
Use App\Models\Doctor;
use App\Models\Informe;

class InformeController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('isadmin');
        // $this->middleware('can:admin.inicio')->only('getDashboard');
    }

    public function confidencial(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $confidencial = '';
        if($detservicio->informe()->count() == 0){
            $fecha = $detservicio->servicio->fecha;
            $sexo = $detservicio->colaborador->sexo_id == 'M' ? 'EL SR. ': 'LA SRA. ';
            $edad = \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age;
            $numdoc = $detservicio->colaborador->numdoc;
            $nombres = $detservicio->colaborador->nombres;
            $p1 = '<p>&nbsp; &nbsp; &nbsp;'.$sexo.$nombres.' DE '.$edad.' AÑOS DE EDAD, IDENTIFICADO CON D.N.I. NRO '.$numdoc;
            $p2 = ', SE ENCUENTRA EN EXCELENTE ESTADO DE SALUD FÍSICA SIN DEFECTOS NI ANOMALÍAS EN EL APARATO LOCOMOTOR, PRESENTA UNA INTEGRA CAPACIDAD ';
            $p3 = 'Y AGUDEZA VISUAL Y AUDITIVA, APARATOS CARDIOVASCULAR Y RESPIRATORIO EN OPTIMAS CONDICIONES, EL EXAMEN NEUROLÓGICO REVELO BUENA COORDINACIÓN Y REFLEJOS.</p>';
            
            $p4 = '<p>&nbsp; &nbsp; &nbsp;'.'POR LO ANTERIOR SE HACE CONSTAR QUE '.$sexo.$nombres.', NO PRESENTA NINGÚN TIPO DE IMPEDIMENTO O DISCAPACIDAD FÍSICA PARA EL PUESTO Y CARGO DESEMPEÑADO.</p>';
            
            $p5 = '<p>&nbsp; &nbsp; &nbsp;SE EXPRESA CONSTANCIA QUE '.$sexo.$nombres.' HA RECIBIDO EL INFORME MÉDICO DE RESULTADOS DEL PACIENTE, DE FECHA '.$fecha;
            $p6 = ', QUE, DECLARA CONOCER EN TODOS SUS TÉRMINOS, Y EN ESPECIAL DE LOS PUNTOS RELATIVOS A LAS CONCLUSIONES Y RECOMENDACIONES ';
            $p7 = 'QUE SE COMPROMETE A SEGUIR Y QUE EN SEÑAL DE CONFORMIDAD SUSCRIBE EL PRESENTE.</p>';
            $confidencial = $p1.$p2.$p3.$p4.$p5.$p6.$p7;
            $detservicio->informe()->create([
                'confidencial' => $confidencial,
            ]);
        }else{
            if(empty($detservicio->informe->confidencial)){
                $fecha = $detservicio->servicio->fecha;
                $sexo = $detservicio->colaborador->sexo_id == 'M' ? 'EL SR. ': 'LA SRA. ';
                $edad = \Carbon\Carbon::parse($detservicio->colaborador->fecnac)->age;
                $numdoc = $detservicio->colaborador->numdoc;
                $nombres = $detservicio->colaborador->nombres;
                $p1 = '<p>&nbsp; &nbsp; &nbsp;'.$sexo.$nombres.' DE '.$edad.' AÑOS DE EDAD, IDENTIFICADO CON D.N.I. NRO '.$numdoc;
                $p2 = ', SE ENCUENTRA EN EXCELENTE ESTADO DE SALUD FÍSICA SIN DEFECTOS NI ANOMALÍAS EN EL APARATO LOCOMOTOR, PRESENTA UNA INTEGRA CAPACIDAD ';
                $p3 = 'Y AGUDEZA VISUAL Y AUDITIVA, APARATOS CARDIOVASCULAR Y RESPIRATORIO EN OPTIMAS CONDICIONES, EL EXAMEN NEUROLÓGICO REVELO BUENA COORDINACIÓN Y REFLEJOS.</p>';
                
                $p4 = '<p>&nbsp; &nbsp; &nbsp;'.'POR LO ANTERIOR SE HACE CONSTAR QUE '.$sexo.$nombres.', NO PRESENTA NINGÚN TIPO DE IMPEDIMENTO O DISCAPACIDAD FÍSICA PARA EL PUESTO Y CARGO DESEMPEÑADO.</p>';
                
                $p5 = '<p>&nbsp; &nbsp; &nbsp;SE EXPRESA CONSTANCIA QUE '.$sexo.$nombres.' HA RECIBIDO EL INFORME MÉDICO DE RESULTADOS DEL PACIENTE, DE FECHA '.$fecha;
                $p6 = ', QUE, DECLARA CONOCER EN TODOS SUS TÉRMINOS, Y EN ESPECIAL DE LOS PUNTOS RELATIVOS A LAS CONCLUSIONES Y RECOMENDACIONES ';
                $p7 = 'QUE SE COMPROMETE A SEGUIR Y QUE EN SEÑAL DE CONFORMIDAD SUSCRIBE EL PRESENTE.</p>';
                $confidencial = $p1.$p2.$p3.$p4.$p5.$p6.$p7;
                $detservicio->informe()->update([
                    'confidencial' => $confidencial,
                ]);
            }
        }
        return view('admin.informes.confidencial', compact(
            'detservicio','doctors','confidencial'
        ));
    }

    public function dj(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $dj = '';
        if($detservicio->informe()->count() == 0){
            $fecha = $detservicio->servicio->fecha;
            $numdoc = $detservicio->colaborador->numdoc;
            $nombres = $detservicio->colaborador->nombres;
            $dir = $detservicio->colaborador->domicilio;
            $p1 = '<p>YO, '.$nombres.' IDENTIFICADO CON DNI NRO '.$numdoc.' Y CON DOMICILIO LEGAL EN '.$dir.' PREVIO AL EXAMEN MEDICO OCUPACIONAL A REALIZARME.</p>';
            $p2 = '<p>&nbsp;</p><p><strong>DECLARO:</strong></p><p>&nbsp;</p>';
            $p3 = '<p>PADECER DE , DESDE TIEMPO ATRÁS Y QUE ESTA BAJO CONTROL CON LOS TRATAMIENTOS Y DIETAS PERTINENTES ESPECIALIZADAS.</p><p>&nbsp;</p>';
            $p4 = '<p>DANDO FIDELIDAD Y BAJO JURAMENTO LO ESCRITO.</p>';
            $dj = $p1.$p2.$p3.$p4;
            $detservicio->informe()->create([
                'dj' => $dj,
            ]);
        }else{
            if(empty($detservicio->informe->dj)){
                $fecha = $detservicio->servicio->fecha;
                $numdoc = $detservicio->colaborador->numdoc;
                $nombres = $detservicio->colaborador->nombres;
                $dir = $detservicio->colaborador->domicilio;
                $p1 = '<p>YO, '.$nombres.' IDENTIFICADO CON DNI NRO '.$numdoc.' Y CON DOMICILIO LEGAL EN '.$dir.' PREVIO AL EXAMEN MEDICO OCUPACIONAL A REALIZARME.</p>';
                $p2 = '<p>&nbsp;</p><p><strong>DECLARO:</strong></p><p>&nbsp;</p>';
                $p3 = '<p>PADECER DE , DESDE TIEMPO ATRÁS Y QUE ESTA BAJO CONTROL CON LOS TRATAMIENTOS Y DIETAS PERTINENTES ESPECIALIZADAS.</p><p>&nbsp;</p>';
                $p4 = '<p>DANDO FIDELIDAD Y BAJO JURAMENTO LO ESCRITO.</p>';
                $dj = $p1.$p2.$p3.$p4;
                $detservicio->informe()->update([
                    'dj' => $dj,
                ]);
            }
        }
        return view('admin.informes.dj', compact(
            'detservicio','doctors','dj'
        ));
    }

    public function drogas(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $drogas = '';
        if($detservicio->informe()->count() == 0){
            $p1 = '<p>Por Medio de la presente AUTORIZO ( X )/NO AUTORIZO (  ) al equipo del Centro Medico &amp;quot;San Miguel Arcangel&amp;quot;';
            $p2 = ', a realizar examen Toxicológico (Drogas), en cumplimiento al perfil médico de mi puesto laboral.</p>';
            $p3 = '<p>&nbsp;</p><p>En los últimos 7 días he consumido algunos de los siguientes medicamentos:</p>';
            $drogas = $p1.$p2.$p3;
            $detservicio->informe()->create([
                'drogas' => $drogas,
            ]);
        }else{
            if(empty($detservicio->informe->drogas)){
                $p1 = '<p>Por Medio de la presente AUTORIZO ( X )/NO AUTORIZO (  ) al equipo del Centro Medico &amp;quot;San Miguel Arcangel&amp;quot;';
                $p2 = ', a realizar examen Toxicológico (Drogas), en cumplimiento al perfil médico de mi puesto laboral.</p>';
                $p3 = '<p>&nbsp;</p><p>En los últimos 7 días he consumido algunos de los siguientes medicamentos:</p>';
                $drogas = $p1.$p2.$p3;
                $detservicio->informe()->update([
                    'drogas' => $drogas,
                ]);
            }
        }
        return view('admin.informes.drogas', compact(
            'detservicio','doctors','drogas'
        ));
    }

    public function updatinforme(Request $request, Informe $informe)
    {
        $informe->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$informe->detservicio)->with('update', 'Informe Confidencial Actualizado');
    }

    public function realizados(Request $request, Detservicio $detservicio)
    {
        if($detservicio->informe()->count() == 0){
            $detservicio->informe()->create([
                $examenes = [],
            ]);
        }
        return view('admin.informes.realizados', compact(
            'detservicio'
        ));
    }

    public function updatrealizados(Request $request, Informe $informe)
    {
        // return $request->all();
        if($request->input('examenes') == null){
            $examenes = [];
        }
        else{
            $examenes = json_encode($request->input('examenes'));
        }
        $informe->update([
            'examenes' => $examenes,
        ]);
        return redirect()->route('admin.servicios.evaluacion',$informe->detservicio)->with('update', 'Examenes Realizados Actualizado');
    }
}
