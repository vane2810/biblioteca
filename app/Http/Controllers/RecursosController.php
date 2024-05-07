<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recursos;

class RecursosController extends Controller
{
    public function index()
    {
        $recursos = Recursos::all();
        return view('recursos.index', compact('recursos'));
    }
}
