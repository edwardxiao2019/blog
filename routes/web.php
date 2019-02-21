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

use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\LoginController;

Route::get('/', 'IndexController@index');

Route::post('/login','LoginController@login');

Route::get('/login','LoginController@index')->name('login');

Route::group(['middleware'=> 'auth:web'],function (){

    Route::get('/logout','LoginController@logout');

    // add
    Route::get('/posts/create','PostController@create');
    Route::post('/posts','PostController@store');

    //edit
    Route::get('/posts/edit/{post}','\App\Http\Controllers\PostController@edit');
    Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');
    //delete
    Route::get('/posts/delete/{post}','\App\Http\Controllers\PostController@delete');

});


//detail page
Route::get('/posts/{post}','PostController@show');

