<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\OKIController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/jurusan', JurusanController::class);

Route::resource('/fasilitas', FasilitasController::class);

Route::resource('/oki', OKIController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
