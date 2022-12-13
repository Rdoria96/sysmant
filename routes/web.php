<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TecnicosController;

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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::group(['middleware' =>['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('solicitudes',SolicitudController::class);
    Route::resource('tecnicos',TecnicosController::class);
});
