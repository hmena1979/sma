<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
Use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\CategoriaController;
Use App\Http\Controllers\Admin\ColaboradorController;
Use App\Http\Controllers\Admin\ServicioController;
Use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ExamenController;
use App\Http\Controllers\Admin\LaboratorioController;
use App\Http\Controllers\Admin\InformeController;
use App\Http\Controllers\Admin\ClienteController;

Use App\Http\Controllers\Admin\BusquedaController;
use App\Http\Controllers\Admin\ReporteController;
use App\Http\Controllers\Admin\SedeController;

// Route::get('/', function () {
//     return 'HOla';
// });

Route::get('/inicio/{periodo?}', [DashboardController::class, 'getDashboard'])->name('admin.inicio');
Route::post('inicio/change', [DashboardController::class, 'change'])->name('admin.inicio.change');
Route::post('/cargainicial', [DashboardController::class, 'cargainicial'])->name('admin.cargainicial');
Route::get('/permisosfaltantes', [DashboardController::class, 'permisosfaltantes'])->name('admin.permisosfaltantes');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

//Colaborador
Route::get('/colaboradors/registro', [ColaboradorController::class, 'registro'])->name('admin.colaboradors.registro');
Route::resource('colaboradors', ColaboradorController::class)->names('admin.colaboradors');
Route::get('/colaboradors/{colaborador}/tabla_ao', [ColaboradorController::class, 'tabla_ao'])->name('admin.colaboradors.tabla_ao');
Route::get('/colaboradors/{envio}/addao',[ColaboradorController::class,'addao'])->name('admin.colaboradors.addao');
Route::get('/colaboradors/{id}/busao',[ColaboradorController::class,'busao'])->name('admin.colaboradors.busao');
Route::get('/colaboradors/{id}/destroyao',[ColaboradorController::class,'destroyao'])->name('admin.colaboradors.destroyao');
// Route::get('/colaboradors/{envio}/editao', [ColaboradorController::class, 'editao'])->name('admin.colaboradors.editao');

//Clientes
Route::get('/clientes/registro', [ClienteController::class, 'registro'])->name('admin.clientes.registro');
Route::resource('clientes', ClienteController::class)->names('admin.clientes');

//Sedes
Route::get('/sedes/change', [SedeController::class, 'getchange'])->name('admin.sedes.getchange');
Route::post('/sedes/change', [SedeController::class, 'postchange'])->name('admin.sedes.postchange');
Route::resource('sedes', SedeController::class)->names('admin.sedes');

//Servicios
Route::post('/servicios/change', [ServicioController::class,'change'])->name('admin.servicios.change');
Route::get('/servicios/{servicio}/addcolaborador', [ServicioController::class,'addcolaborador'])->name('admin.servicios.addcolaborador');
Route::post('/servicios/{servicio}/storecolaborador', [ServicioController::class,'storecolaborador'])->name('admin.servicios.storecolaborador');
Route::get('/servicios/{detservicio}/destroycolaborador', [ServicioController::class,'destroycolaborador'])->name('admin.servicios.destroycolaborador');
Route::get('/servicios/{detservicio}/evaluacion', [ServicioController::class,'evaluacion'])->name('admin.servicios.evaluacion');
Route::put('/servicios/{detservicio}/updatevaluacion', [ServicioController::class,'updatevaluacion'])->name('admin.servicios.updatevaluacion');
Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');
Route::get('/servicios/{periodo?}', [ServicioController::class,'index'])->name('admin.servicios.index');

