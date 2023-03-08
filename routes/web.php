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
// Listar usuarios
Route::get('usuarios',[UsersController::class, 'index'])->name('usuarios');
// Form crear nuevo usuario
Route::get('usuarios/crear/',[UsersController::class, 'create'])->name('usuarios.crear');
// Guardar un nuevo usuario
Route::post('usuarios',[UsersController::class,'store'])->name('usuarios.guardar');
//  Eliminar un usuario
Route::delete('usuarios/{id}', [UsersController::class , 'destroy'])->name('usuarios.delete');
// Detalles de un usuario
Route::get('usuarios/{id}',[UsersController::class,'show'])->name('usuarios.show');
// Edit un usuario
Route::get('usuarios/{id}/editar',[UsersController::class,'edit'])->name('usuarios.edit');
// Actualizar usuario
Route::put('usuarios/{id}',[UsersController::class,'update'])->name('usuarios.update');
