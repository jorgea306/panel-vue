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

Route::get('/notas', function () {
    return view('panel/nota');
})->name('nota');
Auth::routes();

Route::get('/principal', 'PrincipalController@leer')->name('principal');

Route::get('/home', 'HomeController@index')->name('home');


/*
-----------------------------Notas-----------------------------------------
-----------------------------------------------------------------------------
*/

Route::get('/nota', 'NotaController@index');

Route::put('nota/actualizar', 'NotaController@update');

Route::post('nota/guardar', 'NotaController@store');

Route::delete('nota/borrar/{id}', 'NotaController@destroy');

Route::get('nota/buscar', 'NotaController@show');
