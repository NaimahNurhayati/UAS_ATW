<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientKategoriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\ClientPromoController;
use App\Http\Controllers\SettingController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('template.login', [TemplateController::class, 'showTemplatelogin']);
Route::get('template.chekout', [TemplateController::class, 'showChekout']);
Route::get('template.card', [TemplateController::class, 'showCard']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

// produk
Route::resource('produk', ProdukController::class);
Route::post('produk/filter', [ProdukController::class, 'filter']);
// akhir produk

// kategori
Route::resource('kategori', KategoriController::class);
// akhir kategori

// promo
Route::resource('promo', PromoController::class);
// akhir [promo]

// setting
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);
// Akhir setting

// user
Route::resource('user', UserController::class);
// akhir user

// clientkategori
Route::get('template', [ClientKategoriController::class, 'showTemplate']);
// akhir clientkategori

// clientproduk
Route::get('template.produk', [ClientProdukController::class, 'showTemplateproduk']);
Route::get('template/{produk}', [ClientProdukController::class, 'show']);
Route::post('template/filter', [ClientProdukController::class, 'filter']);
Route::post('template.produk/filter', [ClientProdukController::class, 'filter']);
// akhir clientproduk

// client promo
Route::get('template.promo', [ClientPromoController::class, 'showTemplatepromo']);
Route::get('detail/{promo}', [ClientPromoController::class, 'show']);
// akhir client promo

// login,logout,register
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'storeRegister']);

Route::get('test-ajax', [HomeController::class, 'testAjax']);
