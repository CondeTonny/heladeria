<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\HeladosController;
use App\Http\Controllers\CompraController;
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
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);
Route::get('clientes/{cliente}', [ClienteController::class, 'show']);

//usuario
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('usuarios/create', [UsuarioController::class, 'create']);
Route::get('usuarios/{usuario}', [UsuarioController::class, 'show']);

//proveedor
Route::get('proveedores', [ProveedorController::class, 'index']);
Route::get('proveedores/create', [ProveedorController::class, 'create']);
Route::get('proveedores/{proveedor}', [ProveedorController::class, 'show']);

//ingredientes
Route::get('ingredientes', [IngredientesController::class, 'index']);
Route::get('ingredientes/create', [IngredientesController::class, 'create']);
Route::get('ingredientes/{ingredientes}', [IngredientesController::class, 'show']);

//helados
Route::get('helados', [HeladosController::class, 'index']);
Route::get('helados/create', [HeladosController::class, 'create']);
Route::get('helados/{heleados}', [HeladosController::class, 'show']);

//compra
Route::get('compras', [CompraController::class, 'index']);
Route::get('compras/create', [CompraController::class, 'create']);
Route::get('compras/{compra}', [CompraController::class, 'show']);

//venta
Route::get('ventas', [VentaController::class, 'index']);
Route::get('ventas/create', [VentaController::class, 'create']);
Route::get('ventas/{venta}', [VentaController::class, 'show']);

//factura
Route::get('facturas', [FacturaController::class, 'index']);
Route::get('facturas/create', [FacturaController::class, 'create']);
Route::get('facturas/{factura}', [FacturaController::class, 'show']);