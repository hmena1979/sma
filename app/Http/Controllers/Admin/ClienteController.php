<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cliente;
use App\Models\Servicio;

class ClienteController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.clientes.index')->only('index');
		$this->middleware('can:admin.clientes.create')->only('create','store');
		$this->middleware('can:admin.clientes.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('admin.clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'numdoc' => 'required',
            'razsoc' => 'required',
        ];
        $messages = [
    		'numdoc.required' => 'Ingrese Número de documento.',
    		'razsoc.required' => 'Ingrese Razón Social o Nombre.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            Cliente::create($request->all());
            return redirect()->route('admin.clientes.index')->with('store', 'Cliente agregado');
        }
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.edit',compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $rules = [
            'numdoc' => 'required',
            'razsoc' => 'required',
        ];
        $messages = [
    		'numdoc.required' => 'Ingrese Número de documento.',
    		'razsoc.required' => 'Razón Social o Nombre.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $cliente->update($request->all());
            return redirect()->route('admin.clientes.index')->with('update', 'Cliente actualizado');
        }
    }

    public function destroy(Cliente $cliente)
    {
        $pase = Servicio::where('cliente_id',$cliente->id)->count();
        if($pase > 0){
            return back()->with('message', 'Se ha producido un error, Cliente ya fue usado en Servicios')->with('typealert', 'danger');
        }
        $cliente->delete();
        return redirect()->route('admin.clientes.index')->with('destroy', 'Cliente Eliminado');
    }
}
