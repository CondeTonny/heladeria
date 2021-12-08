<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\HeladosController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FacturaController;
use App\Models\Helado;

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

//Route::get('/', HomeController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){return view('dashboard');})->name('dashboard');

//Route::resource('tiendas', TiendaController::class);
//Route::get('tiendas/{producto}', [TiendaController::class, 'crearPedido'])->name('tiendas.crearPedido');

//cliente
Route::resource('cliente',ClienteController::class);

//usuario
Route::resource('usuario',UsuarioController::class);

//proveedor
Route::resource('proveedor',ProveedorController::class);

//ingredientes
Route::resource('ingrediente',IngredientesController::class);

//helados
Route::resource('helado',HeladosController::class);

//compra
Route::resource('compra',CompraController::class);

//venta
Route::resource('venta',VentaController::class);

//factura
Route::resource('factura',FacturaController::class);



