<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Detservicio;
use App\Models\Examedico;
use App\Models\Categoria;


class ExamenController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('isadmin');
        // $this->middleware('can:admin.inicio')->only('getDashboard');
    }

    public function examedico(Request $request, Detservicio $detservicio)
    {
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $grado = Categoria::where('modulo', 10)->pluck('nombre','codigo');
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        return view('admin.examens.examedico', compact(
            'detservicio','area','puesto','grado','resultado'
        ));  
    }

    public function updatexamed(Request $request, Examedico $examedico)
    {
        $hallazgos = [
            'piel' => $request->input('piel'),
            'cabello' => $request->input('cabello'),
            'ojos' => $request->input('ojos'),
            'avod' => $request->input('avod'),
            'avoi' => $request->input('avoi'),
            'ccod' => $request->input('ccod'),
            'ccoi' => $request->input('ccoi'),
            'fojo' => $request->input('fojo'),
            'vcolores' => $request->input('vcolores'),
            'vprofundidad' => $request->input('vprofundidad'),
            'oidos' => $request->input('oidos'),
            'nariz' => $request->input('nariz'),
            'boca' => $request->input('boca'),
            'faringe' => $request->input('faringe'),
            'cuello' => $request->input('cuello'),
            'aprespira' => $request->input('aprespira'),
            'apcardio' => $request->input('apcardio'),
            'apdiges' => $request->input('apdiges'),
            'apgenit' => $request->input('apgenit'),
            'aploco' => $request->input('aploco'),
            'marcha' => $request->input('marcha'),
            'columna' => $request->input('columna'),
            'miesup' => $request->input('miesup'),
            'mieinf' => $request->input('mieinf'),
            'sislinf' => $request->input('sislinf'),
            'sisnerv' => $request->input('sisnerv')
        ];
        $hallazgos = json_encode($hallazgos);
        $movrep = [
            'mrcabeza' => $request->input('mrcabeza'),
            'mrtronco' => $request->input('mrtronco'),
            'mrmmss' => $request->input('mrmmss'),
            'mrmmii' => $request->input('mrmmii')
        ];
        $movrep = json_encode($movrep);
        $cuestionario = [
            'cnuca1' => $request->input('cnuca1'),
            'cnuca2' => $request->input('cnuca2'),
            'cnuca3' => $request->input('cnuca3'),
            'chombrod1' => $request->input('chombrod1'),
            'chombroi1' => $request->input('chombroi1'),
            'chombro2' => $request->input('chombro2'),
            'chombro3' => $request->input('chombro3'),
            'ccodod1' => $request->input('ccodod1'),
            'ccodoi1' => $request->input('ccodoi1'),
            'ccodo2' => $request->input('ccodo2'),
            'ccodo3' => $request->input('ccodo3'),
            'cmmd1' => $request->input('cmmd1'),
            'cmmi1' => $request->input('cmmi1'),
            'cmm2' => $request->input('cmm2'),
            'cmm3' => $request->input('cmm3'),
            'ccoldor1' => $request->input('ccoldor1'),
            'ccoldor2' => $request->input('ccoldor2'),
            'ccoldor3' => $request->input('ccoldor3'),
            'ccollum1' => $request->input('ccollum1'),
            'ccollum2' => $request->input('ccollum2'),
            'ccollum3' => $request->input('ccollum3'),
            'ccaderad1' => $request->input('ccaderad1'),
            'ccaderai1' => $request->input('ccaderai1'),
            'ccadera2' => $request->input('ccadera2'),
            'ccadera3' => $request->input('ccadera3'),
            'crodillad1' => $request->input('crodillad1'),
            'crodillai1' => $request->input('crodillai1'),
            'crodilla2' => $request->input('crodilla2'),
            'crodilla3' => $request->input('crodilla3'),
            'ctobillod1' => $request->input('ctobillod1'),
            'ctobilloi1' => $request->input('ctobilloi1'),
            'ctobillo2' => $request->input('ctobillo2'),
            'ctobillo3' => $request->input('ctobillo3')
        ];
        $cuestionario = json_encode($cuestionario);
        $efarticulacion = [
            'exhombrod1' => $request->input('exhombrod1'),
            'exhombrod2' => $request->input('exhombrod2'),
            'exhombrod3' => $request->input('exhombrod3'),
            'exhombrod4' => $request->input('exhombrod4'),
            'exhombrod5' => $request->input('exhombrod5'),
            'exhombrod6' => $request->input('exhombrod6'),
            'exhombrod7' => $request->input('exhombrod7'),
            'exhombrod8' => $request->input('exhombrod8'),
            'exhombrod9' => $request->input('exhombrod9'),
            'exhombroi1' => $request->input('exhombroi1'),
            'exhombroi2' => $request->input('exhombroi2'),
            'exhombroi3' => $request->input('exhombroi3'),
            'exhombroi4' => $request->input('exhombroi4'),
            'exhombroi5' => $request->input('exhombroi5'),
            'exhombroi6' => $request->input('exhombroi6'),
            'exhombroi7' => $request->input('exhombroi7'),
            'exhombroi8' => $request->input('exhombroi8'),
            'exhombroi9' => $request->input('exhombroi9'),
            'excodod1' => $request->input('excodod1'),
            'excodod2' => $request->input('excodod2'),
            'excodod3' => $request->input('excodod3'),
            'excodod4' => $request->input('excodod4'),
            'excodod5' => $request->input('excodod5'),
            'excodod6' => $request->input('excodod6'),
            'excodod7' => $request->input('excodod7'),
            'excodod8' => $request->input('excodod8'),
            'excodod9' => $request->input('excodod9'),
            'excodoi1' => $request->input('excodoi1'),
            'excodoi2' => $request->input('excodoi2'),
            'excodoi3' => $request->input('excodoi3'),
            'excodoi4' => $request->input('excodoi4'),
            'excodoi5' => $request->input('excodoi5'),
            'excodoi6' => $request->input('excodoi6'),
            'excodoi7' => $request->input('excodoi7'),
            'excodoi8' => $request->input('excodoi8'),
            'excodoi9' => $request->input('excodoi9'),
            'exmunecad1' => $request->input('exmunecad1'),
            'exmunecad2' => $request->input('exmunecad2'),
            'exmunecad3' => $request->input('exmunecad3'),
            'exmunecad4' => $request->input('exmunecad4'),
            'exmunecad5' => $request->input('exmunecad5'),
            'exmunecad6' => $request->input('exmunecad6'),
            'exmunecad7' => $request->input('exmunecad7'),
            'exmunecad8' => $request->input('exmunecad8'),
            'exmunecad9' => $request->input('exmunecad9'),
            'exmunecai1' => $request->input('exmunecai1'),
            'exmunecai2' => $request->input('exmunecai2'),
            'exmunecai3' => $request->input('exmunecai3'),
            'exmunecai4' => $request->input('exmunecai4'),
            'exmunecai5' => $request->input('exmunecai5'),
            'exmunecai6' => $request->input('exmunecai6'),
            'exmunecai7' => $request->input('exmunecai7'),
            'exmunecai8' => $request->input('exmunecai8'),
            'exmunecai9' => $request->input('exmunecai9'),
            'exmanod1' => $request->input('exmanod1'),
            'exmanod2' => $request->input('exmanod2'),
            'exmanod3' => $request->input('exmanod3'),
            'exmanod4' => $request->input('exmanod4'),
            'exmanod5' => $request->input('exmanod5'),
            'exmanod6' => $request->input('exmanod6'),
            'exmanod7' => $request->input('exmanod7'),
            'exmanod8' => $request->input('exmanod8'),
            'exmanod9' => $request->input('exmanod9'),
            'exmanoi1' => $request->input('exmanoi1'),
            'exmanoi2' => $request->input('exmanoi2'),
            'exmanoi3' => $request->input('exmanoi3'),
            'exmanoi4' => $request->input('exmanoi4'),
            'exmanoi5' => $request->input('exmanoi5'),
            'exmanoi6' => $request->input('exmanoi6'),
            'exmanoi7' => $request->input('exmanoi7'),
            'exmanoi8' => $request->input('exmanoi8'),
            'exmanoi9' => $request->input('exmanoi9'),
            'excaderad1' => $request->input('excaderad1'),
            'excaderad2' => $request->input('excaderad2'),
            'excaderad3' => $request->input('excaderad3'),
            'excaderad4' => $request->input('excaderad4'),
            'excaderad5' => $request->input('excaderad5'),
            'excaderad6' => $request->input('excaderad6'),
            'excaderad7' => $request->input('excaderad7'),
            'excaderad8' => $request->input('excaderad8'),
            'excaderad9' => $request->input('excaderad9'),
            'excaderai1' => $request->input('excaderai1'),
            'excaderai2' => $request->input('excaderai2'),
            'excaderai3' => $request->input('excaderai3'),
            'excaderai4' => $request->input('excaderai4'),
            'excaderai5' => $request->input('excaderai5'),
            'excaderai6' => $request->input('excaderai6'),
            'excaderai7' => $request->input('excaderai7'),
            'excaderai8' => $request->input('excaderai8'),
            'excaderai9' => $request->input('excaderai9'),
            'exrodillad1' => $request->input('exrodillad1'),
            'exrodillad2' => $request->input('exrodillad2'),
            'exrodillad3' => $request->input('exrodillad3'),
            'exrodillad4' => $request->input('exrodillad4'),
            'exrodillad5' => $request->input('exrodillad5'),
            'exrodillad6' => $request->input('exrodillad6'),
            'exrodillad7' => $request->input('exrodillad7'),
            'exrodillad8' => $request->input('exrodillad8'),
            'exrodillad9' => $request->input('exrodillad9'),
            'exrodillai1' => $request->input('exrodillai1'),
            'exrodillai2' => $request->input('exrodillai2'),
            'exrodillai3' => $request->input('exrodillai3'),
            'exrodillai4' => $request->input('exrodillai4'),
            'exrodillai5' => $request->input('exrodillai5'),
            'exrodillai6' => $request->input('exrodillai6'),
            'exrodillai7' => $request->input('exrodillai7'),
            'exrodillai8' => $request->input('exrodillai8'),
            'exrodillai9' => $request->input('exrodillai9'),
            'extobillod1' => $request->input('extobillod1'),
            'extobillod2' => $request->input('extobillod2'),
            'extobillod3' => $request->input('extobillod3'),
            'extobillod4' => $request->input('extobillod4'),
            'extobillod5' => $request->input('extobillod5'),
            'extobillod6' => $request->input('extobillod6'),
            'extobillod7' => $request->input('extobillod7'),
            'extobillod8' => $request->input('extobillod8'),
            'extobillod9' => $request->input('extobillod9'),
            'extobilloi1' => $request->input('extobilloi1'),
            'extobilloi2' => $request->input('extobilloi2'),
            'extobilloi3' => $request->input('extobilloi3'),
            'extobilloi4' => $request->input('extobilloi4'),
            'extobilloi5' => $request->input('extobilloi5'),
            'extobilloi6' => $request->input('extobilloi6'),
            'extobilloi7' => $request->input('extobilloi7'),
            'extobilloi8' => $request->input('extobilloi8'),
            'extobilloi9' => $request->input('extobilloi9')
        ];
        $efarticulacion = json_encode($efarticulacion);
        $eftemmss = [
            'phalend' => $request->input('phalend'),
            'phaleni' => $request->input('phaleni'),
            'neerd' => $request->input('neerd'),
            'neeri' => $request->input('neeri'),
            'tineld' => $request->input('tineld'),
            'tineli' => $request->input('tineli'),
            'brazod' => $request->input('brazod'),
            'brazoi' => $request->input('brazoi'),
            'Finkelsteind' => $request->input('Finkelsteind'),
            'Finkelsteini' => $request->input('Finkelsteini')
        ];
        $eftemmss = json_encode($eftemmss);

        $efsimetria = [
            'efmmss' => $request->input('efmmss'),
            'efmmssobs' => $request->input('efmmssobs'),
            'efmmii' => $request->input('efmmii'),
            'efmmiiobs' => $request->input('efmmiiobs'),
        ];
        $efsimetria = json_encode($efsimetria);

        $cvejeantero = [
            'cveacervical' => $request->input('cveacervical'),
            'cveacervicaldes' => $request->input('cveacervicaldes'),
            'cveadorsal' => $request->input('cveadorsal'),
            'cveadorsaldes' => $request->input('cveadorsaldes'),
            'cvealumbar' => $request->input('cvealumbar'),
            'cvealumbardes' => $request->input('cvealumbardes'),
        ];
        $cvejeantero = json_encode($cvejeantero);

        $cvejelateral = [
            'cveldorsal' => $request->input('cveldorsal'),
            'cveldorsaldes' => $request->input('cveldorsaldes'),
            'cvellumbar' => $request->input('cvellumbar'),
            'cvellumbardes' => $request->input('cvellumbardes'),
        ];
        $cvejelateral = json_encode($cvejelateral);

        $cvmovilidad = [
            'cvflexionc' => $request->input('cvflexionc'),
            'cvextencionc' => $request->input('cvextencionc'),
            'cvlatderc' => $request->input('cvlatderc'),
            'cvlatizqc' => $request->input('cvlatizqc'),
            'cvrotderc' => $request->input('cvrotderc'),
            'cvrotizqc' => $request->input('cvrotizqc'),
            'cvdolorc' => $request->input('cvdolorc'),
            'cvirradiac' => $request->input('cvirradiac'),
            'cvflexionl' => $request->input('cvflexionl'),
            'cvextencionl' => $request->input('cvextencionl'),
            'cvlatderl' => $request->input('cvlatderl'),
            'cvlatizql' => $request->input('cvlatizql'),
            'cvrotderl' => $request->input('cvrotderl'),
            'cvrotizql' => $request->input('cvrotizql'),
            'cvdolorl' => $request->input('cvdolorl'),
            'cvirradial' => $request->input('cvirradial'),
        ];
        $cvmovilidad = json_encode($cvmovilidad);
        
        $cvtest = [
            'cvtlasegued' => $request->input('cvtlasegued'),
            'cvtlaseguei' => $request->input('cvtlaseguei'),
            'cvtschoberd' => $request->input('cvtschoberd'),
            'cvtschoberi' => $request->input('cvtschoberi'),
        ];
        $cvtest = json_encode($cvtest);
        
        $cvpalpacion = [
            'cpalcervicalap' => $request->input('cpalcervicalap'),
            'cpalcervicalcm' => $request->input('cpalcervicalcm'),
            'cpaldorsalap' => $request->input('cpaldorsalap'),
            'cpaldorsalcm' => $request->input('cpaldorsalcm'),
            'cpallumbarap' => $request->input('cpallumbarap'),
            'cpallumbarcm' => $request->input('cpallumbarcm'),
        ];
        $cvpalpacion = json_encode($cvpalpacion);
        
        $mehoja1 = [
            'h1_1pto' => $request->input('h1_1pto'),
            'h1_2pto' => $request->input('h1_2pto'),
            'h1_3pto' => $request->input('h1_3pto'),
            'h1_4pto' => $request->input('h1_4pto'),
            'h1_tpto' => $request->input('h1_tpto'),
            'h1_obs' => $request->input('h1_obs'),
        ];
        $mehoja1 = json_encode($mehoja1);
        
        $mehoja2 = [
            'h2_1pto' => $request->input('h2_1pto'),
            'h2_2pto' => $request->input('h2_2pto'),
            'h2_3pto' => $request->input('h2_3pto'),
            'h2_4pto' => $request->input('h2_4pto'),
            'h2_tpto' => $request->input('h2_tpto'),
            'h2_dcr1' => $request->input('h2_dcr1'),
            'h2_dcr2' => $request->input('h2_dcr2'),
            'h2_dcr3' => $request->input('h2_dcr3'),
            'h2_dcr4' => $request->input('h2_dcr4'),
            'h2_obs' => $request->input('h2_obs'),
        ];
        $mehoja2 = json_encode($mehoja2);


        $examedico->update([
            'fecha' => $request->input('fecha'),
            'anamnesis' => $request->input('anamnesis'),
            'talla' => $request->input('talla'),
            'peso' => $request->input('peso'),
            'imc' => $request->input('imc'),
            'pabdominal' => $request->input('pabdominal'),
            'fresp' => $request->input('fresp'),
            'fcard' => $request->input('fcard'),
            'sato2' => $request->input('sato2'),
            'temperatura' => $request->input('temperatura'),
            'cintura' => $request->input('cintura'),
            'cadera' => $request->input('cadera'),
            'torax' => $request->input('torax'),
            'toraxesp' => $request->input('toraxesp'),
            'pasisto' => $request->input('pasisto'),
            'padisto' => $request->input('padisto'),
            'pa' => $request->input('pa'),
            'otros' => $request->input('otros'),
            'ectoscopia' => $request->input('ectoscopia'),
            'estmental' => $request->input('estmental'),
            'hallazgos' => $hallazgos,
            'manicarga' => $request->input('manicarga'),
            'postura' => $request->input('postura'),
            'movrep' => $movrep,
            'pertiempo' => $request->input('pertiempo'),
            'cuestionario' => $cuestionario,
            'efarticulacion' => $efarticulacion,
            'eftemmss' => $eftemmss,
            'efsimetria' => $efsimetria,
            'cvejeantero' => $cvejeantero,
            'cvejelateral' => $cvejelateral,
            'cvmovilidad' => $cvmovilidad,
            'cvtest' => $cvtest,
            'cvpalpacion' => $cvpalpacion,
            'metiempo' => $request->input('metiempo'),
            'meaptitud' => $request->input('meaptitud'),
            'mehoja1' => $mehoja1,
            'mehoja2' => $mehoja2,
            'hallazgoexafisico' => $request->input('hallazgoexafisico'),
            'hallazgorestante' => $request->input('hallazgorestante'),
            'comentarios' => $request->input('comentarios'),
            'recomendaciones' => $request->input('recomendaciones'),
            'resultado' => $request->input('resultado'),

        ]);
        return redirect()->route('admin.servicios.evaluacion',$examedico->detservicio)->with('update', 'Examen Médico Actualizado');
    }

}
