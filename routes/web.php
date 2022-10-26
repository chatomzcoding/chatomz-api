<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Informasi\DoaController;
use App\Http\Controllers\Informasi\GunungController;
use App\Http\Controllers\Informasi\SurahController;
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

Route::get('/', function () {
    return redirect('/login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    // INFORMASI
    Route::get('/informasi', [HomeController::class,'informasi']);
    Route::resource('informasisurah',SurahController::class);
    Route::resource('informasidoa',DoaController::class);
    Route::resource('informasigunung',GunungController::class);
});
