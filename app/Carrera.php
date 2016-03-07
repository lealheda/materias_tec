<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carreras";

    protected $fillable = ['nombre', 'descripcion' ];

    public function materia(){
    	return $this->belongsToMany('App\Materia');
    }
    
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
