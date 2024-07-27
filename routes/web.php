<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('rri/index');
});

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/kategori', [DashboardController::class, 'kategori'])->name('kategori');
Route::get('/pengajuan', [DashboardController::class, 'pengajuan'])->name('pengajuan');
Route::get('/detailPengajuan', [DashboardController::class, 'detailPengajuan'])->name('detailPengajuan');
Route::get('/paketIklan', [DashboardController::class, 'paketIklan'])->name('paketIklan');

//profile controller 
Route::get('/login', [ProfileController::class, 'logins'])->name('logins');
Route::get('/register', [ProfileController::class, 'registers'])->name('registers');
Route::get('/forgot', [ProfileController::class, 'forgots'])->name('forgots');
