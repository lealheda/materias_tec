<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrera_materia extends Model
{
    protected $table = "carreras_materias";

    protected $fillable = ['carrera_id', 'materia_id'];

	

}
