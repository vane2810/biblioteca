<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'editoriales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','pais'];

}