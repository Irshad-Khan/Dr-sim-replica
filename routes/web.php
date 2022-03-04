<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Localization\LocalizationController;
use App\Http\Controllers\User\MainController;
use Illuminate\Support\Facades\App;
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

// Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/', function () {
    return redirect(session()->get('locale') ? session()->get('locale') : app()->getLocale());
});
Route::get('language/change', [LocalizationController::class, 'changeLanguage'])
    ->name('changeLang');
Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ],
    function () {

        Route::get('/', [MainController::class, 'index'])->name('main.index');
        Auth::routes();
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::group(['middleware' => ['auth']], function () {
            //
        });
    }
);



//Dshboard Route
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.auth');
Route::get('/admin/recover/password', [AuthController::class, 'showRecoverPasswordForm'])->name('show.recover.password.form');

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [AuthController::class, 'showProfileForm'])->name('admin.profile');
    Route::post('/profile/update', [AuthController::class, 'profileUpdate'])->name('admin.profile.update');
});
