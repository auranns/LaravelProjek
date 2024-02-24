<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view ('welcome');
});

Route::get('/akudatang', function (){
    return view('view_akudatang');
});

Route::get('/', [HitungController::class, 'hitung']);

Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/pelanggan', [PelangganController::class,'index']);

route::get('/pelanggan',[PelangganController::class,'index']);
route::get('/tambahpelanggan',[PelangganController::class,'tambahpelanggan']);
route::post('/pelanggan', [PelangganController::class, 'pelanggan']);



Route::get('/peserta', [PesertaController::class,'index']);

Route::get('/peserta', [PesertaController::class, 'index']);
Route::get('/tambah-peserta', [PesertaController::class, 'tambahpeserta']);
Route::post('/tambah-peserta', [PesertaController::class, 'peserta']);

Route::get('/peserta/{peserta_id}',[PesertaController::class, 'show']);

