<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'doc', 'autor_id', 'editorial_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
