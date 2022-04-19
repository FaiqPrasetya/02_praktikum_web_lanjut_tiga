<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
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

// Route view (di luar materi tapi tetap berguna)
Route::view('/', 'index')->name('index');
Route::view('/gallery', 'gallery')->name('gallery');

// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Route biasa
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route param
Route::get('galleries/gallery-{id}', function ($id) {
    if ($id == 1) {
        return view('galleries.gallery-1');
    }
    else if ($id == 2) {
        return view('galleries.gallery-2');
    }
});

// Route pre-fix
Route::prefix('shop')->group(function () {

    // Route::controller dapat digunakan
    // Apabila group route menggunakan controller yg sama
    // https://laravel.com/docs/8.x/routing#route-group-controllers

    Route::controller(ShopController::class)->group(function () {
        Route::get('/shop', 'shop')->name('shop');
        Route::get('/shop-detail', 'shopDetail')->name('shop-detail');
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/my-account', 'myAccount')->name('my-account');
        Route::get('/wishlist', 'wishlist')->name('wishlist');
    });
});

// Route resource
Route::resource('/contact-us', ContactController::class)->names([
    'index' => 'contact-us'
]);
