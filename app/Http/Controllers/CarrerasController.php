<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carrera;
use Laracasts\Flash\Flash;

class CarrerasController extends Controller
{
    public function create(){
    	return view('carrera.registro');
    }

	public function index(){
		$carreras = Carrera::orderBy('nombre','ASC')->paginate(5);
    	return view('carrera.index')->with('carreras',$carreras);
    }    

    public function store(Request $request){
    	$carrera = new carrera($request->all());
    	$carrera -> activo = 1;
    	$carrera -> user_id = 1;
    	$carrera -> save();
    	Flash::overlay('Carrera ' . $carrera->nombre .' registrada con exito');
    	Flash::success('Carrera ' . $carrera->nombre .' registrada con exito');
    	return redirect()->route('carreras.index');
    	//return redirect()->action('CarrerasController@index');
    }

    public function edit($id){
    	$carrera = Carrera::find($id);
    	return view('carrera.edit')->with('carrera',$carrera);
    }

    public function update(Request $request, $id){
    	$carrera = Carrera::find($id);
    	$carrera->nombre = $request->nombre;
    	$carrera->descripcion = $request->descripcion;
    	$carrera->save();
    	Flash::overlay('Carrera ' . $carrera->nombre .' actualizada con exito');
    	Flash::success('Carrera ' . $carrera->nombre .' actualizada con exito');
    	return redirect()->route('carreras.index');
    }

    public function destroy($id){
    	$carrera = carrera::find($id);
    	$carrera->delete();
    	Flash::warning('La carrera ' .$carrera->nombre . ' a sido eliminado de forma exitosa');
    	return redirect()->route('carreras.index');
    }

}
