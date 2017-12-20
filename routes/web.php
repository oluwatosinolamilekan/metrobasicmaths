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


Route::get('/', 'PostsController@index');
Route::get('about','PostsController@about');
Route::get('profile', 'UsersController@profile');


Route::get('/post/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('posts/{{post}}/comments','CommentsController@store');
Route::get('/getpin', 'PinsController@getpin');
Route::get('asume','GeneratesController@asume');

Route::get('/makeadmin', 'UsersController@role');

Route::get('/generate', 'GeneratesController@generate');
Route::get('/enterpin', 'GeneratesController@enterpin');

Route::get('login','UsersController@login');
Route::get('signup','UsersController@signup');
Route::post('signup','UsersController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
