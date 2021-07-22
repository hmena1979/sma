<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

use App\Imports\CategoriaImport;
use App\Imports\ClienteImport;
use App\Imports\DepartamentoImport;
use App\Imports\ProvinciaImport;
use App\Imports\UbigeoImport;
use App\Imports\ExamenImport;

class ImportController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
        $this->middleware('can:admin.imports.index')->only('index');
    }

    public function index()
    {
        return view('admin.import.index');
    }

    public function categoria(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Categoría.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new CategoriaImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function Departamento(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Departamento.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new DepartamentoImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function Provincia(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Provincia.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ProvinciaImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function Ubigeo(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Ubigeo.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new UbigeoImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function examen(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Examen.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ExamenImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function cliente(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Cliente.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ClienteImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }
}
