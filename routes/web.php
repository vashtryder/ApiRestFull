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

Route::get('/colegio', function () {
    return view('index');
});

Route::resource('colegio/grado', 'GradoController');
Route::resource('colegio/seccion', 'SeccionController');
Route::resource('colegio/nivel', 'NivelController');
Route::resource('colegio/anio', 'AnioController');

Route::get('/cancelar_anio', function () {
    return redirect()->route('anio.index')->with('cancelar_anio','Acción Cancelada');
})->name('cancelar_anio');

Route::get('colegio/anio/{id}/confirm','AnioController@confirm')->name('anio.confirm');
