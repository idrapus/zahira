<?php

use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Landing Page
Route::get('/', function () {
    return view('pages.landing');
})->name('landing');

Route::get('/support', function () {
    return view('pages.support');
})->name('support');

Route::get('/download', function () {
    return view('pages.download');
})->name('download');

Route::view('/demo-info', 'pages.demo-info')->name('demo-info');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'showLogin')->name('login');
        Route::post('/login', 'login');
        Route::get('/register', 'showRegister')->name('register');
        Route::post('/register', 'register');
    });

    Route::controller(PasswordResetController::class)->group(function () {
        Route::get('/forgot-password', 'showLinkRequestForm')->name('password.request');
        Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
        Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
        Route::post('/reset-password', 'reset')->name('password.update');
    });
});

// Protected Application Routes
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    // Pages
    Route::prefix('page')->name('page.')->group(function () {
        Route::view('/starter', 'pages.starter')->name('starter');
        Route::view('/404', 'pages.error-404')->name('404');
        Route::view('/widgets', 'pages.widgets')->name('widgets');
        Route::view('/login', 'pages.auth.login')->name('login');
        Route::view('/register', 'pages.auth.register')->name('register');
    });

    // Account & Profile
    Route::prefix('account')->name('profile.')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'edit')->name('edit');
            Route::patch('/profile', 'update')->name('update');
            Route::post('/profile/avatar', 'updateAvatar')->name('avatar.update');
            Route::patch('/profile/identity', 'updateIdentity')->name('identity.update');
            Route::put('/profile/password', 'updatePassword')->name('password.update');
            Route::delete('/profile', 'destroy')->name('destroy');
        });
    });

    // UI Components (Documentation)
    Route::prefix('ui')->name('ui.')->group(function () {
        Route::view('/alerts', 'ui.alerts')->name('alerts');
        Route::view('/buttons', 'ui.buttons')->name('buttons');
        Route::view('/typography', 'ui.typography')->name('typography');
        Route::view('/tabs', 'ui.tabs-accordions')->name('tabs');
        Route::view('/toasts', 'ui.toasts')->name('toasts');
        Route::view('/cards', 'ui.cards')->name('cards');
        Route::view('/avatars', 'ui.avatars')->name('avatars');
        Route::view('/badges', 'ui.badges')->name('badges');
        Route::view('/forms', 'ui.forms')->name('forms');
        Route::view('/tables', 'ui.tables')->name('tables');
        Route::view('/breadcrumbs', 'ui.breadcrumbs')->name('breadcrumbs');
        Route::view('/modals', 'ui.modals')->name('modals');
        Route::view('/timeline', 'ui.timeline')->name('timeline');
    });



    // Documentation
    Route::view('/documentation', 'pages.docs')->name('docs');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
