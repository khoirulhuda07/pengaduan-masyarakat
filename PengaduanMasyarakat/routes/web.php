<?php

use App\Http\Controllers\akunController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\profileController;
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
Route::middleware(['auth'])->group(function(){
Route::get('/',[dashboardController::class,'index']);
Route::get('/pengaduan',[pengaduanController::class, 'index']);
Route::post('/pengaduan/tambah',[pengaduanController::class,'tambah']);
Route::get('/riwayat', [dataController::class,'index']);
Route::delete('/pengaduan/hapus/{id}', [dataController::class,'hapus']);
Route::post('/pengaduan/tanggapi/{id}', [dataController::class,'balasan']);
Route::get('/profile',[profileController::class,'index']);
Route::post('/profile/edit/{id}',[profileController::class,'edit']);
Route::get('/akun',[akunController::class,'index']);
Route::post('/akun/edit/{id}',[akunController::class,'edit']);
Route::post('/akun/delete/{id}',[akunController::class,'hapus']);
});
Auth::routes();

