<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Servicio;
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
        $servicios = Servicio::with(['cliente'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',1)//Auth::user()->sede)
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function change(Request $request)
    {
        $periodo = $request->input('mes').$request->input('año');
        $servicios = Servicio::with(['cliente'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',1)//Auth::user()->sede)
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function create()
    {
        $evaluacion = Categoria::where('modulo', 9)->pluck('nombre','codigo');
        $clientes = Cliente::orderBy('razsoc')->pluck('razsoc','id');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento','20')->pluck('nombre','codigo');
        $examen = Examen::pluck('nombre','id');
        return view('admin.servicios.create', compact(
            'evaluacion','clientes','departamentos','provincias','examen'
        ));
    }

    public function store(Request $request)
    {
        // return $request->all();
    }

    public function show(Servicio $servicio)
    {
        //
    }

    public function edit(Servicio $servicio)
    {
        //
    }

    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    public function destroy(Servicio $servicio)
    {
        //
    }
}