//Examenes
Route::get('/examens/{detservicio}/examedico', [ExamenController::class,'examedico'])->name('admin.examens.examedico');
Route::put('/examens/{examedico}/updatexamed', [ExamenController::class,'updatexamed'])->name('admin.examens.updatexamed');
Route::get('/examens/{detservicio}/exaoftalmo', [ExamenController::class,'exaoftalmo'])->name('admin.examens.exaoftalmo');
Route::put('/examens/{exaoftalmo}/updatexaoftalmo', [ExamenController::class,'updatexaoftalmo'])->name('admin.examens.updatexaoftalmo');
Route::get('/examens/{detservicio}/exaaudio', [ExamenController::class,'exaaudio'])->name('admin.examens.exaaudio');
Route::put('/examens/{exaaudio}/updatexaaudio', [ExamenController::class,'updatexaaudio'])->name('admin.examens.updatexaaudio');
Route::get('/examens/{detservicio}/exapsico', [ExamenController::class,'exapsico'])->name('admin.examens.exapsico');
Route::put('/examens/{exapsico}/updatexapsico', [ExamenController::class,'updatexapsico'])->name('admin.examens.updatexapsico');
Route::get('/examens/{detservicio}/exaderma', [ExamenController::class,'exaderma'])->name('admin.examens.exaderma');
Route::put('/examens/{exaderma}/updatexaderma', [ExamenController::class,'updatexaderma'])->name('admin.examens.updatexaderma');
Route::get('/examens/{detservicio}/exaespiro', [ExamenController::class,'exaespiro'])->name('admin.examens.exaespiro');
Route::put('/examens/{exaespiro}/updatexaespiro', [ExamenController::class,'updatexaespiro'])->name('admin.examens.updatexaespiro');
Route::get('/examens/{detservicio}/exaconfinado', [ExamenController::class,'exaconfinado'])->name('admin.examens.exaconfinado');
Route::put('/examens/{exaconfinado}/updatexaconfinado', [ExamenController::class,'updatexaconfinado'])->name('admin.examens.updatexaconfinado');
Route::get('/examens/{detservicio}/exaalt18', [ExamenController::class,'exaalt18'])->name('admin.examens.exaalt18');
Route::put('/examens/{exaalt18}/updatexaalt18', [ExamenController::class,'updatexaalt18'])->name('admin.examens.updatexaalt18');
Route::get('/examens/{detservicio}/exaalt25', [ExamenController::class,'exaalt25'])->name('admin.examens.exaalt25');
Route::put('/examens/{exaalt25}/updatexaalt25', [ExamenController::class,'updatexaalt25'])->name('admin.examens.updatexaalt25');
Route::get('/examens/{detservicio}/exaekg', [ExamenController::class,'exaekg'])->name('admin.examens.exaekg');
Route::put('/examens/{exaekg}/updatexaekg', [ExamenController::class,'updatexaekg'])->name('admin.examens.updatexaekg');
Route::get('/examens/{detservicio}/exaodonto', [ExamenController::class,'exaodonto'])->name('admin.examens.exaodonto');
Route::put('/examens/{exaodonto}/updatexaodonto', [ExamenController::class,'updatexaodonto'])->name('admin.examens.updatexaodonto');
Route::get('/examens/{detservicio}/exaradio', [ExamenController::class,'exaradio'])->name('admin.examens.exaradio');
Route::put('/examens/{exaradio}/updatexaradio', [ExamenController::class,'updatexaradio'])->name('admin.examens.updatexaradio');
Route::get('/examens/{exacovid}/exacovid', [ExamenController::class,'exacovid'])->name('admin.examens.exacovid');
Route::put('/examens/{exacovid}/updatexacovid', [ExamenController::class,'updatexacovid'])->name('admin.examens.updatexacovid');
Route::post('/examens/addotros', [ExamenController::class,'addotros'])->name('admin.examens.addotros');
Route::delete('/examens/{otro}/destroyotr', [ExamenController::class,'destroyotr'])->name('admin.examens.destroyotr');

