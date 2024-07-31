<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketIklanController;
use App\Http\Controllers\PengajuanIklanController;
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

//role pelanggan
Route::middleware(['pelanggan'])->group(function () {
    Route::get('/user/edituser', [UserController::class, 'editUser'])->name('edituser');
    Route::post('/pengajuan-iklan', [PengajuanIklanController::class, 'store'])->name('pengajuaniklan.store');
    Route::get('/riwayat-pesanan', [PengajuanIklanController::class, 'riwayatPesanan'])->name('riwayat.pesanan');
    Route::put('/user/updateuser', [UserController::class, 'update'])->name('updateuser');
});

Route::get('/export-pengajuan', [DashboardController::class, 'exportToExcel'])->name('export.pengajuan');

//role admin
Route::middleware(['admin'])->group(function () {
    Route::post('/paket-iklan', [PaketIklanController::class, 'store']);
    Route::post('/nama-kategori', [KategoriController::class, 'store']);
    Route::get('/paket-iklan/{id}/edit', [PaketIklanController::class, 'edit'])->name('paket-iklan.edit');
    Route::get('/nama-ketegori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/paket-iklan/{paketIklan}', [PaketIklanController::class, 'update'])->name('paket-iklan.update');
    Route::put('/nama-kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/paket-iklan/{paketIklan}', [PaketIklanController::class, 'destroy'])->name('paket-iklan.destroy');
    Route::delete('/nama-kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::post('/pengajuan/{id}/update-status', [PengajuanIklanController::class, 'updateStatus'])->name('pengajuan.updateStatus');
    Route::delete('/pengajuan/{id}', [PengajuanIklanController::class, 'destroy'])->name('pengajuan.destroy');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/kategori', [DashboardController::class, 'kategori'])->name('kategori');
    Route::get('/pengajuan', [DashboardController::class, 'pengajuan'])->name('pengajuan');
    Route::get('/detailPengajuan/{id}', [DashboardController::class, 'detailPengajuan'])->name('detailPengajuan');
    Route::get('/paketIklan', [DashboardController::class, 'paketIklan'])->name('paketIklan');
    Route::get('/riwayatpesanan', [DashboardController::class, 'riwayat'])->name('riwayatpesanan');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
});
//profile controller 
Route::get('/login', [ProfileController::class, 'logins'])->name('logins');
Route::get('/register', [ProfileController::class, 'registers'])->name('registers');
// Route::get('/forgot', [ProfileController::class, 'forgots'])->name('forgots');
