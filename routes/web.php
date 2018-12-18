<?php

//use GuzzleHttp\Client;

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

Route::get('/vercitas', function () {
    return view('vercitas');
});

Route::get('/vercomentarios', function () {
    return view('vercomentarios');
});

Route::get('/vergrupos', function () {
    return view('vergrupos');
});

Route::get('/verreflexion', function () {
    return view('verreflexion');
});
Route::get('/vertemas', function () {
    return view('vertemas');
});





Route::resource('/grupo1', 'GrupoController');
Route::get('/eliminagrupo/{id}', 'GrupoController@borrar'); 
Route::get('/eliminaCom/{id}', 'ComentController@borrar');  //listo
Route::resource('/comentario1', 'ComentController@borrar');
Route::get('/elimina/{id}', 'RespController@borrar');       // listo
Route::resource('/respuesta1', 'RespController');
Route::get('/elimina123/{id}', 'PregController@borrar');
Route::resource('/pregunta1', 'PregController');

Route::resource('temaa', 'TemaController');
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


/*
* rutas api 
*/
//rutas tecnicas
Route::get('/tecnicas', 'TecnicaController@showall');
//Route::get('/tecnicasshow', 'TecnicaController@show');
Route::get('/tecnicas/{id}', 'TecnicaController@show');

Route::get('/tecnicasadd', 'TecnicaController@add');
Route::get('/tecnicasupdate/{id}', 'TecnicaController@update');
Route::get('/tecnicasdelete/{id}', 'TecnicaController@delete');


//rutas ejemplo foro
Route::get('/addforo', 'EjForoApiController@addforo');

//rutas tema
Route::get('/temas', 'TemaController@showall');
Route::get('/tema/{id}', 'TemaController@show');
//Route::get('/temaupdate/{id}', 'TemaController@update');
Route::get('/temadelete/{id}', 'TemaController@delete');
Route::get('/temaeli/{id}', 'TemaController@borrar');
Route::resource('/tema1', 'TemaController');


//rutas Usuarios
Route::get('/usuarios', 'ApiUsuarioController@alluser');
Route::get('/usuarios/{id}', 'ApiUsuarioController@finduser');

Route::get('/foros', 'ForoController@index');
Route::get('/foros/{$id}', 'ForoController@show');

