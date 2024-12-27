<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use 	Illuminate\Auth\Middleware\Authenticate;


// Route::controller(HomeController::class)->group(function () {
//     Route::get('/', 'index');
// });

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('/login', 'login')->name('login');

    Route::name('auth.')->group(function () {
        Route::post('/login', 'storeLogin')->name('post-login');
        
        Route::get('/signup', 'register')->name('register');
        Route::post('/signup', 'store')->name('post-register');
        
        Route::get('/signout', 'signOut')->name('sign-out');
        Route::post('/show/{id}', 'show')->name('view');
    });
});

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');}
    );

    Route::controller(DashboardController::class)
        ->prefix('dashboard')->name('dash.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });

    Route::controller(UserController::class)
        ->prefix('users')->name('user.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});
