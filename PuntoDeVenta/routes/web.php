<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;

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
Route::get('/usuarios/{id}/edit',[UsuarioController::class,'edit']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('users.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('users.destroy');


