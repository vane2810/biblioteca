<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;
use Illuminate\Support\Facades\Storage;

class RecursosController extends Controller
{
    public function index()
    {
        $recursos = Recurso::all();
        return view('recursos.index', compact('recursos'));

    }

    public function crear()
    {
        return view('recursos.crear');
    }
    

    public function guardar(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'autor_id' => 'required|exists:autores,id',
        ]);
    
        if ($request->hasFile('imagen')) {
            $nombreImagen = uniqid() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/img/recursos', $nombreImagen);
            $imagenRutaCompleta = 'storage/img/recursos/' . $nombreImagen;
        } else {
            return redirect()->back()->with('error', 'Debe seleccionar una imagen.');
        }
    
        $recurso = new Recurso();
        $recurso->titulo = $request->titulo;
        $recurso->descripcion = $request->descripcion;
        $recurso->imagen = $imagenRutaCompleta; 
        $recurso->autor_id = $request->autor_id;
        $recurso->save();
    
        return redirect()->route('recursos.index');
    }

    public function editar(Recurso $recurso)
    {
        return view('recursos.editar', compact('recursos'));
    }
    
    public function actualizar(Request $request, Recurso $recurso)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,|max:2048', 
        ]);
    
        $recurso->titulo = $request->titulo;
        $recurso->descripcion = $request->descripcion;
        $imagenRutaCompleta = $recurso->imagen;
    
        if ($request->hasFile('imagen')) {
            if ($recurso->imagen && Storage::disk('public')->exists($recurso->imagen)) {
                Storage::disk('public')->delete($recurso->imagen);
            }
            $nombreImagen = uniqid() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/img/recursos', $nombreImagen);
            $imagenRutaCompleta = 'storage/img/recursos/' . $nombreImagen;
        }              
        $recurso->imagen = $imagenRutaCompleta; 
        $recurso->save();
    
        return redirect()->route('recursos.index');
    }
    

    public function eliminar(Recurso $recurso)
    {
        $recurso->delete();
        return redirect()->route('recursos.index');
    }
    
}
