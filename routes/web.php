<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempatWisataController;
use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/history', [HomeController::class, 'indextransaksi'])->name('transaksi.index');
Route::resource('home', HomeController::class);
Route::resource('tempatwisata', TempatWisataController::class);
Route::get('/testimoni', [HomeController::class, 'testimoni'])->name('testimoni');
Route::get('/transaksi', [HomeController::class, 'createtransaksi'])->name('transaksi.create');
Route::post('getTransaksi',[HomeController::class,'storetransaksi'])->name('transaksi.store');
Route::get('/detail/{id}', [HomeController::class, 'showtransaksi'])->name('transaksi.show');