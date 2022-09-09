<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;



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

Route::get('/index', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('template.product');
});

Route::get('/register', function () {
    return view('template.register');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', [HomeController::class, 'showberanda']);
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('login', [AuthController::class, 'showlogin']);

Route::get('promo', function () {
    return view('promo');
});


Route::get('pelanggan', function () {
    return view('pelanggan');
});

Route::get('supplier', function () {
    return view('supplier');
});
