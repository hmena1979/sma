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
            $detservicio->examedico()->create([
                'fecha' =>$servicio->fecha,
                'anamnesis' => 'PACIENTE NO REFIERE MOLESTIAS',
                'ectoscopia' => 'COORDINACIÓN CRONOLÓGICA CON EDAD MENCIONADA, LENGUAJE CLARO Y COHERENTE, AREG, AREH, AREN',
                'estmental' => 'GLASGOW 15 PUNTOS DESPIERTO LOTEP',
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
        return view('admin.servicios.evaluacion', compact(
            'detservicio','area','puesto','resultado'
        ));   
    }

    public function updatevaluacion(Request $request, Detservicio $detservicio)
    {
        return 'Guardo';
    }

    public function examedico(Request $request, Detservicio $detservicio)
    {
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        return view('admin.servicios.examedico', compact(
            'detservicio','area','puesto'
        ));  
    }

    public function updatexamed(Request $request, Examedico $examedico)
    {
        $hallazgos = [
            'piel' => $request->input('piel'),
            'cabello' => $request->input('cabello'),
            'ojos' => $request->input('ojos'),
            'avod' => $request->input('avod'),
            'avoi' => $request->input('avoi'),
            'ccod' => $request->input('ccod'),
            'ccoi' => $request->input('ccoi'),
            'fojo' => $request->input('fojo'),
            'vcolores' => $request->input('vcolores'),
            'vprofundidad' => $request->input('vprofundidad'),
            'oidos' => $request->input('oidos'),
            'nariz' => $request->input('nariz'),
            'boca' => $request->input('boca'),
            'faringe' => $request->input('faringe'),
            'cuello' => $request->input('cuello'),
            'aprespira' => $request->input('aprespira'),
            'apcardio' => $request->input('apcardio'),
            'apdiges' => $request->input('apdiges'),
            'apgenit' => $request->input('apgenit'),
            'aploco' => $request->input('aploco'),
            'marcha' => $request->input('marcha'),
            'columna' => $request->input('columna'),
            'miesup' => $request->input('miesup'),
            'mieinf' => $request->input('mieinf'),
            'sislinf' => $request->input('sislinf'),
            'sisnerv' => $request->input('sisnerv')
        ];
        $hallazgos = json_encode($hallazgos);
        $movrep = [
            'mrcabeza' => $request->input('mrcabeza'),
            'mrtronco' => $request->input('mrtronco'),
            'mrmmss' => $request->input('mrmmss'),
            'mrmmii' => $request->input('mrmmii')
        ];
        $movrep = json_encode($movrep);

        $examedico->update([
            'fecha' => $request->input('fecha'),
            'anamnesis' => $request->input('anamnesis'),
            'talla' => $request->input('talla'),
            'peso' => $request->input('peso'),
            'imc' => $request->input('imc'),
            'pabdominal' => $request->input('pabdominal'),
            'fresp' => $request->input('fresp'),
            'fcard' => $request->input('fcard'),
            'sato2' => $request->input('sato2'),
            'temperatura' => $request->input('temperatura'),
            'cintura' => $request->input('cintura'),
            'cadera' => $request->input('cadera'),
            'torax' => $request->input('torax'),
            'toraxesp' => $request->input('toraxesp'),
            'pasisto' => $request->input('pasisto'),
            'padisto' => $request->input('padisto'),
            'pa' => $request->input('pa'),
            'otros' => $request->input('otros'),
            'ectoscopia' => $request->input('ectoscopia'),
            'estmental' => $request->input('estmental'),
            'hallazgos' => $hallazgos,
            'manicarga' => $request->input('manicarga'),
            'postura' => $request->input('postura'),
            'pertiempo' => $request->input('pertiempo'),
            'movrep' => $movrep,
        ]);
        return redirect()->route('admin.servicios.evaluacion',$examedico->detservicio)->with('update', 'Examen Médico Actualizado');
    }

    public function destroy(Servicio $servicio)
    {
        //
    }
}
