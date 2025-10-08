<?php

use App\Http\Controllers\LienHeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
// Trang chủ
Route::get('/', [SanPhamController::class, 'index'])->name('home');
Route::get('/san-pham/{id}', [SanPhamController::class, 'show'])->name('product.show');
// Hóa đơn
Route::get('/checkout', function () {
    return view('user.checkout');
})->name('checkout');

// Danh sách sản phẩm
Route::get('/shop', function () {
    return view('user.shop');
})->name('shop');

// Chi tiết sản phẩm
Route::get('/single-product', function () {
    return view('user.single-product');
})->name('single-product');

// Giỏ hàng
Route::get('/cart', function () {
    return view('user.cart');
})->name('cart');

// Liên hệ
Route::get('/contact', [LienHeController::class, 'index'])->name('contact');
Route::post('/contact', [LienHeController::class, 'store'])->name('contact.store');

// Backoffice
require __DIR__.'/backoffice.php';
Route::get('/admin', function () {
    return view('layouts.layoutbackoff');
});
Route::get('/test', function () {
    return view('backoffice.test');
});
Route::get('/', [SanPhamController::class, 'topseller'])->name('home');