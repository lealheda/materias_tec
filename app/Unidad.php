<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Unidad extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $sluggable = ["
       'build_from' => 'nombre',
        'save_to'    => 'slug',
    "];

	protected $table = "unidades";

    protected $fillable = ['nombre','descripcion','activo','user_id','materia_id'];

    public function materia(){
		return $this->belongsTo('App\Materia');
	}
	
	public function user(){
    	return $this->belongsTo('App\User');
    }
}
