<?php

use App\Http\Controllers\Api\Data\DaerahindonesiaController;
use App\Http\Controllers\Api\GetinformasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/informasi/{sesi}',[GetinformasiController::class,'index']);
Route::get('/listinformasi',[GetinformasiController::class,'listinformasi']);

// PUSAT DATA

Route::get('/data/daerahindonesia/{sesi}',[DaerahindonesiaController::class,'index']);
