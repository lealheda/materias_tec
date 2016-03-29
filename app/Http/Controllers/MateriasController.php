<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materia;
use App\Materia_unidad;
use App\Unidad;
use Laracasts\Flash\Flash;

class MateriasController extends Controller
{
    public function create(){
    	return view('materia.registro');
    }

	public function index(){
		$materias = materia::orderBy('nombre','ASC')->paginate(5);
    	return view('materia.index')->with('materias',$materias);
    }    

    public function store(Request $request){
    	$materia = new materia($request->all());
    	$materia -> activo = 1;
    	$materia -> user_id = 1;
    	$materia -> save();
    	Flash::overlay('materia ' . $materia->nombre .' registrada con exito');
    	Flash::success('materia ' . $materia->nombre .' registrada con exito');
    	return redirect()->route('materias.index');
    	//return redirect()->action('materiasController@index');
    }

    public function edit($id){
    	$materia = materia::find($id);
    	return view('materia.edit')->with('materia',$materia);
    }

    public function update(Request $request, $id){
    	$materia = materia::find($id);
    	$materia->nombre = $request->nombre;
    	$materia->save();
    	Flash::overlay('materia ' . $materia->nombre .' actualizada con exito');
    	Flash::success('materia ' . $materia->nombre .' actualizada con exito');
    	return redirect()->route('materias.index');
    }

    public function destroy($id){
    	$materia = materia::find($id);
    	$materia->delete();
    	Flash::warning('La materia ' .$materia->nombre . ' a sido eliminado de forma exitosa');
    	return redirect()->route('materias.index');
    }

    public function relacion($id){
        $materia = Materia::find($id);
        $materia_unidad = Materia_unidad::where('materia_id',$id)->get(['materia_id', 'unidad_id']);
        //dd($carrera_materia);
        //$materia = Materia::where('id', $carrera_materia->materia_id);
        return view('materia.relacion')->with('materia',$materia)->with('materia_unidad',$materia_unidad);
    }

}
