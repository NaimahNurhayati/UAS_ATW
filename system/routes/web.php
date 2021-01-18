<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientProdukController;
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

// untuk Pengguna
Route::get('/', [PenggunaController::class, 'home']);
Route::get('produkbaru', [PenggunaController::class, 'newarrival']);
Route::get('checkout', [PenggunaController::class, 'checkout']);
Route::get('detailproduk', [PenggunaController::class, 'detailproduk']);
Route::get('mail', [PenggunaController::class, 'mail']);
Route::get('pembayaran', [PenggunaController::class, 'pembayaran']);
// akhir untuk pengguna


// untuk admin
Route::get('home/{status}', [HomeController::class, 'showHome']);
Route::resource('produk', ProdukController::class);
// akhir untuk admin
Route::get('template.card', [TemplateController::class, 'showCard']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);

// produk
Route::post('produk/filter', [ProdukController::class, 'filter']);
// akhir produk

// setting
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);
// Akhir setting

// user
Route::resource('user', UserController::class);
// akhir user

// clientproduk
Route::get('template.produk', [ClientProdukController::class, 'showTemplateproduk']);
Route::get('template/{produk}', [ClientProdukController::class, 'show']);
Route::post('template/filter', [ClientProdukController::class, 'filter']);
Route::post('template.produk/filter', [ClientProdukController::class, 'filter']);
// akhir clientproduk

// login,logout,register
Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'storeRegister']);

Route::get('test-ajax', [HomeController::class, 'testAjax']);