//Laboratorio
Route::get('/laboratorio/{detservicio}/bioquimica', [LaboratorioController::class,'bioquimica'])->name('admin.laboratorio.bioquimica');
Route::put('/laboratorio/{detservicio}/updatbioquimica', [LaboratorioController::class,'updatbioquimica'])->name('admin.laboratorio.updatbioquimica');
Route::get('/laboratorio/{id}/tabla_pr', [LaboratorioController::class, 'tabla_pr'])->name('admin.laboratorio.tabla_pr');
Route::get('/laboratorio/{envio}/addpr',[LaboratorioController::class,'addpr'])->name('admin.laboratorio.addpr');
Route::get('/laboratorio/{id}/buspr',[LaboratorioController::class,'buspr'])->name('admin.laboratorio.buspr');
Route::get('/laboratorio/{bioquimica}/destroypr',[LaboratorioController::class,'destroypr'])->name('admin.laboratorio.destroypr');
Route::get('/laboratorio/{detservicio}/hemograma', [LaboratorioController::class,'hemograma'])->name('admin.laboratorio.hemograma');
Route::put('/laboratorio/{hemograma}/updathemograma', [LaboratorioController::class,'updathemograma'])->name('admin.laboratorio.updathemograma');
Route::get('/laboratorio/{detservicio}/orina', [LaboratorioController::class,'orina'])->name('admin.laboratorio.orina');
Route::put('/laboratorio/{orina}/updatorina', [LaboratorioController::class,'updatorina'])->name('admin.laboratorio.updatorina');
Route::get('/laboratorio/{detservicio}/hece', [LaboratorioController::class,'hece'])->name('admin.laboratorio.hece');
Route::put('/laboratorio/{hece}/updathece', [LaboratorioController::class,'updathece'])->name('admin.laboratorio.updathece');
Route::get('/laboratorio/{detservicio}/parasitologia', [LaboratorioController::class,'parasitologia'])->name('admin.laboratorio.parasitologia');
Route::put('/laboratorio/{parasitologia}/updatparasitologia', [LaboratorioController::class,'updatparasitologia'])->name('admin.laboratorio.updatparasitologia');
Route::get('/laboratorio/{detservicio}/bacteriologia', [LaboratorioController::class,'bacteriologia'])->name('admin.laboratorio.bacteriologia');
Route::put('/laboratorio/{bacteriologia}/updatbacteriologia', [LaboratorioController::class,'updatbacteriologia'])->name('admin.laboratorio.updatbacteriologia');
Route::get('/laboratorio/{detservicio}/urocultivo', [LaboratorioController::class,'urocultivo'])->name('admin.laboratorio.urocultivo');
Route::put('/laboratorio/{urocultivo}/updaturocultivo', [LaboratorioController::class,'updaturocultivo'])->name('admin.laboratorio.updaturocultivo');
Route::get('/laboratorio/{detservicio}/toxicologico', [LaboratorioController::class,'toxicologico'])->name('admin.laboratorio.toxicologico');
Route::put('/laboratorio/{detservicio}/updattoxicologico', [LaboratorioController::class,'updattoxicologico'])->name('admin.laboratorio.updattoxicologico');
Route::get('/laboratorio/{id}/tabla_tox', [LaboratorioController::class, 'tabla_tox'])->name('admin.laboratorio.tabla_tox');
Route::get('/laboratorio/{envio}/addtox',[LaboratorioController::class,'addtox'])->name('admin.laboratorio.addtox');
Route::get('/laboratorio/{id}/bustox',[LaboratorioController::class,'bustox'])->name('admin.laboratorio.bustox');
Route::get('/laboratorio/{toxicologico}/destroytox',[LaboratorioController::class,'destroytox'])->name('admin.laboratorio.destroytox');
Route::get('/laboratorio/{detservicio}/metalpesado', [LaboratorioController::class,'metalpesado'])->name('admin.laboratorio.metalpesado');
Route::put('/laboratorio/{metalpesado}/updatmetalpesado', [LaboratorioController::class,'updatmetalpesado'])->name('admin.laboratorio.updatmetalpesado');


//Informe
Route::get('/informes/{detservicio}/confidencial', [InformeController::class,'confidencial'])->name('admin.informes.confidencial');
Route::get('/informes/{detservicio}/dj', [InformeController::class,'dj'])->name('admin.informes.dj');
Route::get('/informes/{detservicio}/drogas', [InformeController::class,'drogas'])->name('admin.informes.drogas');
Route::get('/informes/{detservicio}/realizados', [InformeController::class,'realizados'])->name('admin.informes.realizados');
Route::put('/informes/{informe}/updatinforme', [InformeController::class,'updatinforme'])->name('admin.informes.updatinforme');
Route::put('/informes/{informe}/updatrealizados', [InformeController::class,'updatrealizados'])->name('admin.informes.updatrealizados');


//Categorias
Route::get('/categorias/{categoria?}',[CategoriaController::class,'index'])->name('admin.categorias.index');
Route::get('/categorias/{module}/create',[CategoriaController::class,'create'])->name('admin.categorias.create');
Route::post('/categorias/store',[CategoriaController::class,'store'])->name('admin.categorias.store');
Route::get('/categorias/{categoria}/edit',[CategoriaController::class,'edit'])->name('admin.categorias.edit');
Route::put('/categorias/{categoria}/update',[CategoriaController::class,'update'])->name('admin.categorias.update');
Route::delete('/categorias/{categoria}/destroy',[CategoriaController::class,'destroy'])->name('admin.categorias.destroy');

//Usuarios
Route::get('/usuarios/{status?}',[UsuarioController::class,'index'])->name('admin.usuarios.index');
Route::get('/usuario/create',[UsuarioController::class,'create'])->name('admin.usuarios.create');
Route::post('/usuario',[UsuarioController::class,'store'])->name('admin.usuarios.store');
Route::get('/usuario/{user}/edit',[UsuarioController::class,'edit'])->name('admin.usuarios.edit');
Route::put('/usuario/{user}/update',[UsuarioController::class,'update'])->name('admin.usuarios.update');
Route::get('/usuario/{user}/editpermission',[UsuarioController::class,'editpermission'])->name('admin.usuarios.editpermission');
Route::put('/usuario/{user}/updatepermission',[UsuarioController::class,'updatepermission'])->name('admin.usuarios.updatepermission');
Route::get('/usuario/{user}/password',[UsuarioController::class,'editpassword'])->name('admin.usuarios.editpassword');
Route::put('/usuario/{user}/password',[UsuarioController::class,'updatepassword'])->name('admin.usuarios.updatepassword');

