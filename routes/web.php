<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.auth');
Route::get('/admin/recover/password', [AuthController::class, 'showRecoverPasswordForm'])->name('show.recover.password.form');
Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
