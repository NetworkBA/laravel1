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


Route::get('/ismael', function () {
    return ('Bienvenidx, ismael.');
});


Route::get('/productos', function () {
    return ('Listado de productos.');
});


Route::post('/productos/(id)', function ($id) {
    return ('Almacenado de productos.'. $id);
});

Route::put('/productos/{id}', function ($id) {
    return ('Actualizando producto.'. $id);
});



Route::get('/productos2/{id}', function ($id) {
    return ('Actualizando producto.'. $id);
})->where ('id','[0-9]+');


//Ruta con parametros opcionales
Route::get('/saludo/{name}/{nickname}', function ($name,$nickname = null) {
  //Poner la primera letra en mayuscula
  $name = ucfirst($name);

  if($nickname){
    return "Bienvenido {$name}, tu nickname es {$nickname}";
  }else {
    return "Bienvenido {$name}";
  }
});
