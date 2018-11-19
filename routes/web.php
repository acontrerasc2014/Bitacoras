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
    return view('welcome2');
});

Route::get('/welcomeanterior', function () {
    return view('welcome');
});
Route::get('/bitacorasgrupales', function () {
    return view('homebitacoras');
});

Route::resource('comentario', 'ComentController');
Route::resource('pregunta', 'PregController');
Route::resource('respuesta', 'RespController');
Route::resource('reflexion', 'ReflexController');
Route::resource('tema', 'TemaController');
Route::resource('grupo', 'GrupoController');
Route::resource('cita', 'CitaController');
Route::get('semanas/{tema?}', "semcontroller@semana")->name("trabajos");