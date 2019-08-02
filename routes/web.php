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
 });
 Route::get('/operacion/economico/{id}','operacionController@economico')->name('economico');
Route::get('/operacion/prorroga/{id}','operacionController@prorroga')->name('prorroga');
Route::get('/operacion/reincorporacion/{id}','operacionController@reincorporacion')->name('reincorporacion');
Route::get('/operacion/becas/{id}','operacionController@becas')->name('becas');
Route::get('/operacion/psicologico/{id}','operacionController@psicologico')->name('psicologico');
Route::get('/operacion/tutoriaConsejeria/{id}','operacionController@tutoriaConsejeria')->name('tutoriaConsejeria');
Route::get('/operacion/medico/{id}','operacionController@medico')->name('medico');
Route::resource('bienestar','bienestarController');
Route::resource('usuario','usuarioController');
//Route::resource('usuario','usuarioController');
Route::resource('alumno','alumnoController');
Route::resource('carreraProfesional','carreraProfesionalController');
Route::resource('operacion','operacionController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/login', 'AdminLoginController@showLoginForm');
Route::post('admin/login', 'AdminLoginController@login')->name('admin.login');
Route::group(['prefix' => 'admin','middleware' => 'assign.guard:admin,admin/login'],function(){	
	Route::get('home',function ()
	{
		return view('admin/home');
	});
});

