<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
Use App\Http\Controllers\Admin\RoleController;
Use App\Http\Controllers\Admin\ColaboradorController;
Use App\Http\Controllers\Admin\ServicioController;
Use App\Http\Controllers\Admin\UsuarioController;

// Route::get('/', function () {
//     return 'HOla';
// });

Route::get('/', [DashboardController::class, 'getDashboard'])->name('admin.inicio');
Route::post('/cargainicial', [DashboardController::class, 'cargainicial'])->name('admin.cargainicial');
Route::get('/permisosfaltantes', [DashboardController::class, 'permisosfaltantes'])->name('admin.permisosfaltantes');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');
Route::resource('colaboradores', ColaboradorController::class)->except('show')->names('admin.colaboradores');
Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');

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
