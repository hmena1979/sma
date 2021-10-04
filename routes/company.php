<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\ConnectController;
use App\Http\Controllers\Company\DashboardController;
use App\Http\Controllers\Company\ReporteController;

Route::get('login',[ConnectController::class,'login'])->name('company.login');
Route::post('postlogin',[ConnectController::class,'postlogin'])->name('company.postlogin');
Route::get('logout',[ConnectController::class,'logout'])->name('company.logout');

Route::get('index',[DashboardController::class, 'index'])->name('company.index');

Route::get('/reportes/{sede}/index',[ReporteController::class, 'index'])->name('company.reportes.index');
Route::get('/reportes/{servicio}/detalle',[ReporteController::class, 'detalle'])->name('company.reportes.detalle');
Route::get('/reportes/{detservicio}/listado',[ReporteController::class, 'listado'])->name('company.reportes.listado');
Route::post('/reportes/{detservicio}/print',[ReporteController::class, 'print'])->name('company.reportes.print');
Route::get('/reportes/{servicio}/listcolaboradores', [ReporteController::class,'listcolaboradores'])->name('company.reportes.listcolaboradores');

