<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carrera;

class CarrerasController extends Controller
{
    public function create(){
    	return view('carrera.registro');
    }
}
