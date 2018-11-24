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

Route::get('/editarTema', function () {
    return view('editartema');
});

Route::get('/editarGrupo', function () {
    return view('editargrupo');
});

Route::get('/verpreguntasrespuestas', function () {
    return view('verpreguntasrespuestas');
});

Route::get('/vercomentarios', function () {
    return view('vercomentarios');
});

Route::get('/vergrupos', function () {
    return view('vergrupos');
});

Route::resource('comentario', 'ComentController');
Route::resource('pregunta', 'PregController');
Route::resource('respuesta', 'RespController');
Route::resource('reflexion', 'ReflexController');
Route::resource('tema', 'TemaController');
Route::resource('temaedit', 'TemaEditController');
Route::resource('grupo', 'GrupoController');
Route::resource('grupoedit', 'GrupoEditController');
Route::resource('cita', 'CitaController');
Route::get('semanas/{tema?}', "semcontroller@semana")->name("trabajos");

