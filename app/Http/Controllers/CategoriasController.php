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
            $nombreImagen = time() . '_' . $request->file('imagen')->getClientOriginalName();
    
            $imagenPath = $request->file('imagen')->storeAs('public/img/categorias', $nombreImagen);
            
            
            $imagenRelativa = str_replace('public/', '', $imagenPath);
        } else {
           
            return redirect()->back()->with('error', 'Debe seleccionar una imagen.');
        }
    
        
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->imagen = $imagenRelativa; 
    
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }
    

    public function editar(Categoria $categoria)
    {
        return view('categorias.editar', compact('categoria'));
    }
    
    public function actualizar(Request $request, Categoria $categoria)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Regla de validación para la imagen
        ]);
    
        // Asignar los nuevos valores a los atributos de la categoría
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
    
        // Verificar si se ha enviado una nueva imagen
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($categoria->imagen) {
                Storage::delete('public/' . $categoria->imagen);
            }
    
            // Guardar la nueva imagen
            $imagenPath = $request->file('imagen')->store('img/categorias', 'public');
            $categoria->imagen = $imagenPath;
        }
    
        // Guardar los cambios en la base de datos
        $categoria->save();
    
        // Redireccionar a la página de índice de categorías con un mensaje de éxito
        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada correctamente.');
    }
    

    public function eliminar(Categoria $categoria)
    {
        if ($categoria->imagen) {
            Storage::delete('public/' . $categoria->imagen);
        }

        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente.');
    }
}
