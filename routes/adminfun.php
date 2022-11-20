<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFundacion\AdminFunController;
use App\Http\Controllers\AdminFundacion\CasosController;
use App\Http\Controllers\AdminFundacion\EspeciesController;
use App\Http\Controllers\AdminFundacion\NoticiaController;
use App\Http\Controllers\AdminFundacion\PerfilFunController;

Route::resource('fundacion', AdminFunController::class)
     ->middleware('auth.adminfun');

Route::resource('perfils', PerfilFunController::class) 
     ->middleware('auth.adminfun');

//Animales-Especies
Route::resource('especie', EspeciesController::class) 
     ->middleware('auth.adminfun');
         
//Casos reportados
 Route::resource('casos', CasosController::class) 
     ->middleware('auth.adminfun');

//Noticicias
Route::resource('noticias', NoticiaController::class) 
     ->middleware('auth.adminfun');