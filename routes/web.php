<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DptController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\WilayahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[DashboardController::class, 'index']);
Route::get('/dpt',[DptController::class, 'index'])->name('dpt.index');
Route::get('/dpt-edit/{id}', [DptController::class, 'edit'])->name('dpt.edit');
Route::put('/dpt-edit/{id}', [DptController::class,'update'])->name('dpt.update');
Route::get('/provinsi',[ProvinsiController::class, 'index']);
Route::get('/provinsi/{kode_provinsi}',[ProvinsiController::class, 'kabkot'])->name('provinsi.kabkot');
//Route::get('/kabkota',[ProvinsiController::class, 'kabkot'])->name('provinsi.kabkot');
Route::get('/kabkota/{kode_kabupaten_kota}',[ProvinsiController::class, 'kecamatan'])->name('provinsi.kecamatan');
Route::get('/kecamatan/{kode_kecamatan}',[ProvinsiController::class, 'desakel'])->name('provinsi.desakel');
Route::get('/deskel/{kode_desa_kelurahan}',[ProvinsiController::class, 'tps'])->name('provinsi.tps');
Route::get('/tps',[TpsController::class, 'index']);
Route::get('/wilayah',[WilayahController::class, 'index']);