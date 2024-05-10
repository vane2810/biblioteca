<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('recursos.index', compact('autores'));
    }

    public function crear()
    {
        return view('recursos.crear');
    }

    public function guardar(Request $request)
    {   
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);
    
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->descripcion = $request->descripcion;
        $autor->save();
    
        return redirect()->route('recursos.crear');
    }    
}
