<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Unidad;
use App\Materia;
use Laracasts\Flash\Flash;
use DB;

class UnidadesController extends Controller
{
    public function create(){
        
    }

    public function nueva($id){
        $materia_id = $id;
        return view('unidad.registro')->with('materia_id',$materia_id);
    }

	public function index(){
		$unidades = unidad::orderBy('nombre','ASC')->paginate(5);
    	return view('unidad.index')->with('unidades',$unidades);
    }    

    public function store(Request $request){
        $materia_id = $request->materia_id;
    	$unidad = new unidad($request->all());
    	$unidad -> activo = 1;
    	$unidad -> user_id = 1;
    	$unidad -> save();
    	Flash::success('unidad ' . $unidad->nombre .' registrada con exito');
    	$materia = Materia::find($materia_id);
        $unidades = DB::table('unidades')->where('materia_id',"=",$materia_id)->get();
        return view('materia.unidades')->with('materia',$materia)->with('unidades',$unidades);
    }

    public function edit($id){
    	$unidad = unidad::find($id);
    	return view('unidad.edit')->with('unidad',$unidad);
    }

    public function update(Request $request, $id){
    	$unidad = unidad::find($id);
    	$unidad->nombre = $request->nombre;
    	$unidad->save();
    	Flash::overlay('unidad ' . $unidad->nombre .' actualizada con exito');
    	Flash::success('unidad ' . $unidad->nombre .' actualizada con exito');
    	return redirect()->route('unidades.index');
    }

    public function destroy($id){
    	$unidad = unidad::find($id);
        $materia_id = $unidad->materia_id;
    	$unidad->delete();
    	Flash::warning('La unidad ' .$unidad->nombre . ' a sido eliminado de forma exitosa');
    	$materia = Materia::find($materia_id);
        $unidades = DB::table('unidades')->where('materia_id',"=",$materia->id)->get();
        return view('materia.unidades')->with('materia',$materia)->with('unidades',$unidades);
    }

}
