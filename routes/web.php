<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaketIklanController;
use App\Http\Controllers\PengajuanIklanController;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('rri/index');
// });

Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('verify/{token}', [RegisterController::class, 'verify']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/', [DashboardController::class, 'awal']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/kategori', [DashboardController::class, 'kategori'])->name('kategori');
Route::get('/pengajuan', [DashboardController::class, 'pengajuan'])->name('pengajuan');
Route::get('/detailPengajuan', [DashboardController::class, 'detailPengajuan'])->name('detailPengajuan');
Route::get('/paketIklan', [DashboardController::class, 'paketIklan'])->name('paketIklan');
Route::get('/riwayatpesanan', [DashboardController::class, 'riwayat'])->name('riwayatpesanan');

//profile controller 
Route::get('/login', [ProfileController::class, 'logins'])->name('logins');
Route::get('/register', [ProfileController::class, 'registers'])->name('registers');
// Route::get('/forgot', [ProfileController::class, 'forgots'])->name('forgots');

Route::post('/paket-iklan', [PaketIklanController::class, 'store']);
Route::post('/nama-kategori', [KategoriController::class, 'store']);
Route::get('/paket-iklan/{id}/edit', [PaketIklanController::class, 'edit'])->name('paket-iklan.edit');
Route::get('/nama-ketegori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/paket-iklan/{paketIklan}', [PaketIklanController::class, 'update'])->name('paket-iklan.update');
Route::put('/nama-kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/paket-iklan/{paketIklan}', [PaketIklanController::class, 'destroy'])->name('paket-iklan.destroy');
Route::delete('/nama-kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
// Route::middleware(['auth'])->group(function () {

    Route::post('/pengajuan-iklan', [PengajuanIklanController::class, 'store'])->name('pengajuaniklan.store');
// });


