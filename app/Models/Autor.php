<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nombre', 'apellido'];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }
}
