<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Servicio;
use App\Models\Detservicio;
use App\Models\Examedico;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Ubigeo;
use App\Models\Examen;
use App\Models\Sede;
use App\Models\Bioquimica;
use App\Models\Cie10;
use App\Models\Doctor;

class ServicioController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('isadmin');
		$this->middleware('can:admin.servicios.index')->only('index');
		$this->middleware('can:admin.servicios.create')->only('create','store');
		$this->middleware('can:admin.servicios.edit')->only('edit','update');
		// $this->middleware('can:admin.usuarios.permisos')->only('editpermission','updatepermission');
    }

    public function index($periodo = '000000')
    {
        if($periodo == '000000'){
            $periodo = session('periodo');
        }
        $servicios = Servicio::with(['cliente','eval'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',session('sede'))
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function change(Request $request)
    {
        $periodo = $request->input('mes').$request->input('año');
        session(['periodo' => $periodo]);
        $servicios = Servicio::with(['cliente','eval'])
            ->select('id','fecha','evaluacion','cliente_id','ubicacion','glosa')
            ->where('periodo',$periodo)
            ->where('sede_id',session('sede'))
            ->get();
        return view('admin.servicios.index', compact('servicios','periodo'));
    }

    public function create()
    {
        $evaluacion = Categoria::where('modulo', 9)->pluck('nombre','codigo');
        $clientes = Cliente::orderBy('razsoc')->pluck('razsoc','id');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento','20')->pluck('nombre','codigo');
        $examen = Examen::get();//pluck('nombre','id');
        return view('admin.servicios.create', compact(
            'evaluacion','clientes','departamentos','provincias','examen'
        ));
    }

    public function store(Request $request)
    {
        $rules = [
            'fecha' => 'required',
            'cliente_id' => 'required',
            'departamento' => 'required',
            'provincia' => 'required',
            'ubigeo' => 'required',
            'ubicacion' => 'required',
            'glosa' => 'required',
            'examenes' => 'required',
        ];
        $messages = [
    		'fecha.required' => 'Ingrese Fecha.',
    		'cliente_id.required' => 'Seleccione Cliente.',
    		'departamento.required' => 'Seleccione Departamento.',
    		'provincia.required' => 'Seleccione Provincia.',
    		'ubigeo.required' => 'Seleccione Ubigeo.',
    		'ubicacion.required' => 'Ingrese Ubicación.',
    		'glosa.required' => 'Ingrese Referencia.',
    		'examenes.required' => 'Seleccione Examen.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $servicio = Servicio::create([
                'sede_id' => session('sede'),
                'periodo' => session('periodo'),
                'fecha' => $request->input('fecha'),
                'evaluacion' => $request->input('evaluacion'),
                'cliente_id' => $request->input('cliente_id'),
                'departamento' => $request->input('departamento'),
                'provincia' => $request->input('provincia'),
                'ubigeo' => $request->input('ubigeo'),
                'ubicacion' => $request->input('ubicacion'),
                'glosa' => $request->input('glosa'),
                'examenes' => json_encode($request->input('examenes')),
            ]);
            return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('store', 'Servicio Creado, Agregue Colaboradores');
        }
    }

    public function show(Servicio $servicio)
    {
        //
    }

    public function edit(Servicio $servicio)
    {
        $evaluacion = Categoria::where('modulo', 9)->pluck('nombre','codigo');
        $clientes = Cliente::orderBy('razsoc')->pluck('razsoc','id');
        $departamentos = Departamento::pluck('nombre','codigo');
        $provincias = Provincia::where('departamento',$servicio->departamento)->pluck('nombre','codigo');
        $ubigeo = Ubigeo::where('provincia',$servicio->provincia)->pluck('nombre','codigo');
        $examen = Examen::get();//pluck('nombre','id');
        return view('admin.servicios.edit', compact(
            'servicio','evaluacion','clientes','departamentos','provincias','ubigeo','examen'
        ));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $rules = [
            'fecha' => 'required',
            'cliente_id' => 'required',
            'departamento' => 'required',
            'provincia' => 'required',
            'ubigeo' => 'required',
            'ubicacion' => 'required',
            'glosa' => 'required',
            'examenes' => 'required',
        ];
        $messages = [
    		'fecha.required' => 'Ingrese Fecha.',
    		'cliente_id.required' => 'Seleccione Cliente.',
    		'departamento.required' => 'Seleccione Departamento.',
    		'provincia.required' => 'Seleccione Provincia.',
    		'ubigeo.required' => 'Seleccione Ubigeo.',
    		'ubicacion.required' => 'Ingrese Ubicación.',
    		'glosa.required' => 'Ingrese Referencia.',
    		'examenes.required' => 'Seleccione Examen.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $servicio->update([
                'fecha' => $request->input('fecha'),
                'evaluacion' => $request->input('evaluacion'),
                'cliente_id' => $request->input('cliente_id'),
                'departamento' => $request->input('departamento'),
                'provincia' => $request->input('provincia'),
                'ubigeo' => $request->input('ubigeo'),
                'ubicacion' => $request->input('ubicacion'),
                'glosa' => $request->input('glosa'),
                'examenes' => json_encode($request->input('examenes')),
            ]);
            return redirect()->route('admin.servicios.index')->with('update', 'Servicio Actualizado');
        }
    }

    public function addcolaborador(Servicio $servicio)
    {
        
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        return view('admin.servicios.addcolaborador', compact(
            'servicio','area','puesto'
        ));        
    }

    public function storecolaborador(Request $request, Servicio $servicio)
    {
        $rules = [
            'colaborador_id' => 'required',
        ];
        $messages = [
    		'colaborador_id.required' => 'Seleccione Colaborador.',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withinput();
        }else{
            $detservicio = $servicio->detservicios()->create([
                'colaborador_id' => $request->input('colaborador_id'),
                'area_id' => $request->input('area_id'),
                'puesto_id' => $request->input('puesto_id'),
                'ocuactual' => $request->input('ocuactual'),
                'fecha_bio' => $servicio->fecha,
                'fecha_tox' => $servicio->fecha,
            ]);
            

            return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('store', 'Colaborador asignado al Servicio');
        }
    }

    public function destroycolaborador(Detservicio $detservicio)
    {
        $servicio = $detservicio->servicio_id;
        $examenes = $detservicio->servicio->examenes;
        $detservicio->informe()->delete();
        $detservicio->examedico()->delete();
        $detservicio->exaoftalmo()->delete();
        $detservicio->exaaudio()->delete();
        $detservicio->bioquimica()->delete();
        
        if(kvfa($examenes,'5')){
            $detservicio->exapsico()->delete();
        }
        if(kvfa($examenes,'6')){
            $detservicio->exaekg()->delete();
        }
        if(kvfa($examenes,'4')){
            $detservicio->exaodonto()->delete();
        }
        if(kvfa($examenes,'7')){
            $detservicio->exaderma()->delete();
        }
        if(kvfa($examenes,'8')){
            $detservicio->exaespiro()->delete();
        }
        if(kvfa($examenes,'9')){
            $detservicio->exaradio()->delete();
        }
        if(kvfa($examenes,'10')){
            $detservicio->exaalt18()->delete();
        }
        if(kvfa($examenes,'11')){
            $detservicio->exaalt25()->delete();
        }
        if(kvfa($examenes,'12')){
            $detservicio->exaconfinado()->delete();
        }
        if(kvfa($examenes,'13')){
            $detservicio->exacovidant()->delete();
        }
        if(kvfa($examenes,'14')){
            $detservicio->exacovidpr()->delete();
        }
        if(kvfa($examenes,'15')){
            $detservicio->exacovidpcr()->delete();
        }
        if(kvfa($examenes,'17')){
            $detservicio->hemograma()->delete();
        }
        if(kvfa($examenes,'18')){
            $detservicio->orina()->delete();
        }
        if(kvfa($examenes,'19')){
            $detservicio->hece()->delete();
        }
        if(kvfa($examenes,'20')){
            $detservicio->parasitologia()->delete();
        }
        if(kvfa($examenes,'21')){
            $detservicio->bacteriologia()->delete();
        }

        // if($detservicio->informe()->count() <> 0){}
        $detservicio->examedico()->delete();
        $detservicio->delete();
        return redirect()->route('admin.servicios.addcolaborador',$servicio)->with('destroy', 'Colaborador Quitado');

    }

    public function evaluacion(Detservicio $detservicio)
    {
        // return $detservicio->bioquimica;
        $area = Categoria::where('modulo', 5)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $puesto = Categoria::where('modulo', 6)->orWhere('modulo', 0)->orderBy('nombre')->pluck('nombre','id');
        $resultado = Categoria::where('modulo', 7)->orderBy('nombre')->pluck('nombre','codigo');
        $altitud = Categoria::where('modulo', 11)->pluck('nombre','codigo');
        $doctors = Doctor::orderBy('nombre')->pluck('nombre','id');
        $cie = [$detservicio->diagcie, $detservicio->otrdiagcie1, $detservicio->otrdiagcie2, $detservicio->otrdiagcie3];
        $cie10s = Cie10::whereIn('codigo',$cie)->orderBy('codigo')->get()->pluck('codigo_nombre','codigo');
        $examenes = $detservicio->servicio->examenes;
        $fecha = $detservicio->servicio->fecha;
        
        // if(kvfa($detservicio->servicio->examenes,'1') && !$detservicio->examedico()->exists()){
        if(kvfa($examenes,'1') && $detservicio->examedico()->count() == 0){
            $hallazgos = [
                'piel' => 'SIN HALLAZGOS',
                'cabeza' => 'SIN HALLAZGOS',
                'cuello' => 'SIN HALLAZGOS',
                'nariz' => 'SIN HALLAZGOS',
                'boca' => 'SIN HALLAZGOS',
                'piezaeme' => 'NINGUNA',
                'piezaf' => 'NINGUNA',
                'oj_enfocu' => 'SIN HALLAZGOS',
                'oj_refpup' => 'NORMALES',
                'oj_vcol' => 'NORMAL',
                'oj_vprof' => 'NORMAL',
                'aprespira' => 'SIN HALLAZGOS',
                'apcardio' => 'SIN HALLAZGOS',
                'apdiges' => 'SIN HALLAZGOS',
                'aploco' => 'SIN HALLAZGOS',
                'apgenit' => 'SIN HALLAZGOS',
                'anillingui' => 'SIN HALLAZGOS',
                'tactorectal' => 1,
                'marcha' => 'SIN HALLAZGOS',
                'columna' => 'SIN HALLAZGOS',
                'refleosteo' => 'SIN HALLAZGOS',
                'miesup' => 'SIN HALLAZGOS',
                'mieinf' => 'SIN HALLAZGOS',
                'sisnerv' => 'SIN HALLAZGOS',
                'sislinf' => 'SIN HALLAZGOS',
                'hernia' => 'SIN HALLAZGOS',
                'varice' => 'SIN HALLAZGOS',
                'lenguaje' =>'ACORDE CON EL GRADO DE COMPETENCIA QUE LE EXIGEN EL DESARROLLO DE SU TAREA'
            ];
            $hallazgos = json_encode($hallazgos);
            $detservicio->examedico()->create([
                'fecha' => $fecha,
                'anamnesis' => 'PACIENTE NO REFIERE MOLESTIAS',
                'ectoscopia' => 'COORDINACIÓN CRONOLÓGICA CON EDAD MENCIONADA, LENGUAJE CLARO Y COHERENTE, AREG, AREH, AREN',
                'estmental' => 'GLASGOW 15 PUNTOS DESPIERTO LOTEP',
                'hallazgos' => $hallazgos,
            ]);
            $detservicio->exaoftalmo()->create([
                'fecha' => $fecha
            ]);
            $sede = Sede::findorFail(session('sede'));
            $detservicio->exaaudio()->create([
                'fecha' => $fecha,
                'aud_marca' => $sede->aud_marca,
                'aud_modelo' => $sede->aud_modelo,
                'aud_calibra' => $sede->aud_calibra,
            ]);
        }
        if(kvfa($examenes,'1')){
            $laboratorio = [];
            if($detservicio->bioquimica()->count() == 0){
                $detservicio->bioquimica()->create(['prueba_id' => 1]);
                $detservicio->bioquimica()->create(['prueba_id' => 2]);
                $detservicio->bioquimica()->create(['prueba_id' => 3]);
                $detservicio->bioquimica()->create(['prueba_id' => 4]);
                $detservicio->bioquimica()->create(['prueba_id' => 5]);
                $detservicio->bioquimica()->create(['prueba_id' => 6]);
                $detservicio->bioquimica()->create(['prueba_id' => 7]);
                $detservicio->bioquimica()->create(['prueba_id' => 8]);
                $detservicio->bioquimica()->create(['prueba_id' => 9]);
                $detservicio->bioquimica()->create(['prueba_id' => 10]);
                $detservicio->bioquimica()->create(['prueba_id' => 11]);
                $detservicio->bioquimica()->create(['prueba_id' => 12]);
                $laboratorio = [
                    'Glucosa' => null,
                    'Trigliceridos' => null,
                    'Colesterol' => null,
                    'HDL' => null,
                    'LDL' => null,
                    'TGO' => null,
                    'TGP' => null,
                    'Creatinina' => null,
                    'AUrico' => null,
                    'Urea' => null,
                    'GrupoSan' => null,
                    'FactorRH' => null,
                ];
            }else{
                foreach($detservicio->bioquimica as $bio){
                    if($bio->prueba_id == 1){
                        $laboratorio = array_merge($laboratorio,[
                            'Glucosa' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 2){
                        $laboratorio = array_merge($laboratorio,[
                            'Trigliceridos' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 3){
                        $laboratorio = array_merge($laboratorio,[
                            'Colesterol' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 4){
                        $laboratorio = array_merge($laboratorio,[
                            'HDL' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 5){
                        $laboratorio = array_merge($laboratorio,[
                            'LDL' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 6){
                        $laboratorio = array_merge($laboratorio,[
                            'TGO' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 7){
                        $laboratorio = array_merge($laboratorio,[
                            'TGP' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 8){
                        $laboratorio = array_merge($laboratorio,[
                            'Creatinina' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 9){
                        $laboratorio = array_merge($laboratorio,[
                            'AUrico' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 10){
                        $laboratorio = array_merge($laboratorio,[
                            'Urea' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 11){
                        $laboratorio = array_merge($laboratorio,[
                            'GrupoSan' => $bio->valor
                        ]);
                    }
                    if($bio->prueba_id == 12){
                        $laboratorio = array_merge($laboratorio,[
                            'FactorRH' => $bio->valor
                        ]);
                    }
                }
            }
        }
        if(kvfa($examenes,'5') && $detservicio->exapsico()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'5')){
            $detservicio->exapsico()->create([
                'fecha' => $fecha,
                'dfinteligencia_carac' => 'EL EVALUADO TIENE ADECUADA MEMORIA MECÁNICA E INMEDIATA, BUEN NIVEL DE ATENCIÓN Y CONCENTRACIÓN; SUS CAPACIDADES DE RETENCIÓN Y EVOCACIÓN SON ADECUADAS. POSEE CAPACIDAD PARA RESOLVER PROBLEMAS.',
                'dfpersonalidad_carac' => 'PRESENTA FACILIDAD PARA ADAPTARSE A DIFERENTES CONTEXTOS Y A SITUACIONES CAMBIANTES, ES UNA PERSONA QUE PROCURA CONTROLARSE. LE PREOCUPA EL BIENESTAR PROPIO Y EL DE LOS DEMÁS, GUSTA TRABAJAR EN EQUIPO Y POSEE BUENAS RELACIONES INTERPERSONALES; TIENE ACTITUD POSITIVA Y SERIEDAD LABORA, ES RESPONSABLE EN LAS TAREAS QUE SE LE ASIGNAN. REACCIONA RÁPIDAMENTE ANTE DIFICULTADES. POSEE LA CAPACIDAD PARA LLEVAR A CABO LAS FUNCIONES QUE TIENE A SU CARGO CON PERSEVERANCIA Y RESPONSABILIDAD.',
                'dfansiedad_carac' => 'EL EVALUADO ANTE SITUACIONES DE FUERTE TENSIÓN PUEDE DENOTAR ANSIEDAD A UN NIVEL MODERADO, LOGRANDO MANTENER UNA ADECUADA CANALIZACIÓN DE SUS EMOCIONES PARA QUE NO LE INFLUYAN NEGATIVAMENTE EN SU ACTUAR.',
                'dfpatologias_carac' => 'PUEDE ADAPTARSE RÁPIDAMENTE A LOS CAMBIOS Y A LAS CONDICIONES DE VIDA. TIENE PERCEPCIÓN ADECUADA DE SU ENTORNO Y DE SI MISMO.',
                'conc_congnitiva' => 'PRESENTA FACILIDAD PARA ADAPTARSE A DIFERENTES CONTEXTOS  Y A SITUACIONES CAMBIANTES, EN UNA PERSONA CONTROLADA, EVALÚA Y NO SE EXPONE A RIESGOS INNECESARIOS. POR OTRO LADO LE PREOCUPA EL BIENESTAR PROPIO Y EL DE LOS DEMAS AYUDANDOLO A TENER UN MEJOR TRABAJAJO EN EQUIPO Y BUENAS RELACIONES INTERPERSONALES, ASI COMO UN TRATO CORTEZ CON LAS PERSONAS QUE INTERACTUA. TIENE ACTITUD POSITIVA Y SERIEDAD LABORAL, PUNTUALIDAD Y RESPONSABILIDAD EN LAS TAREAS QUE LE ASIGNA. REACCIONA RÁPIDAMENTE ANTE POSIBLES DIFICULTADES, BUSCANDO SOLUCIONES ADECUADAS Y EN EL MOMENTO INDICADO. POSEE LA CAPACIDAD PARA LLEVAR A CABO LAS FUNCIONES QUE TIENE A SU CARGO CON PERSEVERANCIA Y RESPONSABILIDAD.',
                'recomendaciones' => 'PROMOCIÓN Y MANTENIMIENTO DEL BIENESTAR FISICO, MENTAL Y SOCIAL DE LOS /AS TRABAJADORES /AS, ORIENTADO A MEJORAR LA RELACION LABORAL. CONTROL MEDICO PERIODICO. ENTRENAMIENTO DE RELAJACION.',
            ]);
        }
        // if(kvfa($detservicio->servicio->examenes,'6')){
        if(kvfa($examenes,'6') && $detservicio->exaekg()->count() == 0){
            $detservicio->exaekg()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'4') && $detservicio->exaodonto()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'4')){
            $detservicio->exaodonto()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'7') && $detservicio->exaderma()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'7')){
            $detservicio->exaderma()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'8') && $detservicio->exaespiro()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'8')){
            $detservicio->exaespiro()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'9') && $detservicio->exaradio()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'9')){
            $detservicio->exaradio()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'10') && $detservicio->exaalt18()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'10')){
            $detservicio->exaalt18()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'11') && $detservicio->exaalt25()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'11')){
            $detservicio->exaalt25()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'12') && $detservicio->exaconfinado()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'12')){
            $detservicio->exaconfinado()->create([
                'fecha' => $fecha
            ]);
        }
        if(kvfa($examenes,'13') && $detservicio->exacovidant()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'13')){
            $detservicio->exacovidant()->create([
                'fecha_tm' => $fecha,
                'examen' => 1,
                'antigeno' => 2
            ]);
        }
        if(kvfa($examenes,'14') && $detservicio->exacovidpr()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'14')){
            $detservicio->exacovidpr()->create([
                'fecha_tm' => $fecha,
                'examen' => 2,
                'igg' => 2,
                'igm' => 2
            ]);
        }
        if(kvfa($examenes,'15') && $detservicio->exacovidpcr()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->exacovidpcr()->create([
                'fecha_tm' => $fecha,
                'examen' => 3,
                'pcr' => 2
            ]);
        }
        if(kvfa($examenes,'17') && $detservicio->hemograma()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->hemograma()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'18') && $detservicio->orina()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->orina()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'19') && $detservicio->hece()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->hece()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'20') && $detservicio->parasitologia()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->parasitologia()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'21') && $detservicio->bacteriologia()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->bacteriologia()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'22') && $detservicio->urocultivo()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->urocultivo()->create([
                'fecha' => $fecha,
            ]);
        }
        if(kvfa($examenes,'24') && $detservicio->metalpesado()->count() == 0){
        // if(kvfa($detservicio->servicio->examenes,'15')){
            $detservicio->metalpesado()->create([
                'fecha' => $fecha,
            ]);
        }
        return view('admin.servicios.evaluacion', compact(
            'detservicio','area','puesto','resultado','altitud','laboratorio','examenes','doctors','cie10s'
        ));   
    }



    public function updatevaluacion(Request $request, Detservicio $detservicio)
    {
        // return $request->all();
        $riesgos = [
            'prbiologico' => $request->input('prbiologico'),
            'prcancerigenos' => $request->input('prcancerigenos'),
            'prcargas' => $request->input('prcargas'),
            'prmetpesado' => $request->input('prmetpesado'),
            'prmovrep' => $request->input('prmovrep'),
            'prmutagenico' => $request->input('prmutagenico'),
            'prpolvo' => $request->input('prpolvo'),
            'prpostura' => $request->input('prpostura'),
            'prpvd' => $request->input('prpvd'),
            'prruido' => $request->input('prruido'),
            'prsolvente' => $request->input('prsolvente'),
            'prtemperaturas' => $request->input('prtemperaturas'),
            'prturno' => $request->input('prturno'),
            'prvibseg' => $request->input('prvibseg'),
            'prvibtot' => $request->input('prvibtot'),
            'protros' => $request->input('protros'),
        ];
        $riesgos = json_encode($riesgos);
        if($request->firma){
            if($detservicio->firma){
                Storage::disk('media')->delete($detservicio->firma);
            }
            $archivo = $request->file('firma');
            Storage::disk('media')->makeDirectory('media');
            $firma = Storage::disk('media')->put($detservicio->id, $archivo);
        }else{
            if($detservicio->firma){
                $firma = $detservicio->firma;
            }else{
                $firma = null;
            }
        }
        if($request->foto){
            if($detservicio->foto){
                Storage::disk('media')->delete($detservicio->foto);
            }
            $archivo = $request->file('foto');
            Storage::disk('media')->makeDirectory('media');
            $foto = Storage::disk('media')->put($detservicio->id, $archivo);
        }else{
            if($detservicio->foto){
                $foto = $detservicio->foto;
            }else{
                $foto = null;
            }
        }
        if($request->huella){
            if($detservicio->huella){
                Storage::disk('media')->delete($detservicio->huella);
            }
            $archivo = $request->file('huella');
            Storage::disk('media')->makeDirectory('media');
            $huella = Storage::disk('media')->put($detservicio->id, $archivo);
        }else{
            if($detservicio->huella){
                $huella = $detservicio->huella;
            }else{
                $huella = null;
            }
        }
        $detservicio->update([
            'area_id' => $request->input('area_id'),
            'puesto_id' => $request->input('puesto_id'),
            'ocuactual' => $request->input('ocuactual'),
            'reubicacion' => $request->input('reubicacion'),
            'tielabor' => $request->input('tielabor'),
            'lugar' => $request->input('lugar'),
            'altitud' => $request->input('altitud'),
            'seguridad' => $request->input('seguridad'),
            'riesgos' => $riesgos,
            'diagocu' => $request->input('diagocu'),
            'diagpdr' => $request->input('diagpdr'),
            'diagcie' => $request->input('diagcie'),
            'otrdiagocu1' => $request->input('otrdiagocu1'),
            'otrdiagpdr1' => $request->input('otrdiagpdr1'),
            'otrdiagcie1' => $request->input('otrdiagcie1'),
            'otrdiagocu2' => $request->input('otrdiagocu2'),
            'otrdiagpdr2' => $request->input('otrdiagpdr2'),
            'otrdiagcie2' => $request->input('otrdiagcie2'),
            'otrdiagocu3' => $request->input('otrdiagocu3'),
            'otrdiagpdr3' => $request->input('otrdiagpdr3'),
            'otrdiagcie3' => $request->input('otrdiagcie3'),
            'conclusion' => $request->input('conclusion'),
            'recomendaciones' => $request->input('recomendaciones'),
            'restricciones' => $request->input('restricciones'),
            'resultado' => $request->input('resultado'),
            'doctor_id' => $request->input('doctor_id'),
            'finalizado' => $request->input('finalizado'),
            'hemoglobina' => $request->input('hemoglobina'),
            'orinap' => $request->input('orinap'),
            'firma' => $firma,
            'foto' => $foto,
            'huella' => $huella,
            // '' => $request->input(''),
            // '' => $request->input(''),
            // '' => $request->input(''),
        ]);
        // return $request->bioquimica['glucosa'];
        $glucosa = $request->bioquimica['glucosa'];

        $detservicio->bioquimica()->where('prueba_id', 1)->update(['valor' => $request->bioquimica['glucosa']]);
        $detservicio->bioquimica()->where('prueba_id', 2)->update(['valor' => $request->bioquimica['triglicerido']]);
        $detservicio->bioquimica()->where('prueba_id', 3)->update(['valor' => $request->bioquimica['colesterol']]);
        $detservicio->bioquimica()->where('prueba_id', 4)->update(['valor' => $request->bioquimica['hdl']]);
        $detservicio->bioquimica()->where('prueba_id', 5)->update(['valor' => $request->bioquimica['ldl']]);
        $detservicio->bioquimica()->where('prueba_id', 6)->update(['valor' => $request->bioquimica['tgo']]);
        $detservicio->bioquimica()->where('prueba_id', 7)->update(['valor' => $request->bioquimica['tgp']]);
        $detservicio->bioquimica()->where('prueba_id', 8)->update(['valor' => $request->bioquimica['creatinina']]);
        $detservicio->bioquimica()->where('prueba_id', 9)->update(['valor' => $request->bioquimica['aurico']]);
        $detservicio->bioquimica()->where('prueba_id', 10)->update(['valor' => $request->bioquimica['urea']]);
        $detservicio->bioquimica()->where('prueba_id', 11)->update(['valor' => $request->bioquimica['gruposan']]);
        $detservicio->bioquimica()->where('prueba_id', 12)->update(['valor' => $request->bioquimica['factorrh']]);
        // Bioquimica::where('detservicio_id',$detservicio->id)
        //             ->where('prueba_id', 25)
        //             ->update(['valor' => $request->bioquimica['glucosa']]);

        return redirect()->route('admin.inicio')->with('update', 'Evaluación Medica - Actualizada');
    }

    public function destroy(Servicio $servicio)
    {
        $pase = Detservicio::where('servicio_id',$servicio->id)->count();
        if($pase > 0){
            return back()->with('message', 'Se ha producido un error, Servicio tiene colaboradores asignados')->with('typealert', 'danger');
        }
        $servicio->delete();
        return redirect()->route('admin.servicios.index')->with('destroy', 'Servicio Eliminado');
    }
}
