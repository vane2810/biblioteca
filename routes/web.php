<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home.welcome');
});

Route::get('/about', function () {
    return view('home.about');
});

// Categorias
Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');

// Usuarios
Route::get('/login', function () {
    return view('usuarios.login');
});