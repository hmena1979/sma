<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Colaborador;
use App\Models\Colantocupacional;
use App\Models\Categoria;
use App\Models\Sede;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;

class ColaboradorController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.colaboradors.index')->only('index');
		$this->middleware('can:admin.colaboradors.create')->only('create','store');
		$this->middleware('can:admin.colaboradors.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index()
    {
        // $colaboradors = Colaborador::all();
        // return view('admin.colaboradors.index', compact('colaboradors'));
        return view('admin.colaboradors.index');
    }

    public function registro(Request $request)
    {
        if($request->ajax()){
            return datatables()
                ->of(Colaborador::select('id','nombres','numdoc','fecnac','telefono'))
                ->addColumn('btn','admin.colaboradors.action')
                ->rawColumns(['btn'])
                ->toJson();
        }
    }

    public function create()
    {
        $tipdoc = Categoria::where('modulo', 1)->where('codigo','<>','6')->orderBy('codigo')->pluck('nombre','codigo');
        $sexo = Categoria::where('modulo', 2)->pluck('nombre','codigo');
        $estciv = Categoria::where('modulo', 3)->pluck('nombre','codigo');
        $gradins = Categoria::where('modulo', 4)->pluck('nombre','codigo');
        $ubicacion = Sede::where('id',session('sede'))->value('ubigeo');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento',substr($ubicacion,0,2))->pluck('nombre','codigo');
        $ubigeo = Ubigeo::where('provincia',substr($ubicacion,0,4))->pluck('nombre','codigo');
        return view('admin.colaboradors.create', compact(
            'tipdoc','sexo','estciv','gradins','departamentos','provincias','ubigeo','ubicacion'
        ));
    }

    public function store(Request $request)
    {
        $rules = [
            'numdoc' => 'required',
            'apellido' => 'required',
            'nombre' => 'required',
            'sexo_id' => 'required',
            'estciv_id' => 'required',
        ];
        $messages = [
    		'numdoc.required' => 'Ingrese Número de documento.',
    		'apellido.required' => 'Ingrese Apellido.',
    		'nombre.required' => 'Ingrese Nombre.',
    		'sexo_id.required' => 'Seleccione Sexo.',
    		'estciv_id.required' => 'Seleccione Estado Civil.',
    		'fecnac.required' => 'Ingrese Fecha de Nacimiento.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $nombres = $request->input('apellido').' '.$request->input('nombre');
            $data = $request->all();
            $data = array_merge($data,[
                'nombres' => $nombres
            ]);
            $colaborador = Colaborador::create($data);
            $colaborador->colantpatologico()->create();
            $colaborador->colantfamiliar()->create(['hijo_viv'=>$request->input('numhijos')]);
            // $role->permissions()->sync($request->permissions);
            return redirect()->route('admin.colaboradors.edit',$colaborador)->with('store', 'Datos personales agregados, Imgrese antecedentes');
        }
    }

    public function show(Colaborador $colaborador)
    {
        //
    }

    public function edit(Colaborador $colaborador)
    {
        $tipdoc = Categoria::where('modulo', 1)->where('codigo','<>','6')->orderBy('codigo')->pluck('nombre','codigo');
        $sexo = Categoria::where('modulo', 2)->pluck('nombre','codigo');
        $estciv = Categoria::where('modulo', 3)->pluck('nombre','codigo');
        $gradins = Categoria::where('modulo', 4)->pluck('nombre','codigo');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento',$colaborador->departamento)->pluck('nombre','codigo');
        $ubigeo = Ubigeo::where('provincia',$colaborador->provincia)->pluck('nombre','codigo');
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        return view('admin.colaboradors.edit', compact(
            'colaborador','tipdoc','sexo','estciv','gradins','departamentos','provincias','ubigeo','area','puesto'
        ));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        $rules = [
            'numdoc' => 'required',
            'apellido' => 'required',
            'nombre' => 'required',
            'sexo_id' => 'required',
            'estciv_id' => 'required',
            'fecnac' => 'required',
        ];
        $messages = [
    		'numdoc.required' => 'Ingrese Número de documento.',
    		'apellido.required' => 'Ingrese Apellido.',
    		'nombre.required' => 'Ingrese Nombre.',
    		'sexo_id.required' => 'Seleccione Sexo.',
    		'estciv_id.required' => 'Seleccione Estado Civil.',
    		'fecnac.required' => 'Ingrese Fecha de Nacimiento.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $nombres = $request->input('apellido').' '.$request->input('nombre');
            $data = $request->all();
            $data = array_merge($data,[
                'nombres' => $nombres
            ]);
            $colaborador->update([
                'apellido'=>$request->input('apellido'),
                'nombre'=>$request->input('nombre'),
                'nombres'=>$request->input('apellido').' '.$request->input('nombre'),
                'fecnac'=>$request->input('fecnac'),
                'sexo_id'=>$request->input('sexo_id'),
                'tipdoc_id'=>$request->input('tipdoc_id'),
                'numdoc'=>$request->input('numdoc'),
                'domicilio'=>$request->input('domicilio'),
                'departamento'=>$request->input('departamento'),
                'provincia'=>$request->input('provincia'),
                'ubigeo'=>$request->input('ubigeo'),
                'residencia'=>$request->input('residencia'),
                'lugnac'=>$request->input('lugnac'),
                'tieresi'=>$request->input('tieresi'),
                'nacionalidad'=>$request->input('nacionalidad'),
                'email'=>$request->input('email'),
                'telefono'=>$request->input('telefono'),
                'estciv_id'=>$request->input('estciv_id'),
                'gradinst_id'=>$request->input('gradinst_id'),
                'numhijos'=>$request->input('numhijos'),
                'numdepend'=>$request->input('numdepend')
            ]);// = Colaborador::create($data);
            $colaborador->colantpatologico()->update($request->colantpatologicos);
            $colaborador->colantfamiliar()->update($request->colantfamiliar);
            // $role->permissions()->sync($request->permissions);
            return redirect()->route('admin.colaboradors.index')->with('update', 'Colaborador Actualizado');
        }
    }

    public function destroy(Colaborador $colaborador)
    {
        // 
    }

    public function tabla_ao($colaborador)
    {
        $antecedente = Colantocupacional::where('colaborador_id',$colaborador)->get();
        return view('admin.colaboradors.antocupacional',compact('antecedente'));
    }

    public function addao($envio)
    {
        $ao = json_decode($envio);
        if($ao->tipo == 1){
            $t = Colantocupacional::create([
                'colaborador_id' => $ao->id,
                'empresa' => $ao->empresa,
                'area_id' => $ao->area,
                'puesto_id' => $ao->puesto,
                'fecha' => $ao->fecha,
                'tiempo' => $ao->tiempo,
                'exposicion' => $ao->exposicion,
                'epp' => $ao->epp,
                'cretiro' => $ao->cretiro
            ]);

        }else{
            $ao = Colantocupacional::where('id',$ao->id)->update([
                'empresa'=>$ao->empresa,
                'area_id'=>$ao->area,
                'puesto_id'=>$ao->puesto,
                'fecha'=>$ao->fecha,
                'tiempo'=>$ao->tiempo,
                'exposicion'=>$ao->exposicion,
                'epp'=>$ao->epp,
                'cretiro'=>$ao->cretiro
            ]);
        }

        return true;
        // return true;
    }

    public function busao($id)
    {
        $ao = Colantocupacional::findOrFail($id);
        return response()->json($ao);
    }

    public function destroyao(Colantocupacional $id)
    {
        $id->delete();
    }



    
}
