<?php

use App\Http\Controllers\PruebasController;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\Vuelos_AsientosController;
use App\Http\Controllers\VuelosController;
use App\Models\Prueba;
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
Route::get('/vuelos', [VuelosController::class, 'index'])->name("vuelos");
Route::post('/tipoAsiento/agregar', [TipoAsientoController::class, 'agregarTipoAsiento'])->name("tipoasiento.agregar");
Route::get('/vuelos/agregar', [VuelosController::class, 'agregarVuelo'])->name("vuelo.agregar");
Route::post('/vuelos/crear', [VuelosController::class, 'crearVuelo'])->name("vuelo.crear");
Route::get('/tipoAsiento/editar/{id}', [TipoAsientoController::class, 'editar'])->name("tipoasiento.editar");
Route::get('/tipoAsiento/eliminar/{id}', [TipoAsientoController::class, 'eliminar'])->name("tipoasiento.eliminar");
Route::put('/tipoAsiento/actualizar/{id}', [TipoAsientoController::class, 'actualizar'])->name('tipoasiento.actualizar');
Route::get('/vuelo/editar/{id}', [VuelosController::class, 'editar'])->name("vuelos.editar");
Route::get('/vuelo/actualizar/{id}/', [VuelosController::class, 'actualizar'])->name("actualizar.vuelo");
Route::get('/vuelo/eliminar/{id}', [VuelosController::class, 'eliminar'])->name("vuelos.eliminar");
Route::put('/vuelo/agregarAsiento/{id}/{fecha}', [Vuelos_AsientosController::class, 'agregarAsiento'])->name("agregar.asiento");
Route::get('/vuelo/verAsiento', [Vuelos_AsientosController::class, 'verAsiento'])->name('ver.asientos');