<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Servicio;
use App\Models\Detservicio;
use App\Models\Examedico;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;
use App\Models\Examen;


class ServicioController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.servicios.index')->only('index');
		$this->middleware('can:admin.servicios.create')->only('create','store');
		$this->middleware('can:admin.servicios.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index($periodo = '000000')
    {
        if($periodo == '000000'){
            $periodo = session('periodo');
        }
        $servicios = Servicio::with(['cliente','eval'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',Auth::user()->sede)
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function change(Request $request)
    {
        $periodo = $request->input('mes').$request->input('año');
        $servicios = Servicio::with(['cliente','eval'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',Auth::user()->sede)
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function create()
    {
        $evaluacion = Categoria::where('modulo', 9)->pluck('nombre','codigo');
        $clientes = Cliente::orderBy('razsoc')->pluck('razsoc','id');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento','20')->pluck('nombre','codigo');
        $examen = Examen::get();//pluck('nombre','id');
        return view('admin.servicios.create', compact(
            'evaluacion','clientes','departamentos','provincias','examen'
        ));
    }

    public function store(Request $request)
    {
        $rules = [
            'fecha' => 'required',
            'cliente_id' => 'required',
            'departamento' => 'required',
            'provincia' => 'required',
            'ubigeo' => 'required',
            'ubicacion' => 'required',
            'glosa' => 'required',
            'examenes' => 'required',
        ];
        $messages = [
    		'fecha.required' => 'Ingrese Fecha.',
    		'cliente_id.required' => 'Seleccione Cliente.',
    		'departamento.required' => 'Seleccione Departamento.',
    		'provincia.required' => 'Seleccione Provincia.',
    		'ubigeo.required' => 'Seleccione Ubigeo.',
    		'ubicacion.required' => 'Ingrese Ubicación.',
    		'glosa.required' => 'Ingrese Referencia.',
    		'examenes.required' => 'Seleccione Examen.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $servicio = Servicio::create([
                'sede_id' => Auth::user()->sede,
                'periodo' => session('periodo'),
                'fecha' => $request->input('fecha'),
                'evaluacion' => $request->input('evaluacion'),
                'cliente_id' => $request->input('cliente_id'),
                'departamento' => $request->input('departamento'),
                'provincia' => $request->input('provincia'),
                'ubigeo' => $request->input('ubigeo'),
                'ubicacion' => $request->input('ubicacion'),
                'glosa' => $request->input('glosa'),
                'examenes' => json_encode($request->input('examenes')),
            ]);
            return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('store', 'Servicio Creado, Agregue Colaboradores');
        }
    }

    public function show(Servicio $servicio)
    {
        //
    }

    public function edit(Servicio $servicio)
    {
        $evaluacion = Categoria::where('modulo', 9)->pluck('nombre','codigo');
        $clientes = Cliente::orderBy('razsoc')->pluck('razsoc','id');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento',$servicio->departamento)->pluck('nombre','codigo');
        $ubigeo = Ubigeo::where('provincia',$servicio->provincia)->pluck('nombre','codigo');
        $examen = Examen::get();//pluck('nombre','id');
        return view('admin.servicios.edit', compact(
            'servicio','evaluacion','clientes','departamentos','provincias','ubigeo','examen'
        ));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $rules = [
            'fecha' => 'required',
            'cliente_id' => 'required',
            'departamento' => 'required',
            'provincia' => 'required',
            'ubigeo' => 'required',
            'ubicacion' => 'required',
            'glosa' => 'required',
            'examenes' => 'required',
        ];
        $messages = [
    		'fecha.required' => 'Ingrese Fecha.',
    		'cliente_id.required' => 'Seleccione Cliente.',
    		'departamento.required' => 'Seleccione Departamento.',
    		'provincia.required' => 'Seleccione Provincia.',
    		'ubigeo.required' => 'Seleccione Ubigeo.',
    		'ubicacion.required' => 'Ingrese Ubicación.',
    		'glosa.required' => 'Ingrese Referencia.',
    		'examenes.required' => 'Seleccione Examen.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $servicio->update([
                'fecha' => $request->input('fecha'),
                'evaluacion' => $request->input('evaluacion'),
                'cliente_id' => $request->input('cliente_id'),
                'departamento' => $request->input('departamento'),
                'provincia' => $request->input('provincia'),
                'ubigeo' => $request->input('ubigeo'),
                'ubicacion' => $request->input('ubicacion'),
                'glosa' => $request->input('glosa'),
                'examenes' => json_encode($request->input('examenes')),
            ]);
            return redirect()->route('admin.servicios.index')->with('update', 'Servicio Actualizado');
        }
    }

    public function addcolaborador(Servicio $servicio)
    {
        
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        return view('admin.servicios.addcolaborador', compact(
            'servicio','area','puesto'
        ));        
    }

    public function storecolaborador(Request $request, Servicio $servicio)
    {
        $rules = [
            'colaborador_id' => 'required',
        ];
        $messages = [
    		'colaborador_id.required' => 'Seleccione Colaborador.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $detservicio = $servicio->detservicios()->create([
                'colaborador_id' => $request->input('colaborador_id'),
                'area_id' => $request->input('area_id'),
                'puesto_id' => $request->input('puesto_id'),
                'ocuactual' => $request->input('ocuactual'),
            ]);
            

            return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('store', 'Colaborador asignado al Servicio');
        }
    }

    public function destroycolaborador(Detservicio $detservicio)
    {
        $servicio = $detservicio->servicio_id;
        $detservicio->examedico()->delete();
        $detservicio->delete();
        return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('destroy', 'Colaborador Quitado');

    }

    public function evaluacion(Detservicio $detservicio)
    {
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        if(kvfa($detservicio->servicio->examenes,'1') && $detservicio->examedico()->count() == 0){
            $detservicio->examedico()->create([
                'fecha' => $detservicio->servicio->fecha,
                'anamnesis' => 'PACIENTE NO REFIERE MOLESTIAS',
                'ectoscopia' => 'COORDINACIÓN CRONOLÓGICA CON EDAD MENCIONADA, LENGUAJE CLARO Y COHERENTE, AREG, AREH, AREN',
                'estmental' => 'GLASGOW 15 PUNTOS DESPIERTO LOTEP',
            ]);
        }
        return view('admin.servicios.evaluacion', compact(
            'detservicio','area','puesto','resultado'
        ));   
    }

    public function updatevaluacion(Request $request, Detservicio $detservicio)
    {
        return 'Guardo';
    }

    

    public function destroy(Servicio $servicio)
    {
        //
    }
}
