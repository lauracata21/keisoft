<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FundacionxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReporteAbusoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [HomeController::class, 'index'])
->name('home.index');
// RUTAS INICIO DE SESION
Route::get('/login', [SessionsController::class,'create'])->name('login.create');
Route::post('/login', [SessionsController::class,'store'])->name('login.store');
Route::get('/logout', [SessionsController::class,'destroy'])->name('login.destroy');

// RUTAS REGISTRO
Route::get('/registro', [RegisterController::class,'create'])->name('registro.create');
Route::post('/registro', [RegisterController::class,'store'])->name('registro.store');

//RUTAS CARRITO
Route::get('/tienda', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

//REPORTAR CASOS
Route::resource('reportar', ReporteAbusoController::class);
//FUNDACION
Route::resource('fundacionx', FundacionxController::class);