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
    return redirect('home');
});
Route::resource('equipo', 'EquiposController');
Route::resource('usuario', 'UsuariosController');
Route::resource('prestamo','PrestamosController');
Route::resource('monitor','MonitorsController');
Route::resource('categoria','CategoriasController');
Route::resource('devolucion','DevolucionsController');
Route::resource('detalleprestamo','DetallesPrestamosController');
Route::get('tablas', ['as' => 'tablas', 'uses' => 'Tablas@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
