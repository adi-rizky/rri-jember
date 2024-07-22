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
    return view('index');
});

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard.index');
// Route::get('admin.dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

//profile controller 
Route::get('/login', [ProfileController::class, 'logins'])->name('logins');
Route::get('/register', [ProfileController::class, 'registers'])->name('registers');
Route::get('/forgot', [ProfileController::class, 'forgots'])->name('forgots');
