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
//Route::resource('rutaResource','controlCrud');
Route::resource('rutaControlCrud','controlCrud');


Route::get('/ruta1', function () {
    return view('inicio');
})->name('GET','profile');



Route::get('/', function () {
  //  return redirect()->route('/rutaControlCrud/{perrito}');
});

Route::get('rutaInsertar','contrCrud@insertar');
Route::get('rutaMostrar','contrCrud@mostrar');


Route::get('/prueba', function () {
     return 'entraste';
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
