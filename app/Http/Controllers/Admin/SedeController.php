<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sede;

class SedeController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.sedes.index')->only('index');
		$this->middleware('can:admin.sedes.create')->only('create','store');
		$this->middleware('can:admin.sedes.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index()
    {
        $sedes = Sede::all();
        return view('admin.sedes.index', compact('sedes'));
    }

    public function create()
    {
        return view('admin.sedes.create');
    }
    
    public function getchange()
    {
        $sedes = Sede::pluck('nombre', 'id');
        return view('admin.sedes.change', compact('sedes'));
    }

    public function postchange(Request $request)
    {
        session(['sede' => $request->input('sede')]);
        return redirect()->route('admin.inicio')->with('update', 'Se cambio la sede');
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            Sede::create($request->all());
            return redirect()->route('admin.sedes.index')->with('store', 'Sede agregada');
        }
    }

    public function show(Sede $sede)
    {
        //
    }

    public function edit(Sede $sede)
    {
        return view('admin.sedes.edit',compact('sede'));
    }

    public function update(Request $request, Sede $sede)
    {
        $rules = [
            'nombre' => 'required',
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $sede->update($request->all());
            return redirect()->route('admin.sedes.index')->with('update', 'Sede actualizada');
        }
    }

    public function destroy(Sede $sede)
    {
        //
    }
}
