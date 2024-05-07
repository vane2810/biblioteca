<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

}