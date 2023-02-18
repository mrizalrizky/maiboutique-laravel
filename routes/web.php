<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::view('/', 'pages.welcome')->name('welcome')->middleware('guest');

Route::middleware(['auth'])->group(function() {
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/details/{slug}', [App\Http\Controllers\ProductController::class, 'viewProduct'])->name('view-product');
    Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
    Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions');
    Route::get('/transactions/{id}', [App\Http\Controllers\TransactionController::class, 'viewTransactionDetail']);
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/settings/update', [App\Http\Controllers\ProfileController::class, 'updateProfilePage']);
    Route::put('/profile/settings/update', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('update-profile');
    Route::get('/profile/settings/password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm']);
    Route::put('/profile/settings/password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPassword'])->name('update-password');
    Route::get('/cart',  [App\Http\Controllers\CartController::class, 'index'])->name('cart');
    Route::post('/details', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add-to-cart');
    Route::put('/cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('update-cart');
    Route::delete('/cart', [App\Http\Controllers\CartController::class, 'removeItemFromCart'])->name('remove-from-cart');
    Route::post('/cart', [App\Http\Controllers\TransactionController::class, 'checkout'])->name('checkout');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::middleware(['adminAccess'])->group(function() {
        Route::get('/admin/add-product', [App\Http\Controllers\ProductController::class, 'addProductPage']);
        Route::post('/admin/add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product');
        Route::delete('/details/{slug}', [App\Http\Controllers\ProductController::class, 'deleteItem'])->name('delete-product');
    });
});

Auth::routes();

// Auth::routes(['reset' => false]);

