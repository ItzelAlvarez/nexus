<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\SalidaController;

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
    return view('auth.login');
})->name('home');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/descarga{archivo}', [SalidaController::class, 'descargaArchivo'])->name('descarga');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashbard', function () {
        return view('dashboard');
    });
});
Route::resource('salidas', SalidaController::class)->middleware('auth');
Route::resource('entradas', EntradaController::class)->middleware('auth');
Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::resource('productos', ProductoController::class)->middleware('auth');

