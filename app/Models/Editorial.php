<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = ['nombre', 'pais'];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }
}
