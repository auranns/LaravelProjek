<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\HomeController;
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
Route::get('/landingpage', function (){
    return view('landingpage');
});


Route::get('/', function (){
    return view('landingpage');
});


Route::middleware('Admin')->group(function () {
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
Route::get('/peserta/{peserta_id}/edit',[PesertaController::class, 'edit']);
Route::put('/peserta/{peserta_id}',[PesertaController::class, 'update']);

Route::delete('/peserta/{peserta_id}',[PesertaController::class,'destroy']);
});

Route::get('/daftar', [TestController::class, 'daftar']);
Route::post('/kirim', [TestController::class, 'kirim']);



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');