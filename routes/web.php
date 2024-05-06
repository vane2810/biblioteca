<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/about', function () {
    return view('about');
});