<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesentill
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('litros',function(){
    return "Buenos ";
});

Route ::get('/autos','AutoController@indice');

Route::get('/autos/{placa}',function(){
    return view('autoView') ;
})->where('placa','[a-zA-Z][a-zA-Z][0-9][0-9][0-9]');

Route::get('/autos/{placa?}',function($placa =null){
    return view('autoView') ;
})->where('placa','[a-zA-Z][a-zA-Z][0-9][0-9][0-9]');


Route::group(['prefix' => 'propietarios','PropietarioController@indice'],function(){

    Route:: get('identidad','PropietarioController@ver');

    Route:: get('editar','PropietarioController@editar');

});


Route:: get('/',function(){
    return view('tabla')->with([
        "enfermos" => [
            "El Paraiso",
            "Moroceli",
            "Danli","el pescadero el centro"
        ],
        "titulo" => "Paciente"
    ]);;

});


