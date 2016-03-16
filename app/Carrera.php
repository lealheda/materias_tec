<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Carrera extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $sluggable = ["
       'build_from' => 'nombre',
        'save_to'    => 'slug',
    "];

    protected $table = "carreras";

    protected $fillable = ['nombre', 'descripcion', 'activo', 'user_id' ];

    public function materia(){
    	return $this->belongsToMany('App\Materia');
    }
    
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
