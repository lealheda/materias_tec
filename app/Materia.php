<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	protected $table = "materias";

    protected $fillable = ['nombre'];

    
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
