<?php

use App\Http\Controllers\Admin\AdminAkademiController;
use App\Http\Controllers\Admin\AdminArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminKontakController;
use App\Http\Controllers\Admin\AdminPembayaranController;
use App\Http\Controllers\Admin\AdminPustakaController;
use App\Http\Controllers\Admin\AdminSettingWebController;
use App\Http\Controllers\Admin\AdminStrukturController;
use App\Models\SettingWeb;

Route::get('maintenace', function () {
    $web = SettingWeb::first();
    if ($web->is_aktif == false) {
        return view('maintenance');
    } else {
        return redirect('/');
    }
});
Route::middleware(['isAktif'])->group(function () {
    Route::get('/', function () {
        return view('frontpage.index');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
        Route::post('/logout', 'logout');
    });
    Route::prefix('admin')->group(function () {
        Route::middleware(['auth', 'admin'])->group(function () {

            Route::controller(AdminDashboardController::class)->group(function () {
                Route::get('/dashboard', 'index');
                Route::post('/orders', 'store');
            });
            Route::controller(AdminUserController::class)->group(function () {
                Route::get('user', 'index');
                Route::get('user/create', 'create');
                Route::post('/user/store', 'store');
                Route::get('/user/detail/{id}', 'show');
                Route::get('/user/edit/{id}', 'edit');
                Route::patch('/user/update/{id}', 'update');
                Route::patch('/user/update/detail/{id}', 'updateDetail');
                Route::delete('/user/destroy/{id}', 'destroy');
                Route::post('/user/status', 'statusUpdate');
            });
            Route::controller(AdminKontakController::class)->group(function () {
                Route::get('kontak', 'index');
                Route::post('/kontak/store', 'store');
            });
            Route::controller(AdminPembayaranController::class)->group(function () {
                Route::get('pembayaran', 'index');
                Route::post('/pembayaran/store', 'store');
            });
            Route::controller(AdminAkademiController::class)->group(function () {
                Route::get('akadedmi', 'index');
                Route::get('akadedmi/create', 'create');
                Route::post('/akadedmi/store', 'store');
                Route::get('/akadedmi/detail/{id}', 'show');
                Route::get('/akadedmi/edit/{id}', 'edit');
                Route::patch('/akadedmi/update/{id}', 'update');
                Route::delete('/akadedmi/destroy/{id}', 'destroy');
            });
            Route::controller(AdminArtikelController::class)->group(function () {
                Route::get('artikel', 'index');
                Route::get('artikel/create', 'create');
                Route::post('/artikel/store', 'store');
                Route::get('/artikel/detail/{id}', 'show');
                Route::get('/artikel/edit/{id}', 'edit');
                Route::patch('/artikel/update/{id}', 'update');
                Route::delete('/artikel/destroy/{id}', 'destroy');
                Route::post('/artikel/status', 'statusUpdate');
            });
            Route::controller(AdminPustakaController::class)->group(function () {
                Route::get('pustaka', 'index');
                Route::get('pustaka/create', 'create');
                Route::post('/pustaka/store', 'store');
                Route::get('/pustaka/detail/{id}', 'show');
                Route::get('/pustaka/edit/{id}', 'edit');
                Route::patch('/pustaka/update/{id}', 'update');
                Route::delete('/pustaka/destroy/{id}', 'destroy');
                Route::post('/pustaka/status', 'statusUpdate');
            });
            Route::controller(AdminStrukturController::class)->group(function () {
                Route::get('struktur', 'index');
                Route::get('struktur/create', 'create');
                Route::post('/struktur/store', 'store');
                Route::get('/struktur/detail/{id}', 'show');
                Route::get('/struktur/edit/{id}', 'edit');
                Route::patch('/struktur/update/{id}', 'update');
                Route::delete('/struktur/destroy/{id}', 'destroy');
                Route::post('/struktur/status', 'statusUpdate');
            });
            Route::controller(AdminSettingWebController::class)->group(function () {
                Route::get('setting_web', 'index');
                Route::get('/setting_web/edit/{id}', 'edit');
                Route::patch('/setting_web/update/{id}', 'update');
            });
        });
    });
});
