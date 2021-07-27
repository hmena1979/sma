<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
Use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\CategoriaController;
Use App\Http\Controllers\Admin\ColaboradorController;
Use App\Http\Controllers\Admin\ServicioController;
Use App\Http\Controllers\Admin\UsuarioController;

Use App\Http\Controllers\Admin\BusquedaController;

// Route::get('/', function () {
//     return 'HOla';
// });

Route::get('/inicio/{periodo?}', [DashboardController::class, 'getDashboard'])->name('admin.inicio');
Route::post('inicio/change', [DashboardController::class, 'change'])->name('admin.inicio.change');
Route::post('/cargainicial', [DashboardController::class, 'cargainicial'])->name('admin.cargainicial');
Route::get('/permisosfaltantes', [DashboardController::class, 'permisosfaltantes'])->name('admin.permisosfaltantes');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

//Colaborador
Route::resource('colaboradors', ColaboradorController::class)->names('admin.colaboradors');
Route::get('/colaboradors/{colaborador}/tabla_ao', [ColaboradorController::class, 'tabla_ao'])->name('admin.colaboradors.tabla_ao');
Route::get('/colaboradors/{envio}/addao',[ColaboradorController::class,'addao'])->name('admin.colaboradors.addao');
Route::get('/colaboradors/{id}/busao',[ColaboradorController::class,'busao'])->name('admin.colaboradors.busao');
Route::get('/colaboradors/{id}/destroyao',[ColaboradorController::class,'destroyao'])->name('admin.colaboradors.destroyao');
// Route::get('/colaboradors/{envio}/editao', [ColaboradorController::class, 'editao'])->name('admin.colaboradors.editao');

//Servicios
Route::post('/servicios/change', [ServicioController::class,'change'])->name('admin.servicios.change');
Route::get('/servicios/{servicio}/addcolaborador', [ServicioController::class,'addcolaborador'])->name('admin.servicios.addcolaborador');
Route::post('/servicios/{servicio}/storecolaborador', [ServicioController::class,'storecolaborador'])->name('admin.servicios.storecolaborador');
Route::get('/servicios/{detservicio}/destroycolaborador', [ServicioController::class,'destroycolaborador'])->name('admin.servicios.destroycolaborador');
Route::get('/servicios/{detservicio}/evaluacion', [ServicioController::class,'evaluacion'])->name('admin.servicios.evaluacion');
Route::put('/servicios/{detservicio}/updatevaluacion', [ServicioController::class,'updatevaluacion'])->name('admin.servicios.updatevaluacion');
Route::get('/servicios/{detservicio}/examedico', [ServicioController::class,'examedico'])->name('admin.servicios.examedico');
Route::put('/servicios/{examedico}/updatexamed', [ServicioController::class,'updatexamed'])->name('admin.servicios.updatexamed');
Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');
Route::get('/servicios/{periodo?}', [ServicioController::class,'index'])->name('admin.servicios.index');

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

//Modulo Busquedas
Route::get('/busquedas/departamento', [BusquedaController::class,'departamento'])->name('admin.busquedas.departamento');
Route::get('/busquedas/{provincia}/ubigeo', [BusquedaController::class,'ubigeo'])->name('admin.busquedas.ubigeo');
Route::get('/busquedas/{departamento}/provincia', [BusquedaController::class,'provincia'])->name('admin.busquedas.provincia');
Route::get('/busquedas/{tipo}/{numero}/{id?}/busapi', [BusquedaController::class, 'busapi'])->name('admin.clientes.busapi');
Route::get('/busquedas/{envio}/addao',[BusquedaController::class,'addao'])->name('admin.busquedas.addao');
Route::get('/busquedas/colaborador',[BusquedaController::class,'colaborador'])->name('admin.busquedas.colaborador');



//Modulo importaciones
Route::get('/import', [ImportController::class,'index'])->name('admin.imports.index');
Route::post('/import/categoria', [ImportController::class,'categoria'])->name('admin.imports.categoria');
Route::post('/import/departamento', [ImportController::class,'departamento'])->name('admin.imports.departamento');
Route::post('/import/provincia', [ImportController::class,'provincia'])->name('admin.imports.provincia');
Route::post('/import/ubigeo', [ImportController::class,'ubigeo'])->name('admin.imports.ubigeo');
Route::post('/import/examen', [ImportController::class,'examen'])->name('admin.imports.examen');
Route::post('/import/cliente', [ImportController::class,'cliente'])->name('admin.imports.cliente');