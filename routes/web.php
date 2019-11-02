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


Route::get('/colegio', 'ColegioController@index')->name('colegio');


Route::resource('colegio/grado', 'GradoController');
Route::resource('colegio/seccion', 'SeccionController');
Route::resource('colegio/nivel', 'NivelController');
Route::resource('colegio/anio', 'AnioController');

Route::get('/cancelar_anio', function () {
    return redirect()->route('anio.index')->with('cancelar_anio','Acción Cancelada');
})->name('cancelar_anio');

Route::get('colegio/anio/{id}/confirm','AnioController@confirm')->name('anio.confirm');


Route::get('/cancelar_grado', function () {
    return redirect()->route('grado.index')->with('cancelar_grado','Acción Cancelada');
})->name('cancelar_grado');

Route::get('colegio/grado/{id}/confirm','GradoController@confirm')->name('grado.confirm');


Route::get('/cancelar_seccion', function () {
    return redirect()->route('seccion.index')->with('cancelar_seccion','Acción Cancelada');
})->name('cancelar_seccion');

Route::get('colegio/seccion/{id}/confirm','SeccionController@confirm')->name('seccion.confirm');


Route::get('/cancelar_nivel', function () {
    return redirect()->route('nivel.index')->with('cancelar_nivel','Acción Cancelada');
})->name('cancelar_nivel');

Route::get('colegio/nivel/{id}/confirm','NivelController@confirm')->name('nivel.confirm');

Route::get('/anio_index', function () {
    return redirect()->route('anio.index');
})->name('anio_index');

Route::get('/grado_index', function () {
    return redirect()->route('grado.index');
})->name('grado_index');

Route::get('/seccion_index', function () {
    return redirect()->route('seccion.index');
})->name('seccion_index');

Route::get('/nivel_index', function () {
    return redirect()->route('nivel.index');
})->name('nivel_index');
