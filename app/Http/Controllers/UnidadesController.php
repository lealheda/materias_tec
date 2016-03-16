<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Unidad;
use Laracasts\Flash\Flash;

class UnidadesController extends Controller
{
    public function create(){
    	return view('unidad.registro');
    }

	public function index(){
		$unidades = unidad::orderBy('nombre','ASC')->paginate(5);
    	return view('unidad.index')->with('unidades',$unidades);
    }    

    public function store(Request $request){
    	$unidad = new unidad($request->all());
    	$unidad -> activo = 1;
    	$unidad -> user_id = 1;
    	$unidad -> save();
    	Flash::overlay('unidad ' . $unidad->nombre .' registrada con exito');
    	Flash::success('unidad ' . $unidad->nombre .' registrada con exito');
    	return redirect()->route('unidades.index');
    	//return redirect()->action('unidadsController@index');
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
    	$unidad->delete();
    	Flash::warning('La unidad ' .$unidad->nombre . ' a sido eliminado de forma exitosa');
    	return redirect()->route('unidades.index');
    }

}
