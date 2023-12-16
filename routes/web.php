<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.home');
});

Route::get('/tentang', function () {
    return view('app.about');
});

Route::get('/produk', function () {
    return view('app.product');
});
Route::get('/produk/detail', function () {
    return view('app.product_detail');
});

Route::get('/artikel', function () {
    return view('app.article');
});
Route::get('/artikel/detail', function () {
    return view('app.article_detail');
});

// Route::get('/artikel', [ArtikelController::class,'show']);
// Route::get('/artikel/{slug}', [ArtikelController::class, 'detail']);
// Route::get('/produk', [ProdukController::class,'show']);
// Route::get('/produk/{slug}', [ProdukController::class, 'detail']);

