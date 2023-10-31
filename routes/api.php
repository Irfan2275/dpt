<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiDptController;
use App\Http\Controllers\api\ApiProvinsiController;
use App\Http\Controllers\api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/me',[AuthController::class, 'me']);

Route::middleware(['auth:sanctum'])->group(function()
{
Route::get('/provinsi',[ApiProvinsiController::class, 'index']);
Route::get('/provinsi/{nama_dagri_provinsi}',[ApiProvinsiController::class, 'show']);
});

Route::get('/dpt/{kode_desa_kelurahan}',[ApiDptController::class, 'index']);
Route::get('/dpt/kecamatan/{kode_kecamatan}',[ApiDptController::class, 'show']);


