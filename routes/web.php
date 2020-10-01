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


/*
Ruta para acceder ala pagina principal
*/
Route::get('/', 'maritalstatuscontroller@index');

/*
Ruta para acceder al formulario
*/
Route::get('form', function () {
    return view('form');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('complaints','ComplaintController');

/*


/*
Ruta para acceder al formulario de la denuncia
*/
Route::get('formulario', function () {
    return view('complaintoptions.form');
});

/*
Ruta para registrar la denuncia
*/
Route::resource('complaint','ComplaintController');


