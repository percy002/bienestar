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

Route::resource('bienestar','bienestarController');
Route::resource('usuario','usuarioController');
//Route::resource('usuario','usuarioController');
Route::resource('alumno','alumnoController');
Route::resource('carreraProfesional','carreraProfesionalController');
Route::resource('operacion','operacionController');