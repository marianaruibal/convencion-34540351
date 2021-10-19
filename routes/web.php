<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::view('/', 'welcome');

Route::get('hola', function(){
    //$users = User::get()->all();

   /* $users = User::where('name', 'Ms. Constance Boehm II')->get();
    dd($users[0]->name);*/
    return view('hola');
});

Route::get('adios', function(){
    return view('adios');
});

Route::get('/portfolio', function(){
    $users = User::get();
    return view('portfolio')->with('users', $users);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
