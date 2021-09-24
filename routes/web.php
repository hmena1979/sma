<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConnectController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Controller::class,'welcome'])->name('welcome');

// Auth::routes();

// Route::get('/', [DashboardController::class, 'getDashboard'])->name('admin.inicio');

Route::get('/login',[ConnectController::class,'getLogin'])->name('login');
Route::post('/login',[ConnectController::class,'postLogin'])->name('login');
Route::get('/registerate',[ConnectController::class,'getRegister'])->name('resgisterate');
Route::post('/registerate',[ConnectController::class,'postRegister'])->name('resgisterate');
Route::post('/logout',[ConnectController::class,'getLogout'])->name('logout');
Route::get('/logoutg',[ConnectController::class,'getLogout'])->name('logoutg');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
