<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Carrera;
use App\Carrera_materia;
use App\Materia;
use Laracasts\Flash\Flash;
use DB;

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

    public function relacion($id){
        $carrera = Carrera::find($id);
        //$carrera_materia = Carrera_materia::nom_materias($id);
        $carrera_materia = DB::table('carreras_materias')->
        where('carrera_id',"=",$id)->join('materias','materias.id','=', 'carreras_materias.materia_id')->get();
        //dd($carrera_materia);
        $materia = Materia::all();

        $mat_disponibles = array();
        foreach ($materia as $m) {
            $tmp = false;
            foreach ($carrera_materia as $cm) {   
                if($m->nombre==$cm->nombre){
                    $tmp = true;
                    break;        
                }
            }
            if ($tmp != true){
                array_push($mat_disponibles, $m );    
            }
        }
        //dd($mat_disponibles);
        return view('carrera.relacion')->with('carrera_materia',$carrera_materia)->with('materia_disponibles',$mat_disponibles);
    }

    public function pdf(){
        $carreras=Carrera::all();
        return view('carrera.pdf2')->with('carreras',$carreras);
    }

    public function actrelacion(){
        echo "FAIL";
    }

    public function hola(Request $request)
    {
        if ($request->isMethod('post')){    
            $todosValores = $request->all();
            $ids = $todosValores['ids'];
            $idsArray = json_decode($ids, true);
            echo $idsArray[1]['idCarrera'];
            return response()->json(['response' => $ids]); 
        }
    }

}
