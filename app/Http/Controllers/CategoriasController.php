<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function crear()
    {
        return view('categorias.crear');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('imagen')) {
            $nombreImagen = uniqid() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/img/categorias', $nombreImagen);
            $imagenRutaCompleta = 'storage/img/categorias/' . $nombreImagen;
        } else {
            return redirect()->back()->with('error', 'Debe seleccionar una imagen.');
        }
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->imagen = $imagenRutaCompleta; 
        $categoria->save();
    
        return redirect()->route('categorias.index');
    }
    

    public function editar(Categoria $categoria)
    {
        return view('categorias.editar', compact('categoria'));
    }
    
    public function actualizar(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,|max:2048', 
        ]);
    
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $imagenRutaCompleta = $categoria->imagen;
    
        if ($request->hasFile('imagen')) {
            if ($categoria->imagen && Storage::disk('public')->exists($categoria->imagen)) {
                Storage::disk('public')->delete($categoria->imagen);
            }
            $nombreImagen = uniqid() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/img/categorias', $nombreImagen);
            $imagenRutaCompleta = 'storage/img/categorias/' . $nombreImagen;
        }              
        $categoria->imagen = $imagenRutaCompleta; 
        $categoria->save();
    
        return redirect()->route('categorias.index');
    }
    

    public function eliminar(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
    
    public function recursos(Categoria $categoria)
    {
        $recursos = $categoria->recursos; 
        return view('recursos.index', compact('categoria', 'recursos'));
    }


    
}