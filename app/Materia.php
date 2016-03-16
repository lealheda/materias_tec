<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Materia extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $sluggable = ["
       'build_from' => 'nombre',
        'save_to'    => 'slug',
    "];

	protected $table = "materias";

    protected $fillable = ['nombre','activo','user_id'];

    
    public function carrera(){
		return $this->belongsToMany('App\Carrera');
	}
	
	public function unidad(){
		return $this->hasMany('App\Unidad', 'id');
	}
		
	public function user(){
    	return $this->belongsTo('App\User');
    }
    

}
