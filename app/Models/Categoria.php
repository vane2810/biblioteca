<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre','descripcion','imagen'];

    public function recursos()
    {
        return $this->belongsToMany(Recurso::class);
    }
}

