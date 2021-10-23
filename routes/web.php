<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Skill;
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
    //dd() es como un vardump()
    return view('hola');
});

Route::get('adios', function(){
    return view('adios');
});

Route::get('/portfolio/{slug}', function($slug){

    $user = User::with('skill')->with('education')->with('aboutme')->with('whatido')->with('featureproyect')->with('professionalskills')->where('slug', $slug)->first();

    //dd($user);

    if($user){
        return view('portfolio')->with('user', $user);
    }else{
        return view('welcome');
    }


});

Route::get('/portfolio', function(){

    $user = User::with('skill')->with('education')->with('aboutme')->with('whatido')->with('featureproyect')->with('professionalskills')->latest()->get();
    //$skill = Skill::latest()->get();

    //dd($user);
    //return view('portfolio', compact('user', 'skill'));
    return view('portfolio')->with('user', $user[0]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
