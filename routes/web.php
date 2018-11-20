<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = 'muñoz'){

	return 'hola soy '.$name.' '. $lastname;
});

Route::get('/mi_primera_ruta',function(){

	return 'hola prros';
});

Route::get('/busqueda_artista','PruebaController@prueba');
Route::get('/musica','PruebaController@music');

Route::resource('artistas','ArtistasController');

Route::post('artistas','ArtistasController@busqueda')->name('buscar');

