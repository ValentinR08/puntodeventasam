<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogoController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');
Route::get('/usuarios/create',[UsuarioController::class,'create']);
Route::post('/usuarios/data',[UsuarioController::class,'store'])->name('users.store');
Route::get('/usuarios/{id}',[UsuarioController::class,'show']);
Route::get('/usuarios/edit/{id}',[UsuarioController::class,'edit'])->name('users.edit');
Route::put('usuarios/{id}', [UsuarioController::class, 'update'])->name('users.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('users.destroy');

Route::get('/catalogo', [CatalogoController::class,'index'])->name('catalogo.index');
Route::post('/catalogo/data',[CatalogoController::class,'store'])->name('catalogo.store');
Route::put('catalogo/{id}', [CatalogoController::class, 'update'])->name('catalogo.update');
Route::delete('/catalogo/{id}', [CatalogoController::class, 'destroy'])->name('catalogo.destroy');

Route::get('/productos', [ProductController::class,'index'])->name('products.index');
Route::post('/productos/data',[ProductController::class,'store'])->name('products.store');
Route::put('productos/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/productos/{id}', [ProductController::class, 'destroy'])->name('products.destroy');