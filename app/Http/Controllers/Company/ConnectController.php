<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function login()
    {
        // return false;
        return view('company.login');
    }

    public function postlogin(Request $request)
    {
        $rules = [
    		'num_doc' => 'required',
    		'clave' => 'required'
    	];
    	$messages = [
    		'num_doc.required' => 'Ingrese RUC o Número de Documento.',
    		'clave.required' => 'Ingrese Clave.',
		];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
        }
		else{
            $numdoc = e($request->input('num_doc'));
            $clave = e($request->input('clave'));
            $cli = Cliente::where('numdoc',$numdoc)->where('clave',$clave)->first();
            if($cli){
                session(['cliente' => $cli->id]);
                session(['ingreso' => 1]);
                return redirect()->route('company.index');
            }else{
                session(['ingreso' => 0]);
                return back()->with('message', 'Revise sus credeciales')->with('typealert', 'danger');
            }
            return 'Valida';
        }
    }

    public function logout()
    {
        session(['ingreso' => 0]);
        return redirect('/');
    }
}
