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

use App\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
//    $user = request()->user();
//    $user->profile()->firstOrCreate(['user_id'=> $user->id],['phone'=> 'xxx']);
//    dd($user->profile);

//     $profile = \App\Profile::find(3);
//     if(!$profile->isEmpty){
//         dd($profile->user);
//     }


//    User::create([
//        'name'=> 'cat',
//        'email'=> 'cat@mail.com',
//        'password'=> bcrypt('coding10')
//    ]);
//
//    User::create([
//        'name'=> 'dog',
//        'email'=> 'dog@mail.com',
//        'password'=> bcrypt('coding10')
//    ]);

});

Route::get('bind', function (){
    $user = auth()->loginUsingId(1);

    #绑定方式1
//    $user->posts()->createMany([
//        [
//            'title'=> 'hello Coding10'
//        ],
//        [
//            'title'=> 'hello Coding11'
//        ]
//    ]);


    #绑定方式2
    $user->posts()->saveMany([
        new \App\Post(['title'=> 'www.confing-1']),
        new \App\Post(['title'=> 'www.confing-2']),
    ]);
    dd($user->posts);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
