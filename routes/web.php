<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\TecnicoController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('cliente', ClienteController::class)->middleware('auth'); 

Route::resource('agente', AgenteController::class)->middleware('auth');

Route::resource('operador', OperadorController::class)->middleware('auth');

Route::resource('tecnico', TecnicoController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

//Route::get('/home', [ClienteController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [TecnicoController::class, 'index'])->name('home');
});