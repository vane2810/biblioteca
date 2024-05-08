<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RecursosController;

// Home
Route::get('/', function () {
    return view('home.welcome');
});

Route::get('/about', function () {
    return view('home.about');
});

// Categorias
Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
Route::get('/categorias/crear', [CategoriasController::class, 'crear'])->name('categorias.crear');
Route::post('/categorias/guardar', [CategoriasController::class, 'guardar'])->name('categorias.guardar');
Route::get('/categorias/{categoria}/editar', [CategoriasController::class, 'editar'])->name('categorias.editar');
Route::put('/categorias/{categoria}/actualizar', [CategoriasController::class, 'actualizar'])->name('categorias.actualizar');
Route::delete('/categorias/{categoria}/eliminar', [CategoriasController::class, 'eliminar'])->name('categorias.eliminar');

//Recursos
Route::get('/recursos',[RecursosController::class,'index']);

// Usuarios
Route::get('/login', function () {
    return view('usuarios.login');
});