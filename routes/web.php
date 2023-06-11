<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FormPeminjamanController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/inventaris', BarangController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('/barang', BarangController::class);
    Route::resource('/peminjaman', FormPeminjamanController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('admin/peminjaman', PeminjamanController::class);
});
