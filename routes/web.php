<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/data', [ProductController::class, 'indexData'])->name('products.data');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/kategori/create', [KategoriController::class, 'create'])->name('products.create');
Route::get('/kategori/data', [KategoriController::class, 'indexData'])->name('kategori.data');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{kategori}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');

Route::get('/penjualan', function () {
    return view('penjualan.data');
});

// Route untuk menampilkan form registrasi
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi.form');

// Route untuk menangani proses registrasi (Anda harus menambahkan logika penyimpanan data pengguna di sini)
 Route::post('/registrasi', 'Auth\RegisterController@register')->name('register');

// Route untuk menampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login.form');

// Route untuk menangani proses login (Anda harus menambahkan logika autentikasi di sini)
 Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/single-product', function () {
    return view('single');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/co', function () {
    return view('pages.checkout');
});

Route::get('/coba', function () {
    return view('cobaco');
});

Route::get('/fiksi', function () {
    return view('pages.fiksi');
});

Route::get('/nonfiksi', function () {
    return view('pages.nonfiksi');
});

Route::get('/saintek', function () {
    return view('pages.saintek');
});

Route::get('/pendidikan', function () {
    return view('pages.pendidikan');
});

Route::get('/kesehatan', function () {
    return view('pages.kesehatan');
});

Route::get('/biskeu', function () {
    return view('pages.biskeu');
});

Route::get('/checkout', function () {
    return view('pages.co');
});

