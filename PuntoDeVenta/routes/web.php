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
Route::get('/usuarios', [usuarioController::class,'index'])->name('usuarios.index');
Route::get('/usuarios/create',[usuarioController::class,'create']);
Route::post('/usuarios/data',[usuarioController::class,'store'])->name('users.store');
Route::get('/usuarios/{id}',[usuarioController::class,'show']);
Route::get('/usuarios/{id}/edit',[usuarioController::class,'edit']);
Route::post('/usuarios/{id}',[usuarioController::class,'update']);
Route::delete('/usuarios/{id}',[usuarioController::class,'destroy']);


