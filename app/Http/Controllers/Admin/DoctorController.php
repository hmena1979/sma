<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.doctors.index')->only('index');
		$this->middleware('can:admin.doctors.create')->only('create','store');
		$this->middleware('can:admin.doctors.edit')->only('edit','update');
		$this->middleware('can:admin.doctors.destroy')->only('destroy');
    }

    public function index($activo = 1)
    {
        switch ($activo) {
            case '1':
                $doctors = Doctor::where('activo',1)->get();
                break;
            case '2':
                $doctors = Doctor::where('activo',2)->get();					
                break;
            case 'all':
                $doctors = Doctor::get();
                break;
            }
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|unique:doctors',
            'especialidad' => 'required'
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
    		'nombre.unique' => 'Doctor ya se Encuentra Registrado.',
    		'especialidad.required' => 'Ingrese Especialidad.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            if($request->hasFile('firma')){
                $archivo = $request->file('firma');
                Storage::disk('firmas')->makeDirectory('doctor');
                $firma = Storage::disk('firmas')->put('doctor', $archivo);
            }else{
                $firma = null;
            }
            Doctor::create([
                'activo' => $request->input('activo'),
                'nombre' => $request->input('nombre'),
                'especialidad' => $request->input('especialidad'),
                'cmp' => $request->input('cmp'),
                'telefono' => $request->input('telefono'),
                'celular' => $request->input('celular'),
                'firma' => $firma
            ]);
            return redirect()->route('admin.doctors.index')->with('store', 'Doctor agregado');
        }
    }

    public function show(Doctor $doctor)
    {
        //
    }

    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit',compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $rules = [
            'nombre' => "required|unique:doctors,nombre,$doctor->id",
            'especialidad' => 'required'
        ];
        $messages = [
    		'nombre.required' => 'Ingrese Nombre.',
            'nombre.unique' => 'Doctor ya se Encuentra Registrado.',
    		'especialidad.required' => 'Ingrese Especialidad.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            if($request->firma){
                if($doctor->firma){
                    Storage::disk('firmas')->delete($doctor->firma);
                }
                $archivo = $request->file('firma');
                Storage::disk('firmas')->makeDirectory('doctor');
                $firma = Storage::disk('firmas')->put('doctor', $archivo);
            }else{
                if($doctor->firma){
                    $firma = $doctor->firma;
                }else{
                    $firma = null;
                }
            }
            $doctor->update([
                'activo' => $request->input('activo'),
                'nombre' => $request->input('nombre'),
                'especialidad' => $request->input('especialidad'),
                'cmp' => $request->input('cmp'),
                'telefono' => $request->input('telefono'),
                'celular' => $request->input('celular'),
                'firma' => $firma
            ]);
        }
        return redirect()->route('admin.doctors.index')->with('update', 'Doctor Actualizado');

    }

    public function destroy(Doctor $doctor)
    {
        //
    }
}
