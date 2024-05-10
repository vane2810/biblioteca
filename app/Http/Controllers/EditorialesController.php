<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    public function index()
    {
        $autores = Editorial::all();
        return view('recursos.index', compact('editoriales'));
    }

    public function crear()
    {
        return view('recursos.crear');
    }

    public function guardar(Request $request)
    {   
        $request->validate([
            'nombre' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
        ]);
    
        $autor = new Editorial();
        $autor->nombre = $request->nombre;
        $autor->pais = $request->pais;
        $autor->save();
    
        return redirect()->route('recursos.crear');
    }    
}
