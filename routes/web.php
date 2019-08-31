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
     return view('index22');
 })->name('/');
Route::post('/operacion/economico/{id}','operacionController@economico')->name('economico');
Route::post('/operacion/prorroga/{id}','operacionController@prorroga')->name('prorroga');
Route::post('/operacion/reincorporacion/{id}','operacionController@reincorporacion')->name('reincorporacion');
Route::post('/operacion/becas/{id}','operacionController@becas')->name('becas');
Route::post('/operacion/psicologico/{id}','operacionController@psicologico')->name('psicologico');
Route::post('/operacion/tutoriaConsejeria/{id}','operacionController@tutoriaConsejeria')->name('tutoriaConsejeria');
Route::post('/operacion/medico/{id}','operacionController@medico')->name('medico');
route::get('/reportes/{idRol}','usuarioController@reportes')->name('reportes');
route::get('/reporteAlumno/{idAlumno}/{idOperacionBienestar}','usuarioController@reporteXalumno')->name('reporteXalumno');
Route::resource('bienestar','bienestarController');
Route::get('/imprimirReporteAlumnos/{idRoles}','usuarioController@reporteAlumnos')->name('imprimirAlumnos');
Route::get('/imprimirReporteAlumno/{idAlumno}/{idOperacionBienestar}','usuarioController@imprimirReporteXalumno')->name('imprimirReporteAlumno');
Route::resource('usuario','usuarioController');
//Route::resource('usuario','usuarioController');
Route::resource('alumno','alumnoController');
Route::resource('carreraProfesional','carreraProfesionalController');
Route::resource('operacion','operacionController');

Route::resource('administrador','administradorController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




