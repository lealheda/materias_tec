<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
	protected $table = "unidades";

    protected $fillable = ['nombre'];

    public function materia(){
		return $this->belongsTo('App\Materia');
	}
	
	public function user(){
    	return $this->belongsTo('App\User');
    
}
