<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\LensaController;
use App\Http\Controllers\AccessorisStabilizierController;

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
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/penyewa', [PenyewaController::class, 'store'])->name('penyewa.store');

Route::post('/proses-validasi-login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa.index');
Route::get('/penyewa/create', [PenyewaController::class, 'create'])->name('penyewa.create');
Route::get('/penyewa/{id}/edit', [PenyewaController::class, 'edit'])->name('penyewa.edit');
Route::post('/penyewa/{id}/update', [PenyewaController::class, 'update'])->name('penyewa.update');
Route::delete('/penyewa/{id}', [PenyewaController::class, 'destroy'])->name('penyewa.destroy');
Route::get('/penyewa/data', [PenyewaController::class, 'getData'])->name('penyewa.data');

// Route untuk menampilkan daftar barang kamera
Route::get('/kamera', [KameraController::class, 'index'])->name('kamera.index');
Route::get('/kamera/create', [KameraController::class, 'create'])->name('kamera.create');
Route::post('/kamera', [KameraController::class, 'store'])->name('kamera.store');
Route::get('/kamera/{id}/edit', [KameraController::class, 'edit'])->name('kamera.edit');
Route::patch('/kamera/{id}/update', [KameraController::class, 'update'])->name('kamera.update');
Route::delete('/kamera/{id}', [KameraController::class, 'destroy'])->name('kamera.destroy');

// Route untuk menampilkan daftar barang lensa
Route::get('/lensa', [LensaController::class, 'index'])->name('lensa.index');
Route::get('/lensa/create', [LensaController::class, 'create'])->name('lensa.create');
Route::post('/lensa', [LensaController::class, 'store'])->name('lensa.store');
Route::get('/lensa/{id}/edit', [LensaController::class, 'edit'])->name('lensa.edit');
Route::patch('/lensa/{id}/update', [LensaController::class, 'update'])->name('lensa.update');
Route::delete('/lensa/{id}', [LensaController::class, 'destroy'])->name('lensa.destroy');

// Route untuk menampilkan daftar barang accessoris dan stabilizier
Route::get('/accessorisstabilizier', [AccessorisStabilizierController::class, 'index'])->name('as.index');
Route::get('/accessorisstabilizier/create', [AccessorisStabilizierController::class, 'create'])->name('as.create');
Route::post('/accessorisstabilizier', [AccessorisStabilizierController::class, 'store'])->name('as.store');
Route::get('/accessorisstabilizier/{id}/edit', [AccessorisStabilizierController::class, 'edit'])->name('as.edit');
Route::patch('/accessorisstabilizier/{id}/update', [AccessorisStabilizierController::class, 'update'])->name('as.update');
Route::delete('/accessorisstabilizier/{id}', [AccessorisStabilizierController::class, 'destroy'])->name('as.destroy');