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

//Route::get('/home', function () {
//    return view('layouts.home');
//});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->middleware('auth');
Route::get('/home',[\App\Http\Controllers\Transportistascontroller::class,'index'])->name('transportista.index');
Route::get('/create',[\App\Http\Controllers\Transportistascontroller::class,'create'])->name('transportista.create');

//ruta del login
Route::get('views/auth/login', function () {
    return view('auth/login');
})->name('login');
