<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MobileBrandController;
use App\Http\Controllers\Dashboard\MobileModelController;
use App\Http\Controllers\Dashboard\NetworkProviderController;
use Illuminate\Support\Facades\Route;


//Dshboard Route
Route::get('/', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.auth');
Route::get('/recover/password', [AuthController::class, 'showRecoverPasswordForm'])->name('show.recover.password.form');

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [AuthController::class, 'showProfileForm'])->name('admin.profile');
    Route::post('/profile/update', [AuthController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::resource('customers', CustomerController::class);
    Route::get('customers/change/status/{status}/{id}', [CustomerController::class, 'toggleStatus'])
        ->name('customers.change.status');

    Route::resource('network-providers', NetworkProviderController::class);
    Route::get('network-providers/change/status/{status}/{id}', [NetworkProviderController::class, 'toggleStatus'])
        ->name('network-provider.change.status');

    Route::resource('mobile-brands', MobileBrandController::class);
    Route::get('mobile-brands/change/status/{status}/{id}', [MobileBrandController::class, 'toggleStatus'])
        ->name('mobile-brands.change.status');
    Route::post('mobile-brands/upload', [MobileBrandController::class, 'upload'])
        ->name('mobile-brand.upload');

    Route::resource('mobile-models', MobileModelController::class);
    Route::get('mobile-models/change/status/{status}/{id}', [MobileModelController::class, 'toggleStatus'])
        ->name('mobile-models.change.status');
    Route::post('mobile-models/upload', [MobileModelController::class, 'upload'])
        ->name('mobile-models.upload');

    Route::resource('countries', CountryController::class)->only('index');
    Route::get('countries/change/status/{status}/{id}', [CountryController::class, 'toggleStatus'])
        ->name('countries.change.status');
});
