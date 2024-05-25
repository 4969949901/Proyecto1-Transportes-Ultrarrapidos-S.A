<?php

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
//Route para el welcome
Route::get('/', function () {
    return view('layouts.welcome');
});



//Route para el blade de home
Auth::routes();

Route::get('/home', function () {
    return view('layouts.home');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route para el blade de Ingreso
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->middleware('auth');
Route::get('/home',[\App\Http\Controllers\EgresoController::class,'index'])->name('egreso.index');
Route::get('/create',[\App\Http\Controllers\EgresoController::class,'create'])->name('egreso.create');
Route::post('/home',[\App\Http\Controllers\EgresoController::class,'store'])->name('egreso.store');
Route::get('/egreso/edit/{id}',[\App\Http\Controllers\EgresoController::class,'edit'])->name('egreso.edit');
Route::put('/update',[\App\Http\Controllers\EgresoController::class,'update'])->name('egreso.update');
Route::get('/show',[\App\Http\Controllers\EgresoController::class,'show'])->name('egreso.show');
Route::delete('/destroy',[\App\Http\Controllers\EgresoController::class,'destroy'])->name('egreso.destroy');
/*--nuevo commit--*/
