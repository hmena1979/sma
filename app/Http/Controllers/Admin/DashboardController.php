<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Param;
use App\Models\Servicio;
use App\Models\Sede;
// Use App\Models\Empresa;

use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('isadmin');
        $this->middleware('can:admin.inicio')->only('getDashboard');
    }
    
    // public function getDashboard($periodo = '000000')

    public function getDashboard($periodo = '000000')
    {
        if(Param::count() == 0){
			return view('admin.cargainicial');
		}
		if($periodo == '000000'){
            $periodo = session('periodo');
        }
		$finalizado = 2;
		$servicios = Servicio::with('cliente:id,razsoc')
			->join('detservicios','servicios.id','detservicios.servicio_id')
            ->join('colaboradors','detservicios.colaborador_id','colaboradors.id')
            ->select('detservicios.id','servicios.cliente_id','servicios.fecha','detservicios.colaborador_id','colaboradors.nombres')
			->whereNull('detservicios.deleted_at')
            ->where('servicios.periodo', $periodo)
            ->where('servicios.sede_id',session('sede'))
			->where('detservicios.finalizado',2)
            ->orderBy('colaboradors.nombres')
            ->get();
		// return $servicios;

		// $servicios = Servicio::with('detservicios')->where('periodo',$periodo)->where('sede_id', Auth::user()->sede)->get();
		return view('admin.dashboard',compact('periodo','servicios','finalizado'));
		// return view('admin.dashboard');
    }

	public function change(Request $request)
    {
        $periodo = $request->input('mes').$request->input('año');
		session(['periodo' => $periodo]);
		$finalizado = $request->input('finalizado');
		if($finalizado == 3){
			$servicios = Servicio::with('cliente:id,razsoc')
			->join('detservicios','servicios.id','detservicios.servicio_id')
            ->join('colaboradors','detservicios.colaborador_id','colaboradors.id')
            ->select('detservicios.id','servicios.cliente_id','servicios.fecha','detservicios.colaborador_id','colaboradors.nombres')
			->whereNull('detservicios.deleted_at')
            ->where('servicios.periodo', $periodo)
            ->where('servicios.sede_id', session('sede'))
            ->orderBy('colaboradors.nombres')
            ->get();
		}else{
			$servicios = Servicio::with('cliente:id,razsoc')
				->join('detservicios','servicios.id','detservicios.servicio_id')
				->join('colaboradors','detservicios.colaborador_id','colaboradors.id')
				->select('detservicios.id','servicios.cliente_id','servicios.fecha','detservicios.colaborador_id','colaboradors.nombres')
				->whereNull('detservicios.deleted_at')
				->where('servicios.periodo', $periodo)
				->where('servicios.sede_id', session('sede'))
				->where('detservicios.finalizado',$finalizado)
				->orderBy('colaboradors.nombres')
				->get();
		}
        return view('admin.dashboard', compact('periodo','servicios','finalizado'));
    }

    public function cargainicial(Request $request)
    {
        $rules = [
    		'ruc' => 'required',
    		'razsoc' => 'required',
    		'apitoken' => 'required',
    		'dominio' => 'required',
    		'periodo' => 'required',
    		'telefono' => 'required',
    		'celular' => 'required',
    		'email' => 'required'
    	];
    	$messages = [
    		'ruc.required' => 'Ingrese RUC.',
    		'razsoc.required' => 'Ingrese Razón Social.',
    		'apitoken.required' => 'Ingrese API.',
    		'dominio.required' => 'Ingrese Dominio.',
    		'periodo.required' => 'Ingrese Periodo.',
    		'telefono.required' => 'Ingrese Teléfono.',
    		'celular.required' => 'Ingrese Celular.',
    		'email.required' => 'Ingrese E-mail.',
    	];

        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
    	}else{
            if(Param::count() == 0){
                Param::create([
                    'ruc' => e($request->input('ruc')),
                    'razsoc' => e($request->input('razsoc')),
                    'apitoken' => e($request->input('apitoken')),
                    'dominio' => e($request->input('dominio')),
                    'periodo' => e($request->input('periodo')),
                    'telefono' => e($request->input('telefono')),
                    'celular' => e($request->input('celular')),
                    'email' => e($request->input('email')),
                    'direccion' => e($request->input('direccion')),
                ]);
				Sede::create([
					'principal' => 1,
					'nombre' => 'SEDE PRINCIPAL',
					'telefono' => e($request->input('telefono')),
                    'celular' => e($request->input('celular')),
                    'email' => e($request->input('email')),
                    'direccion' => e($request->input('direccion')),
				]);
            }
            return redirect()->route('logoutg');
        }
    }

    public function agregar_permiso($module_id,$module_name,$name, $description)
	{
		Permission::create([
			'module_id' => $module_id,
			'module_name' => $module_name,
			'name' => $name,
			'description' => $description
			]);
		return true;
	}

	public function permisosfaltantes()
	{
		// $this->agregar_permiso('1','INICIO','admin.imports.index','Puede Importar Tablas iniciales');

		// $this->agregar_permiso('6','CATEGORIAS','admin.categorias.index','Puede ver listado Categorías');
		// $this->agregar_permiso('6','CATEGORIAS','admin.categorias.create','Puede agregar Categorías');
		// $this->agregar_permiso('6','CATEGORIAS','admin.categorias.edit','Puede editar Categorías');
		// $this->agregar_permiso('6','CATEGORIAS','admin.categorias.destroy','Puede eliminar Categorías');
		
		// $this->agregar_permiso('7','DOCTORES','admin.doctors.index','Puede ver listado Doctores');
		// $this->agregar_permiso('7','DOCTORES','admin.doctors.create','Puede agregar Doctores');
		// $this->agregar_permiso('7','DOCTORES','admin.doctors.edit','Puede editar Doctores');
		// $this->agregar_permiso('7','DOCTORES','admin.doctors.destroy','Puede eliminar Doctores');
		
		// $this->agregar_permiso('8','CLIENTES','admin.clientes.index','Puede ver listado Clientes');
		// $this->agregar_permiso('8','CLIENTES','admin.clientes.create','Puede agregar Clientes');
		// $this->agregar_permiso('8','CLIENTES','admin.clientes.edit','Puede editar Clientes');
		// $this->agregar_permiso('8','CLIENTES','admin.clientes.destroy','Puede eliminar Clientes');
		
		// $this->agregar_permiso('9','SEDES','admin.sedes.index','Puede ver listado Sedes');
		// $this->agregar_permiso('9','SEDES','admin.sedes.create','Puede agregar Sedes');
		// $this->agregar_permiso('9','SEDES','admin.sedes.edit','Puede editar Sedes');
		// $this->agregar_permiso('9','SEDES','admin.sedes.destroy','Puede eliminar Sedes');

		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.medica.index','Ver Examen Médico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.medica.edit','Modificar Examen Médico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.psico.index','Ver Evaluación Psicológica');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.psico.edit','Editar Evaluación Psicológica');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.oftalmo.index','Ver Evaluación Oftalmológica');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.oftalmo.edit','Editar Evaluación Oftalmológica');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.odonto.index','Ver Evaluación Odontológico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.odonto.edit','Editar Evaluación Odontológico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.radio.index','Ver Evaluación Radiográfico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.radio.edit','Editar Evaluación Radiográfico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.espiro.index','Ver Evaluación Espirometría');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.espiro.edit','Editar Evaluación Espirometría');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.audio.index','Ver Evaluación Audiometría');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.audio.edit','Editar Evaluación Audiometría');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.ekg.index','Ver Electrocardiograma');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.ekg.edit','Editar Electrocardiograma');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.derma.index','Ver Evaluación Dermatológico');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.derma.edit','Editar Evaluación Dermatológico');		
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.altura18.index','Ver Evaluación Altura 1.8m');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.altura18.edit','Editar Evaluación Altura 1.8m');		
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.altura25.index','Ver Evaluación Altura 2500msnm');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.altura25.edit','Editar Evaluación Altura 2500msnm');		
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.confinado.index','Ver Espacio Confinado');
		// $this->agregar_permiso('10','EVALUACIÓN MÉDICA','admin.confinado.edit','Editar Espacio Confinado');

		// $this->agregar_permiso('11','LABORATORIO','admin.laboratorio.index','Ver Pruebas');
		// $this->agregar_permiso('11','LABORATORIO','admin.laboratorio.edit','Editar Pruebas');
		$this->agregar_permiso('12','INFORMES','admin.informes.index','Ver Informes');
		$this->agregar_permiso('12','INFORMES','admin.informes.edit','Editar Informes');

		return redirect()->route('admin.inicio')->with('message', 'Permisos Agregados')->with('typealert', 'success');
	}
}

