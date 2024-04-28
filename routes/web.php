<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/tipoAsiento', [TipoAsientoController::class, 'tipoAsientos'])->name("tipoasiento");
Route::get('/crearTipoAsiento', [TipoAsientoController::class, 'crearTipoAsientos'])->name("tipoasiento.crear");
Route::get('/vuelos', [VuelosController::class, 'vuelos'])->name("vuelos");
Route::post('/tipoAsiento/agregar', [TipoAsientoController::class, 'agregarTipoAsiento'])->name("tipoasiento.agregar");
Route::get('/vuelos/agregar', [VuelosController::class, 'agregarVuelo'])->name("vuelo.agregar");
Route::get('/tipoAsiento/editar/{id}', [TipoAsientoController::class, 'editar'])->name("tipoasiento.editar");
Route::get('/tipoAsiento/eliminar/{id}', [TipoAsientoController::class, 'eliminar'])->name("tipoasiento.eliminar");
Route::put('/tipoAsiento/actualizar/{id}', [TipoAsientoController::class, 'actualizar'])->name('tipoasiento.actualizar');