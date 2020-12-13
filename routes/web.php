<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/holaMundo', function () {
    return view('hola');
});

Route::get('/laSuma', function () {
    return view('suma');
});

Route::get('/laResta', function () {
    return view('resta');
});

Route::get('/compara', function () {
    return view('comp');
});

/*-------------------- PRÁCTICA 02 -------------------------------------------------*/

Route::get('/1.1', function () {
    return view('areaTrapecio');
});

Route::get('/1.3', function() {
    return view('volumenCono');
});

Route::get('/1.5', function() {
    return view('circunferencia');
});

Route::get('/2.02', function() {
    return view('sueldoSemanal');
});

Route::get('/2.03', function() {
    return view('SanValentin');
});

Route::get('/2.04', function() {
    return view('estacionamiento');
});

Route::get('/3.01', function() {
    return view('salario');
});

Route::get('/3.02', function() {
    return view('cero');
});

Route::get('/3.04', function() {
    return view('calificaciones');
});

/*---------------- Templates --------------*/

Route::get('/arteConceptual', function() {
    return view('archivo');
});

Route::get('/home', function() {
    return view('archivo3');
});


/*------------- Ejercicios ------------ */

Route::get('/s1.1/{altura?}/{ladoA?}/{ladoB?}', [
    'uses' => 'EstructurasdeControl@areaTrapecio',
    'as' => 'areaTrapecio'
]);

Route::get('/s1.2/{lado?}', [
    'uses' => 'EstructurasdeControl@apotemaCuadrado',
    'as' => 'apotemaCuadrado'
]);

Route::get('/s1.3/{altura?}/{radio?}', [
    'uses' => 'EstructurasdeControl@volumenCono',
    'as' => 'volumenCono'
]);

Route::get('/s1.4/{altura?}/{base?}', [
    'uses' => 'EstructurasdeControl@areaTriangulo',
    'as' => 'areaTriangulo'
]);

Route::get('/s1.5/{radio?}', [
    'uses' => 'EstructurasdeControl@circunferencia',
    'as' => 'circunferencia'
]);

//--------------------------------//

Route::get('/d2.1', [
    'uses' => 'EstructurasdeControl@edadVotar',
    'as' => 'edadVotar'
]);

Route::get('/d2.2', [
    'uses' => 'EstructurasdeControl@sueldoSemanal',
    'as' => 'sueldoSemanal'
]);

Route::get('/d2.3', [
    'uses' => 'EstructurasdeControl@sanValentin',
    'as' => 'sanValentin'
]);

Route::get('/d2.4', [
    'uses' => 'EstructurasdeControl@estacionamiento',
    'as' => 'estacionamiento'
]);

Route::get('/d2.5', [
    'uses' => 'EstructurasdeControl@calificacion',
    'as' => 'calificacion'
]);

//--------------------------------//

Route::get('/c3.1', [
    'uses' => 'EstructurasdeControl@salarioAnual',
    'as' => 'salarioAnual'
]);

Route::get('/c3.2', [
    'uses' => 'EstructurasdeControl@cero',
    'as' => 'cero'
]);

Route::get('/c3.3', [
    'uses' => 'EstructurasdeControl@cajaRegistradora',
    'as' => 'cajaRegistradora'
]);

Route::get('/c3.4', [
    'uses' => 'EstructurasdeControl@aprobados',
    'as' => 'aprobados'
]);

Route::get('/c3.5', [
    'uses' => 'EstructurasdeControl@tablaMultiplicar',
    'as' => 'tablaMultiplicar'
]);

//--**--**--**--// RUTAS CRUD

Route::get('/show', 'Crud@index');
Route::get();
Route::get();

