<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\AutoresController;


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


// Recursos
Route::get('categoria/{categoria}/recursos', [CategoriasController::class, 'recursos'])->name('recursos.index');
Route::get('/recursos/crear', [RecursosController::class, 'crear'])->name('recursos.crear');
Route::post('/recursos/guardar', [RecursosController::class, 'guardar'])->name('recursos.guardar');
Route::get('/recursos/{recurso}/editar', [RecursosController::class, 'editar'])->name('recursos.editar');
Route::put('/recursos/{recurso}/actualizar', [RecursosController::class, 'actualizar'])->name('recursos.actualizar');
Route::delete('/recursos/{recurso}/eliminar', [RecursosController::class, 'eliminar'])->name('recursos.eliminar');


// Autores
Route::post('/autores', [AutoresController::class, 'guardar'])->name('autores.guardar');

// Usuarios
Route::get('/login', function () {
    return view('usuarios.login');
});