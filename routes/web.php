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

/*
Route::get('/', function () {

    for($i=1; $i<=App\User::count(); $i++){

    $user = App\User::findOrFail($i);

    return $user->materias->where('nombre', 'Programacion I')->first();

    }

    //$user->materias()->attach(1);

   // $materia = App\Materia::findOrFail(2);

    //return $materia->users;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('materias', 'MateriaController');

Route::resource('notas', 'NotasController');

Route::resource('users', 'UsersController');

Route::resource('cargarNotas', 'CargarNotasController');

Route::resource('misMaterias', 'MisMateriasController');



