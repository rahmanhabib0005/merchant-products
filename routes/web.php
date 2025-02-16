<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Merchant\ProductController;
use App\Http\Controllers\Merchant\StoreCategoryController;
use App\Http\Controllers\Merchant\StoreController;
use App\Models\StoreCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('merchant.login');
});

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->as('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');

        // Route::get('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
        // Route::post('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register'])->name('register');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin')->name('dashboard');
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth:admin');
});


Route::prefix('merchant')->as('merchant.')->group(function () {
    Route::middleware('guest:merchant')->group(function () {
        Route::get('/login', [App\Http\Controllers\Merchant\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\Merchant\Auth\LoginController::class, 'login'])->name('login');
        Route::get('/register', [App\Http\Controllers\Merchant\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [App\Http\Controllers\Merchant\Auth\RegisterController::class, 'register'])->name('register');
    });

    Route::resource('store-list', StoreController::class)
        ->middleware('auth:merchant')
        ->names('store-list');

    Route::resource('category-list', StoreCategoryController::class)->middleware('auth:merchant')->names(names: 'store-category');

    Route::resource('product-list', ProductController::class)->middleware('auth:merchant')->names('product-list');

    Route::post('/logout', [App\Http\Controllers\Merchant\Auth\LoginController::class, 'logout'])->name('logout')->middleware('auth:merchant');
});
