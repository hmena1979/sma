<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Param;
// Use App\Models\Empresa;
// use App\Models\Sede;

use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('isadmin');
        $this->middleware('can:admin.inicio')->only('getDashboard');
    }
    
    public function getDashboard()
    {
        // return view('admin.dashboard');
        if(Param::count() <> 0){
            return view('admin.dashboard');
        }else{
            return view('admin.cargainicial');
        }
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
		
		// return redirect()->route('admin.inicio')->with('update', 'Permisos Agregados');
		// return redirect()->route('admin.inicio')->with('update', 'Registro Actualizado');
		return redirect()->route('admin.inicio')->with('message', 'Permisos Agregados')->with('typealert', 'success');
	}
}