//Doctores
Route::get('/doctors/create',[DoctorController::class,'create'])->name('admin.doctors.create');
Route::post('/doctors',[DoctorController::class,'store'])->name('admin.doctors.store');
Route::get('/doctors/{doctor}/edit',[DoctorController::class,'edit'])->name('admin.doctors.edit');
Route::put('/doctors/{doctor}/update',[DoctorController::class,'update'])->name('admin.doctors.update');
Route::get('/doctors/{activo?}',[DoctorController::class,'index'])->name('admin.doctors.index');

//Modulo Busquedas
Route::get('/busquedas/departamento', [BusquedaController::class,'departamento'])->name('admin.busquedas.departamento');
Route::get('/busquedas/{provincia}/ubigeo', [BusquedaController::class,'ubigeo'])->name('admin.busquedas.ubigeo');
Route::get('/busquedas/{departamento}/provincia', [BusquedaController::class,'provincia'])->name('admin.busquedas.provincia');
Route::get('/busquedas/{tipo}/{numero}/{id?}/busapi', [BusquedaController::class, 'busapi'])->name('admin.clientes.busapi');
Route::get('/busquedas/{tipo}/{numero}/{id?}/busapicli', [BusquedaController::class, 'busapicli'])->name('admin.clientes.busapicli');
Route::get('/busquedas/{envio}/addao',[BusquedaController::class,'addao'])->name('admin.busquedas.addao');
Route::get('/busquedas/colaborador',[BusquedaController::class,'colaborador'])->name('admin.busquedas.colaborador');
Route::get('/busquedas/cie10',[BusquedaController::class,'cie10'])->name('admin.busquedas.cie10');

//reportes
Route::get('/reportes/{detservicio}/listado', [ReporteController::class,'listado'])->name('admin.reportes.listado');
Route::post('/reportes/{detservicio}/print', [ReporteController::class,'print'])->name('admin.reportes.print');

//Modulo importaciones
Route::get('/import', [ImportController::class,'index'])->name('admin.imports.index');
Route::post('/import/categoria', [ImportController::class,'categoria'])->name('admin.imports.categoria');
Route::post('/import/departamento', [ImportController::class,'departamento'])->name('admin.imports.departamento');
Route::post('/import/provincia', [ImportController::class,'provincia'])->name('admin.imports.provincia');
Route::post('/import/ubigeo', [ImportController::class,'ubigeo'])->name('admin.imports.ubigeo');
Route::post('/import/examen', [ImportController::class,'examen'])->name('admin.imports.examen');
Route::post('/import/cliente', [ImportController::class,'cliente'])->name('admin.imports.cliente');
Route::post('/import/prueba', [ImportController::class,'prueba'])->name('admin.imports.prueba');
Route::post('/import/obshemog', [ImportController::class,'obshemog'])->name('admin.imports.obshemog');
Route::post('/import/otrhemog', [ImportController::class,'otrhemog'])->name('admin.imports.otrhemog');
Route::post('/import/catorina', [ImportController::class,'catorina'])->name('admin.imports.catorina');
Route::post('/import/cathece', [ImportController::class,'cathece'])->name('admin.imports.cathece');
Route::post('/import/cie10', [ImportController::class,'cie10'])->name('admin.imports.cie10');
Route::post('/import/reporte', [ImportController::class,'reporte'])->name('admin.imports.reporte');
Route::post('/import/detreporte', [ImportController::class,'detreporte'])->name('admin.imports.detreporte');
Route::post('/import/colaborador', [ImportController::class,'colaborador'])->name('admin.imports.colaborador');
Route::post('/import/colantfamiliar', [ImportController::class,'colantfamiliar'])->name('admin.imports.colantfamiliar');
Route::post('/import/colantpatologico', [ImportController::class,'colantpatologico'])->name('admin.imports.colantpatologico');
Route::post('/import/colantocupacional', [ImportController::class,'colantocupacional'])->name('admin.imports.colantocupacional');
Route::post('/import/doctor', [ImportController::class,'doctor'])->name('admin.imports.doctor');


Route::post('/import/dni', [ImportController::class,'dni'])->name('admin.imports.dni');