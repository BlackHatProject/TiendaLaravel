<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\JsonProductosController;
use App\Http\Controllers\seccionController;

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
    return redirect('productos');
});

// Resource Routes

Route::resource('productos', ProductosController::class);
Route::resource('user', UserController::class);

// Login routes

Route::get('login', [loginController::class, 'loginPage'])->name('login');
Route::post('login', [loginController::class, 'loginAuth']);
Route::get('logout', [loginController::class, 'logout']);

/* -- Agregar al carrito -- */

Route::post('session/carrito', [seccionController::class, 'agregarCarrito'])->middleware('auth');

/* -- Async Respoonse Productos -- */

Route::get('jsonproductos/mostrar', [JsonProductosController::class, 'mostrar']);

Route::get('session/carritoCount', [seccionController::class, 'carritoCount']);