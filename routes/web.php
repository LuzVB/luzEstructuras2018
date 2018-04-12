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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/idex', function () {
    return view('index');
});


Route::post('formulario','formularioController@formulario');

Route::get('/form', function () {
    return view('formulario');
});

Route::post('lista','ListaController@Lista');

Route::get('/lista', function () {
    return view('formLista');
});
*/

Route::get('/', function () {
    return view('master2');
});

Route::get('/pedirDatos', function () {
    return view('parqueadero/pedirDatos');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/mal', function () {
    return view('malIngreso');
});


Route::post('datos','parqueaderoController@datos');
Route::post('salida','parqueaderoController@salida');
Route::post('crearUsuario','formRegistroController@crearUsuario');
Route::post('iniciar','formRegistroController@iniciar');


