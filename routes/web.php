<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminDashboardController;

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
            Route::delete('/user/destroy/{id}', 'destroy');
        });
    });
});
