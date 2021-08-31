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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {

      return view('welcome');
});

Route::get('hola', function() {

    return view('hola');
});

Route::get('adios', function() {

    return view('adios');
});

// Route::get('hola/{name}', function($name){
//     return '<h1>Hola '. $name . '</h1>';
// });

// Se puede agregar codigo html
