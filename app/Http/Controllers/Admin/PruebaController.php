<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bioquimica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Prueba;

class PruebaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.pruebas.index')->only('index');
		$this->middleware('can:admin.pruebas.create')->only('create','store');
		$this->middleware('can:admin.pruebas.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index()
    {
        $pruebas = Prueba::all();
        return view('admin.pruebas.index', compact('pruebas'));
    }

    public function create()
    {
        return view('admin.pruebas.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|unique:pruebas',
            'medida' => 'required'
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
    		'nombre.unique' => 'Prueba ya se Encuentra Registrada.',
    		'medida.required' => 'Ingrese Medida.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            Prueba::create($request->all());
            return redirect()->route('admin.pruebas.index')->with('store', 'Prueba agregado');
        }
    }

    public function show(Prueba $prueba)
    {
        //
    }

    public function edit(Prueba $prueba)
    {
        return view('admin.pruebas.edit',compact('prueba'));
    }

    public function update(Request $request, Prueba $prueba)
    {
        $rules = [
            'nombre' => "required|unique:pruebas,nombre,$prueba->id",
            'medida' => 'required'
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
    		'nombre.unique' => 'Prueba ya se Encuentra Registrada.',
    		'medida.required' => 'Ingrese Medida.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $prueba->update($request->all());
            return redirect()->route('admin.pruebas.index')->with('store', 'Prueba actualizada');
        }
    }

    public function destroy(Prueba $prueba)
    {
        $val= Bioquimica::where('prueba_id',$prueba->id)->count();
        if($val > 0){
            return back()->with('message', 'Registro no Puede ser Elimando, Ya esta en prueba Bioquímica')->with('typealert', 'danger');
        }else{
            $prueba->delete();
            return redirect()->route('admin.pruebas.index')->with('destroy', 'Prueba eliminada');
        }
    }
}
