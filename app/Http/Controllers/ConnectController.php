<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\DashboardController;

use App\Models\User;
use App\Models\Param;
// Use App\Models\Empresa;
// use App\Models\Sede;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ConnectController extends Controller
{
    public function __construct()
    {
		$this->middleware('guest')->except(['getLogout']);
	}

    public function getLogin()
    {
		return false;
    	return view('connect.login');
    }

    public function getRegister()
    {
    	return view('connect.registerate');

    }
    
    public function postLogin(Request $request)
    {
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Ingrese E-mail.',
    		'email.email' => 'Formato E-mail incorrecto.',
    		'password.required' => 'Ingrese Contraseña.',
    		'password.min' => 'Contraseña mínimo 8 caracteres.'
		];
		

    	$validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
		else:
			//True: Siempre conectado - False: Se desconecta la session
			if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],false)):
				if(Param::count() <> 0){
					$param = Param::FindOrFail(1);
					// $empresa = Empresa::FindOrFail(Auth::user()->empresa);
					// $sede = Sede::FindOrFail(Auth::user()->sede);
					session(['periodo' => periodo()]);
					// session(['empresa' => Auth::user()->empresa]);
					session(['sede' => Auth::user()->sede]);
					// session(['fecha' => \Carbon\Carbon::now()->format('Y-m-d')]);
					// session(['igv' => $empresa->por_igv]);
					// session(['renta' => $empresa->por_renta]);
					// session(['mrenta' => $empresa->monto_renta]);
					// session(['principal' => $sede->principal]);
				}
				
    			return redirect('/admin/inicio');
    		else:
    			return back()->with('message', 'Correo electrónico o clave incorrecto')->with('typealert', 'danger');
    		endif;
    	endif;

    }
    
    public function postRegister(Request $request)
    {
    	$rules = [
    		'name' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8',
    		'cpassword' => 'required|same:password'
    	];
    	$messages = [
    		'name.required' => 'Ingrese Nombre.',
    		'email.required' => 'Ingrese E-mail.',
    		'email.email' => 'Formato E-mail incorrecto.',
    		'password.required' => 'Ingrese Contraseña.',
    		'password.min' => 'Contraseña mínimo 8 caracteres.',
    		'cpassword.required' => 'Ingrese Confirmación de Contraseña.',
    		'cpassword.same' => 'Confirmación de Contraseña distinto.'
    	];

    	$validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
    	else:
			// if(Param::count() == 0){
			// 	Param::create();
			// }
    		$user = new User;
    		$user->name = Str::upper(e($request->input('name')));
    		$user->email = e($request->input('email'));
			$user->password = Hash::make($request->input('password'));
			$user->save();
			$var = $this->permisos_inicial($user);

			$perm = new DashboardController();
			$perm->permisosfaltantes();

			return redirect('/login')->with('message', 'Registro guardado')->with('typealert', 'success');
    	endif;

    }

	public function permisos_inicial(User $user)
	{
		if(Role::count() == 0){
			$role1 = Role::create(['name' => 'DESARROLLO']);
		}
		if(Permission::count() == 0){
			Permission::create(['name' => 'admin.inicio',
								'description' =>'Puede ver el Inicio',
								'module_id' => '1',
								'module_name' => 'INICIO'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.evaluacion',
								'description' =>'Puede realizar Evaluaciones',
								'module_id' => '1',
								'module_name' => 'INICIO']);
			Permission::create(['name' => 'admin.tablas',
								'description' =>'Puede ver tablas del sistema',
								'module_id' => '1',
								'module_name' => 'INICIO'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.util',
								'description' =>'Puede ver Utilitarios',
								'module_id' => '1',
								'module_name' => 'INICIO'])->syncRoles([$role1]);

			Permission::create(['name' => 'admin.colaboradors.index',
								'description' =>'Puede ver listado Colaboradores',
								'module_id' => '2',
								'module_name' => 'COLABORADORES']);
			Permission::create(['name' => 'admin.colaboradors.create'
								,'description' =>'Puede agregar Colaboradores',
								'module_id' => '2',
								'module_name' => 'COLABORADORES']);
			Permission::create(['name' => 'admin.colaboradors.edit',
								'description' =>'Puede editar Colaboradores',
								'module_id' => '2',
								'module_name' => 'COLABORADORES']);
			Permission::create(['name' => 'admin.colaboradors.destroy'
								,'description' =>'Puede eliminar Colaboradores',
								'module_id' => '2',
								'module_name' => 'COLABORADORES']);

			Permission::create(['name' => 'admin.servicios.index',
								'description' =>'Puede ver listado Servicios',
								'module_id' => '3',
								'module_name' => 'SERVICIOS']);
			Permission::create(['name' => 'admin.servicios.create'
								,'description' =>'Puede agregar Servicios',
								'module_id' => '3',
								'module_name' => 'SERVICIOS']);
			Permission::create(['name' => 'admin.servicios.edit',
								'description' =>'Puede editar Servicios',
								'module_id' => '3',
								'module_name' => 'SERVICIOS']);
			Permission::create(['name' => 'admin.servicios.destroy'
								,'description' =>'Puede eliminar Servicios',
								'module_id' => '3',
								'module_name' => 'SERVICIOS']);
	
			Permission::create(['name' => 'admin.usuarios.index',
								'description' =>'Puede ver listado Usuarios',
								'module_id' => '4',
								'module_name' => 'USUARIOS'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.usuarios.create',
								'description' =>'Puede agregar Usuarios',
								'module_id' => '4',
								'module_name' => 'USUARIOS'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.usuarios.edit',
								'description' =>'Puede editar Usuarios',
								'module_id' => '4',
								'module_name' => 'USUARIOS'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.usuarios.permission',
								'description' =>'Puede Asignar Roles',
								'module_id' => '4',
								'module_name' => 'USUARIOS'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.usuarios.password',
								'description' =>'Puede cambiar clave',
								'module_id' => '4',
								'module_name' => 'USUARIOS'])->syncRoles([$role1]);

			Permission::create(['name' => 'admin.roles.index',
								'description' =>'Puede ver listado Roles',
								'module_id' => '5',
								'module_name' => 'ROLES'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.roles.create',
								'description' =>'Puede agregar Roles',
								'module_id' => '5',
								'module_name' => 'ROLES'])->syncRoles([$role1]);
			Permission::create(['name' => 'admin.roles.edit',
								'description' =>'Puede editar Roles',
								'module_id' => '5',
								'module_name' => 'ROLES'])->syncRoles([$role1]);
			
			
		}
		$user->assignRole($role1);
		return true;
	}

    public function getLogout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
