<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia_unidad extends Model
{
    protected $table = "materias_unidades";

    protected $fillable = ['materia_id', 'unidad_id'];
}
