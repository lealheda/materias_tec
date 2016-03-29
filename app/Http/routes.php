<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('template.home');
});

Route::get('/about', function () {
    return view('template.about');
});

Route::get('/contacto', function () {
    return view('template.contacto');
});

Route::get('/login', function () {
    return view('template.login');
});

Route::get('/registro', function () {
    return view('template.registro');
});

Route::group([], function(){
    Route::resource('carreras','CarrerasController');
    Route::get('carreras/{id}/destroy',[
    	'uses' => 'CarrerasController@destroy',
    	'as' => 'carreras.destroy'
    	]);
    Route::get('carreras/{id}/relacion',[
        'uses' => 'CarrerasController@relacion',
        'as' => 'carreras.relacion'
        ]);
});

Route::group([], function(){
    Route::resource('materias','MateriasController');
    Route::get('materias/{id}/destroy',[
        'uses' => 'MateriasController@destroy',
        'as' => 'materias.destroy'
        ]);
    Route::get('materias/{id}/relacion',[
        'uses' => 'MateriasController@relacion',
        'as' => 'materias.relacion'
    ]);
});

Route::group([], function(){
    Route::resource('unidades','UnidadesController');
    Route::get('unidades/{id}/destroy',[
        'uses' => 'UnidadesController@destroy',
        'as' => 'unidades.destroy'
        ]);
});

    
Route::get('pdf', 'PdfController@invoice');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
