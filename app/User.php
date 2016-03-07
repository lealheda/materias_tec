<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function carreras(){
        return $this->hasOne('App\Carrera');
    }

    public function materias(){
        return $this->hasOne('App\Materia');
    }

    public function unidades(){
        return $this->hasOne('App\Unidad');
    }


}
