<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bacteriologia;
use App\Models\Bioquimica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Categoria;
use App\Models\Catorina;
use App\Models\Cathece;
use App\Models\Detservicio;
use App\Models\Doctor;
use App\Models\Hemograma;
use App\Models\Obshemog;
use App\Models\Otrhemog;
use App\Models\Prueba;
use App\Models\Orina;
use App\Models\Hece;
use App\Models\Metalpesado;
use App\Models\Parasitologia;
use App\Models\Toxicologico;
use App\Models\Urocultivo;

class LaboratorioController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('isadmin');
        // $this->middleware('can:admin.inicio')->only('getDashboard');
    }

    public function bioquimica(Request $request, Detservicio $detservicio)
    {
        $realizadas = $detservicio->bioquimica->pluck('prueba_id');
        // return $realizadas;
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $pruebas = Prueba::orderBy('nombre')->whereNotIn('id',$realizadas)->pluck('nombre','id');
        $pruebast = Prueba::orderBy('nombre')->pluck('nombre','id');
        return view('admin.laboratorio.bioquimica', compact(
            'detservicio','resultado','doctors','pruebas','pruebast'
        ));
    }

    public function updatbioquimica(Request $request, Detservicio $detservicio)
    {
        $detservicio->update([
            'fecha_bio' => $request->input('fecha_bio'),
            'doctor_bio' => $request->input('doctor_bio'),
        ]);
        return redirect()->route('admin.servicios.evaluacion',$detservicio)->with('update', 'Bioquimica Actualizada');
    }

    public function tabla_pr($id)
    {
        $bioquimica = Bioquimica::where('detservicio_id',$id)->get();
        return view('admin.laboratorio.bioquimica.realizadas',compact('bioquimica'));
    }

    public function addpr($envio)
    {
        $pr = json_decode($envio);
        if($pr->tipo == 1){
            $t = Bioquimica::create([
                'detservicio_id' => $pr->id,
                'prueba_id' => $pr->prueba_id,
                'valor' => $pr->valor,
            ]);

        }else{
            $ao = Bioquimica::where('id',$pr->id)->update([
                'prueba_id' => $pr->prueba_id,
                'valor' => $pr->valor,
            ]);
        }

        return true;
        // return true;
    }

    public function buspr($id)
    {
        $ao = Bioquimica::findOrFail($id);
        return response()->json($ao);
    }

    public function destroypr(Bioquimica $bioquimica)
    {
        $bioquimica->delete();
        return true;
    }


    public function hemograma(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $obshemograma = Obshemog::pluck('nombre','id');
        $otrhemograma = Otrhemog::pluck('nombre','id');
        return view('admin.laboratorio.hemograma', compact(
            'detservicio','doctors','obshemograma','otrhemograma'
        ));
    }

    public function updathemograma(Request $request, Hemograma $hemograma)
    {
        $hemograma->update($request->except(
            'hemoglobina','conteo'
        ));
        $hemograma->detservicio()->update([
            'hemoglobina' => $request->input('hemoglobina'),
        ]);
        return redirect()->route('admin.servicios.evaluacion',$hemograma->detservicio)->with('update', 'Hemograma Actualizado');
    }

    public function orina(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $cantidad = Catorina::whereIn('modulo',['0','1'])->pluck('nombre','id');
        $aspecto = Catorina::whereIn('modulo',['0','2'])->pluck('nombre','id');
        $cristales = Catorina::whereIn('modulo',['0','3'])->pluck('nombre','id');
        $otros = Catorina::whereIn('modulo',['0','4'])->pluck('nombre','id');
        return view('admin.laboratorio.orina', compact(
            'detservicio','doctors','cantidad','aspecto','cristales','otros'
        ));
    }

    public function updatorina(Request $request, Orina $orina)
    {
        $orina->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$orina->detservicio)->with('update', 'Examen de Orina Actualizado');
    }

    public function hece(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $muestra = Cathece::where('modulo',1)->pluck('nombre','id');
        $parasito = Cathece::whereIn('modulo',['0','2'])->pluck('nombre','id');
        $dparasito = Cathece::whereIn('modulo',['0','3'])->pluck('nombre','id');
        return view('admin.laboratorio.hece', compact(
            'detservicio','doctors','muestra','parasito','dparasito'
        ));
    }

    public function updathece(Request $request, Hece $hece)
    {
        $hece->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$hece->detservicio)->with('update', 'Examen de Heces Actualizado');
    }

    public function parasitologia(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $muestra = Cathece::where('modulo',1)->pluck('nombre','id');
        $parasito = Cathece::whereIn('modulo',['0','2'])->pluck('nombre','id');
        $dparasito = Cathece::whereIn('modulo',['0','3'])->pluck('nombre','id');
        return view('admin.laboratorio.parasitologia', compact(
            'detservicio','doctors','muestra','parasito','dparasito'
        ));
    }

    public function updatparasitologia(Request $request, Parasitologia $parasitologia)
    {
        $parasitologia->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$parasitologia->detservicio)->with('update', 'Parasitología Clínica Actualizado');
    }

    public function bacteriologia(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $muestra = Cathece::where('modulo',1)->pluck('nombre','id');
        $germen = Cathece::whereIn('modulo',['0','4'])->pluck('nombre','id');
        $antibiograma = Cathece::where('modulo','5')->pluck('nombre','id');
        return view('admin.laboratorio.bacteriologia', compact(
            'detservicio','doctors','muestra','germen','antibiograma'
        ));
    }

    public function updatbacteriologia(Request $request, Bacteriologia $bacteriologia)
    {
        $bacteriologia->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$bacteriologia->detservicio)->with('update', 'Microbiología Clínica Actualizado');
    }

    public function urocultivo(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $cantidad = Catorina::whereIn('modulo',['0','1'])->pluck('nombre','id');
        $germen = Cathece::whereIn('modulo',['0','4'])->orderBy('nombre')->pluck('nombre','id');
        $otros = Catorina::whereIn('modulo',['0','4'])->pluck('nombre','id');
        $antibiograma = Cathece::whereIn('modulo',['0','5'])->pluck('nombre','id');
        return view('admin.laboratorio.urocultivo', compact(
            'detservicio','doctors','cantidad','germen','otros','antibiograma'
        ));
    }

    public function updaturocultivo(Request $request, Urocultivo $urocultivo)
    {
        // return $request->all();
        $urocultivo->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$urocultivo->detservicio)->with('update', 'Urocultivo Actualizado');
    }

    public function toxicologico(Request $request, Detservicio $detservicio)
    {
        $realizadas = $detservicio->toxicologico->pluck('prueba_id');
        // return $realizadas;
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $pruebas = Prueba::orderBy('nombre')->where('toxicologico',1)->whereNotIn('id',$realizadas)->pluck('nombre','id');
        $pruebast = Prueba::orderBy('nombre')->where('toxicologico',1)->pluck('nombre','id');
        return view('admin.laboratorio.toxicologico', compact(
            'detservicio','resultado','doctors','pruebas','pruebast'
        ));
    }

    public function updattoxicologico(Request $request, Detservicio $detservicio)
    {
        $detservicio->update([
            'fecha_tox' => $request->input('fecha_tox'),
            'doctor_tox' => $request->input('doctor_tox'),
        ]);
        return redirect()->route('admin.servicios.evaluacion',$detservicio)->with('update', 'Examen Toxicológico Actualizado');
    }

    public function tabla_tox($id)
    {
        $toxicologico = Toxicologico::where('detservicio_id',$id)->get();
        return view('admin.laboratorio.toxicologico.realizadas',compact('toxicologico'));
    }

    public function addtox($envio)
    {
        $pr = json_decode($envio);
        if($pr->tipo == 1){
            $t = Toxicologico::create([
                'detservicio_id' => $pr->id,
                'prueba_id' => $pr->prueba_id,
                'resultado' => $pr->resultado,
            ]);

        }else{
            $ao = Toxicologico::where('id',$pr->id)->update([
                'prueba_id' => $pr->prueba_id,
                'resultado' => $pr->resultado,
            ]);
        }

        return true;
        // return true;
    }

    public function bustox($id)
    {
        $ao = Toxicologico::findOrFail($id);
        return response()->json($ao);
    }

    public function destroytox(Toxicologico $toxicologico)
    {
        $toxicologico->delete();
        return true;
    }

    public function metalpesado(Request $request, Detservicio $detservicio)
    {
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        return view('admin.laboratorio.metalpesado', compact(
            'detservicio','doctors'
        ));
    }

    public function updatmetalpesado(Request $request, Metalpesado $metalpesado)
    {
        // return $request->all();
        $metalpesado->update($request->all());
        return redirect()->route('admin.servicios.evaluacion',$metalpesado->detservicio)->with('update', 'Metales Pesados Actualizado');
    }

}
