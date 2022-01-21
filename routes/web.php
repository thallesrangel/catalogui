<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\UserAuthenticate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementManagementController;
use App\Http\Controllers\CityController;

Route::get('/', [ HomeController::class, 'index' ])->name('home');

Route::prefix('anuncio')->group(function () {
    Route::get('/{slug}', [ AnnouncementController::class, 'show' ])->name('announcemen.datails');
});

Route::get('/estado/{sigla}/cidades', [ CityController::class, 'getById']);

Route::get('/buscar', [ SearchController::class, 'index' ])->name('search');

Route::prefix('sign')->group(function () {
    Route::get('/up', [ SignUpController::class, 'index' ])->name('user.create');
    Route::post('/up/store', [ SignUpController::class, 'store' ])->name('user.store');
    
    Route::get('/in', [ SignInController::class, 'index' ])->name('login');
    Route::post('/in/authenticate', [ SignInController::class, 'authenticate' ])->name('login.authenticate');

    Route::get('/out', [ SignOutController::class, 'logout' ])->name('logout');
});

Route::middleware([ UserAuthenticate::class ])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [ DashboardController::class, 'get' ])->name('dashboard');
        Route::get('/anuncio/{id}/gerenciar', [ AnnouncementManagementController::class, 'index' ])->name('management');
        Route::post('/anuncio/{id}/gerenciar/post/store', [ AnnouncementManagementController::class, 'storePost' ])->name('management.post.store');
        Route::post('/anuncio/{id}/gerenciar/coupon/store', [ AnnouncementManagementController::class, 'storeCoupon' ])->name('management.coupon.store');
    });

    Route::get('/announcement/create', [ AnnouncementController::class, 'create' ])->name('announcement.create');
    Route::post('/announcement/store', [ AnnouncementController::class, 'store' ])->name('announcement.store');
    
});

Route::get('/contato', [ ContactController::class, 'index' ])->name('contact');