<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Sede;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cliente = Cliente::findOrFail(session('cliente'));
        $sedes = Sede::get();
        return view('company.dashboard', compact('cliente','sedes'));
    }
}
