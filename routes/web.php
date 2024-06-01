<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamionesController;
use App\Http\Controllers\PilotosController;
use App\Http\Controllers\AuthController;


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

//ruta del login
Route::get('views/auth/login', function () {
    return view('auth/login');
})->name('login');

//ruta del register
Route::get('views/auth/register', function () {
    return view('auth/register');
})->name('register');

//Rutas Log-out
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});




//Route para el blade de home
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->middleware('auth');
//Route::get('/home', function () {
//    return view('layouts.home');
//});



Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');


//RUTAS DE TRANSPORTISTAS
Route::get('/home',[\App\Http\Controllers\Transportistascontroller::class,'index'])->name('transportista.index');
Route::get('/create',[\App\Http\Controllers\Transportistascontroller::class,'create'])->name('transportista.create');
Route::post('Transportista/store',[\App\Http\Controllers\Transportistascontroller::class,'store'])->name('transportista.store');
Route::get('Transportista/edit/{id_transportistas}',[\App\Http\Controllers\Transportistascontroller::class,'edit'])->name('transportista.edit');
Route::put('Transportista/update/{id_transportistas}',[\App\Http\Controllers\Transportistascontroller::class,'update'])->name('transportista.update');
Route::get('Transportista/show/{id_transportistas}',[\App\Http\Controllers\Transportistascontroller::class,'show'])->name('transportista.show');
Route::delete('Transportista/destroy', [\App\Http\Controllers\Transportistascontroller::class,'destroy'])->name('transportista.destroy');

//RUTAS DE CAMIONES
Route::get('/home',[\App\Http\Controllers\CamionesController::class,'index'])->name('camion.index');
Route::get('/camion/create',[\App\Http\Controllers\CamionesController::class,'create'])->name('camion.create');
Route::post('/camion',[\App\Http\Controllers\CamionesController::class,'store'])->name('camion.store');
Route::get('/camion/{id}/edit', [\App\Http\Controllers\CamionesController::class, 'edit'])->name('camion.edit');
Route::put('/camion/{id}/update', [\App\Http\Controllers\CamionesController::class, 'update'])->name('camion.update');
Route::get('/camion/{id}/delete', [\App\Http\Controllers\CamionesController::class, 'delete'])->name('camion.delete');


//RUTAS DE PREDIO
Route::get('/home',[\App\Http\Controllers\PrediosController::class,'index'])->name('predio.index');
Route::get('/create',[\App\Http\Controllers\PrediosController::class,'create'])->name('predio.create');
Route::get('/ruta-piloto', [\App\Http\Controllers\PrediosController::class,'mostrarTablaPiloto'])->name('piloto.index');
Route::post('/predio/store',[\App\Http\Controllers\PrediosController::class,'store'])->name('predio.store');
Route::get('/predio/{id}/edit', [\App\Http\Controllers\PrediosController::class, 'edit'])->name('predio.edit');
Route::put('/predio/{id}/update', [\App\Http\Controllers\PrediosController::class, 'update'])->name('predio.update');
Route::get('/predio/{id}/delete', [\App\Http\Controllers\PrediosController::class, 'delete'])->name('predio.delete');


//RUTA DE PILOTO
Route::get('/home',[\App\Http\Controllers\PilotosController::class,'index'])->name('piloto.index');
Route::get('/ruta-predio', [\App\Http\Controllers\PilotosController::class, 'mostrarTablaPredio'])->name('predio.index');
Route::get('/piloto/create',[\App\Http\Controllers\PilotosController::class,'create'])->name('piloto.create');
Route::Post('/piloto/store',[\App\Http\Controllers\PilotosController::class,'store'])->name('piloto.store');
Route::get('/piloto/edit/{id}', [\App\Http\Controllers\PilotosController::class, 'edit'])->name('piloto.edit');
Route::put('/piloto/update/{id}',[\App\Http\Controllers\PilotosController::class,'update'])->name('piloto.update');
Route::get('/piloto/delete/{id}',[\App\Http\Controllers\PilotosController::class,'delete'])->name('piloto.delete');

