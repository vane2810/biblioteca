<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    
public function index()
{
    $categories = Categoria::all();
    return view('categories.index', compact('categories'));
}

}
