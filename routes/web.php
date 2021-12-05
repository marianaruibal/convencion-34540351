<?php

use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatidoController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Skill;
use Spatie\Permission\Models\Role;

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

    $user = User::with('skill')->with('education')->with('whatido')->with('featureproyect')->with('professionalskill')->with('workexperience')->with('featuredpost')->with('socialmedia')->with('aboutme')->where('slug', $slug)->first();

    //dd($user);

    if($user){
        return view('portfolio')->with('user', $user);
    }else{
        return view('welcome');
    }

});


Route::get('logout-user', UserController::class.'@logout_user')->name('logout-user');

Route::group(['middleware'=> ['auth:sanctum', 'verified']], function (){
    Route::group(['middleware' => ['role:admin']], function(){

        Route::get('dashboard', function (){
           return view('admin.dashboard');
        })->name('dashboard');


        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);
    });

    Route::group(['middleware' => ['role:client']], function(){

        Route::get('my-portfolio', UserController::class.'@my_portfolio')->name('my-portfolio');

        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('social', SocialMediaController::class)->except([
            'show'
        ]);

        //Route::get('/User/hola', 'UserController@hola');

        Route::put('updateAbout', UserController::class.'@updateAbout')->name('updateAbout');

        Route::put('updateSkill', SkillController::class.'@updateSkill')->name('updateSkill');

        Route::delete('destroyClient', SkillController::class.'@destroyClient')->name('destroyClient');

        Route::post('storeClient', SkillController::class.'@storeClient')->name('storeClient');

        Route::put('updateWhat', WhatidoController::class.'@updateWhat')->name('updateWhat');

        Route::post('storeWhat', WhatidoController::class.'@storeWhat')->name('storeWhat');

        Route::delete('destroyWhat', WhatidoController::class.'@destroyWhat')->name('destroyWhat');

        Route::post('storeTitle', UserController::class.'@storeTitle')->name('storeTitle');

    });
});



