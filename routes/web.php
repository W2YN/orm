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


Route::get('/test', function () {
//    $user = request()->user();
//    $user->profile()->firstOrCreate(['user_id'=> $user->id],['phone'=> 'xxx']);
//    dd($user->profile);

     $profile = \App\Profile::find(3);
     if(!$profile->isEmpty){
         dd($profile->user);
     }



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
