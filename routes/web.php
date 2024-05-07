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
Route::get('/categorias',[CategoriasController::class,'index']);

//Recursos
Route::get('/recursos',[RecursosController::class,'index']);

// Usuarios
Route::get('/login', function () {
    return view('usuarios.login');
});