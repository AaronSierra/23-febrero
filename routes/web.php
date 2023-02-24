<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

Route::get('usuarios',[UsersController::class, 'index'])->name('usuarios');
Route::get('usuarios/crear/',[UsersController::class, 'create'])->name('usuarios.crear');

Route::post('usuarios',[UsersController::class,'store'])->name('usuarios.guardar');