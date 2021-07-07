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
		// $this->agregar_permiso('5','CATEGORIAS','admin.categorias.index','Puede ver listado Categorías');
		// $this->agregar_permiso('5','CATEGORIAS','admin.categorias.create','Puede agregar Categorías');
		// $this->agregar_permiso('5','CATEGORIAS','admin.categorias.edit','Puede editar Categorías');
		// $this->agregar_permiso('5','CATEGORIAS','admin.categorias.destroy','Puede eliminar Categorías');
		// $this->agregar_permiso('1','INICIO','admin.imports.index','Puede Importar Tablas iniciales');

		// $this->agregar_permiso('6','TIPO DE PRODUCTO','admin.tipoproductos.index','Puede ver listado Tipo de Productos');
		// $this->agregar_permiso('6','TIPO DE PRODUCTO','admin.tipoproductos.create','Puede agregar Tipo de Productos');
		// $this->agregar_permiso('6','TIPO DE PRODUCTO','admin.tipoproductos.edit','Puede editar Tipo de Productos');
		// $this->agregar_permiso('6','TIPO DE PRODUCTO','admin.tipoproductos.destroy','Puede eliminar Tipo de Productos');
		
		// $this->agregar_permiso('7','UNIDAD DE MEDIDA','admin.umedidas.index','Puede ver listado Unidades de Medida');
		// $this->agregar_permiso('7','UNIDAD DE MEDIDA','admin.umedidas.create','Puede agregar Unidades de Medida');
		// $this->agregar_permiso('7','UNIDAD DE MEDIDA','admin.umedidas.edit','Puede editar Unidades de Medida');
		// $this->agregar_permiso('7','UNIDAD DE MEDIDA','admin.umedidas.destroy','Puede eliminar Unidades de Medida');

		// $this->agregar_permiso('8','PRODUCTOS','admin.productos.index','Puede ver listado Productos');
		// $this->agregar_permiso('8','PRODUCTOS','admin.productos.create','Puede agregar Productos');
		// $this->agregar_permiso('8','PRODUCTOS','admin.productos.edit','Puede editar Productos');
		// $this->agregar_permiso('8','PRODUCTOS','admin.productos.destroy','Puede eliminar Productos');
		
		// $this->agregar_permiso('9','TIPO DE COMPROBANTES','admin.tipocomprobantes.index','Puede ver listado Tipo de Comprobantes');
		// $this->agregar_permiso('9','TIPO DE COMPROBANTES','admin.tipocomprobantes.create','Puede agregar Tipo de Comprobantes');
		// $this->agregar_permiso('9','TIPO DE COMPROBANTES','admin.tipocomprobantes.edit','Puede editar Tipo de Comprobantes');
		// $this->agregar_permiso('9','TIPO DE COMPROBANTES','admin.tipocomprobantes.destroy','Puede eliminar Tipo de Comprobantes');
		
		// $this->agregar_permiso('10','REGISTRO DE COMPRAS','admin.rcompras.index','Puede ver listado Registro de Compras');
		// $this->agregar_permiso('10','REGISTRO DE COMPRAS','admin.rcompras.create','Puede agregar Registro de Compras');
		// $this->agregar_permiso('10','REGISTRO DE COMPRAS','admin.rcompras.edit','Puede editar Registro de Compras');
		// $this->agregar_permiso('10','REGISTRO DE COMPRAS','admin.rcompras.destroy','Puede eliminar Registro de Compras');
		
		// $this->agregar_permiso('11','CUENTAS','admin.cuentas.index','Puede ver listado Cuentas');
		// $this->agregar_permiso('11','CUENTAS','admin.cuentas.create','Puede agregar Cuentas');
		// $this->agregar_permiso('11','CUENTAS','admin.cuentas.edit','Puede editar Cuentas');
		// $this->agregar_permiso('11','CUENTAS','admin.cuentas.destroy','Puede eliminar Cuentas');
		
		// $this->agregar_permiso('12','DETRACCIONES','admin.detraccions.index','Puede ver listado Detracciones');
		// $this->agregar_permiso('12','DETRACCIONES','admin.detraccions.create','Puede agregar Detracciones');
		// $this->agregar_permiso('12','DETRACCIONES','admin.detraccions.edit','Puede editar Detracciones');
		// $this->agregar_permiso('12','DETRACCIONES','admin.detraccions.destroy','Puede eliminar Detracciones');
		
		// $this->agregar_permiso('13','TESORERIA','admin.tesorerias.index','Puede ver listado Tesoreria');
		// $this->agregar_permiso('13','TESORERIA','admin.tesorerias.create','Puede agregar Tesoreria');
		// $this->agregar_permiso('13','TESORERIA','admin.tesorerias.edit','Puede editar Tesoreria');
		// $this->agregar_permiso('13','TESORERIA','admin.tesorerias.destroy','Puede eliminar Tesoreria');
		
		// return redirect()->route('admin.inicio')->with('update', 'Permisos Agregados');
		// return redirect()->route('admin.inicio')->with('update', 'Registro Actualizado');
		return redirect()->route('admin.inicio')->with('message', 'Permisos Agregados')->with('typealert', 'success');
	}
}

