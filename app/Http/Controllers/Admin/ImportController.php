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
use App\Imports\PruebaImport;
use App\Imports\ObshemogImport;
use App\Imports\OtrhemogImport;
use App\Imports\CatorinaImport;
use App\Imports\CatheceImport;
use App\Imports\Cie10Import;
use App\Imports\ColaboradorImport;
use App\Imports\ColantfamiliarImport;
use App\Imports\ColantocupacionalImport;
use App\Imports\ColantpatologicoImport;
use App\Imports\DetreporteImport;
use App\Imports\DoctorImport;
use App\Imports\ReporteImport;

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

    public function prueba(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Prueba.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new PruebaImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function obshemog(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Obshemog.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ObshemogImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function otrhemog(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Otrhemog.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new OtrhemogImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function catorina(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Catorina.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new CatorinaImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function cathece(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Cathece.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new CatheceImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function cie10(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivos Cie10.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new Cie10Import, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function reporte(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivos Reporte.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ReporteImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function detreporte(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivos DetReporte.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new DetreporteImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

	public function colaborador(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Colaborador.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ColaboradorImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }
	public function colantfamiliar(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Colaborador.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ColantfamiliarImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

	public function colantpatologico(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Colaborador.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ColantpatologicoImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

	public function colantocupacional(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo AntOcupacional.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new ColantocupacionalImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

	public function doctor(Request $request)
    {
    	$rules = [
			'archivo' => 'required'
    	];
    	$messages = [
			'archivo.required' => 'No ha selecionado archivo Doctor.xlsx'
    	];

    	$validator = validator::make($request->all(), $rules, $messages);
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
		else:
    		$file = $request->file('archivo');
    		Excel::import(new DoctorImport, $file);

    		return redirect('/admin/import')->with('message', 'Archivo importado')->with('typealert', 'success');
    	endif;
    }

    public function dni(Request $request)
    {
    	// Datos
		$token = 'apis-token-772.ThFC49Fimrb-a6fsvsWFzNCe8qKe5VyW';
		$dni = '80486916';

		// Iniciar llamada a API
		$curl = curl_init();

		// Buscar dni
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 2,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Referer: https://apis.net.pe/consulta-dni-api',
			'Authorization: Bearer ' . $token
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		// Datos listos para usar
		$persona = json_decode($response);
		// var_dump($persona);
		return $persona;
	}
}
