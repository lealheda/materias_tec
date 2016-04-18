<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materia;
use App\Unidad;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Input;
use DB;

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
        $id_materia = $materia->id;
        $todosValores = $request->all();
        $unidad = $todosValores['unidad'];
        $descripcion = $todosValores['descripcion'];
        $tmp = 0;
        foreach ($unidad as $uni) {
            $nunidad = new unidad();
            $nunidad->nombre=$uni;
            $nunidad->descripcion=$descripcion[$tmp];
            $nunidad->activo=1;
            $nunidad->user_id=1;
            $nunidad->materia_id=$id_materia;
            $nunidad->save();
            $tmp++;
        }
    	Flash::overlay('materia ' . $materia->nombre .' registrada con exito');
    	Flash::success('materia ' . $materia->nombre .' registrada con exito');
    	return redirect()->route('materias.index');
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
        $unidades = DB::table('unidades')->where('materia_id',"=",$id)->get();
        return view('materia.unidades')->with('materia',$materia)->with('unidades',$unidades);
    }

}
