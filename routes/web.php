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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/inicio', function(){
    return view('admin.dashboard');
});
Route::resource('estado_habitacion', 'EstadoHabitacionController');
Route::resource('tipo_habitacion', 'TipoHabitacionController');
Route::resource('habitacion', 'HabitacionController');
Route::resource('reserva', 'ReservaController');
//Route::resource('recibo', 'ReciboController');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');