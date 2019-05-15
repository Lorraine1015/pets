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
Route::get('pets/registro', 'UsersController@index')->name('users.register');

Route::post('pets', 'UsersController@store')->name('pets.store');

Route::get('perfil', 'UsersController@profile')->middleware('auth')
->name('pets.profile');

Route::get('cerrar-sesion', 'UsersController@logout')->name('pets.logout');

Route::get('iniciar-sesion', 'UsersController@login')->name('login');


Route::post('iniciar-sesion', 'UsersController@authenticate')->name('users.authenticate');
