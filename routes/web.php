<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\HeladosController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\FacturaController;
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

Route::get('/', HomeController::class);

//cliente
Route::get('cliente', [ClienteController::class, 'index']);
Route::get('cliente/create', [ClienteController::class, 'create']);
Route::get('cliente/{cliente}', [ClienteController::class, 'show']);

//usuario
Route::get('usuario', [UsuarioController::class, 'index']);
Route::get('usuario/create', [UsuarioController::class, 'create']);
Route::get('usuario/{usuario}', [UsuarioController::class, 'show']);

//proveedor
Route::get('proveedor', [ProveedorController::class, 'index']);
Route::get('proveedor/create', [ProveedorController::class, 'create']);
Route::get('proveedor/{proveedor}', [ProveedorController::class, 'show']);

//ingredientes
Route::get('ingredientes', [IngredientesController::class, 'index']);
Route::get('ingredientes/create', [IngredientesController::class, 'create']);
Route::get('ingredientes/{ingredientes}', [IngredientesController::class, 'show']);

//compra
Route::get('compra', [CompraController::class, 'index']);
Route::get('compra/create', [CompraController::class, 'create']);
Route::get('compra/{compra}', [CompraController::class, 'show']);

//helados
Route::get('heleados', [HeladosController::class, 'index']);
Route::get('heleados/create', [HeladosController::class, 'create']);
Route::get('heleados/{heleados}', [HeladosController::class, 'show']);

//venta
Route::get('venta', [VentaController::class, 'index']);
Route::get('venta/create', [VentaController::class, 'create']);
Route::get('venta/{venta}', [VentaController::class, 'show']);

//factura
Route::get('factura', [FacturaController::class, 'index']);
Route::get('factura/create', [FacturaController::class, 'create']);
Route::get('factura/{factura}', [FacturaController::class, 'show']);