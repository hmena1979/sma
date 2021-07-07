<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.colaboradores.index')->only('index');
		$this->middleware('can:admin.colaboradores.create')->only('create','store');
		$this->middleware('can:admin.colaboradores.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index()
    {
        $colaboradores = Colaborador::all();
        return view('admin.colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        return view('admin.colaboradores.create', compact(''));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Colaborador $colaborador)
    {
        //
    }

    public function edit(Colaborador $colaborador)
    {
        //
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        //
    }

    public function destroy(Colaborador $colaborador)
    {
        //
    }
}
