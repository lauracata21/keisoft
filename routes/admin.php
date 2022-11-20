<?php

use App\Http\Controllers\Admin\AlimentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FundacionController;

Route::resource('admin', AdminController::class)
     ->middleware('auth.admin');

// Route::resource('especie', EspecieController::class);

Route::resource('admin/productos/alimentos', AlimentosController::class)
    ->middleware('auth.admin');

//Control de usuarios
 Route::resource('admin/users', UserController::class)
    ->middleware('auth.admin');

Route::resource('fundaciones', FundacionController::class)
      ->middleware('auth.admin');