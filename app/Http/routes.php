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
});

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
