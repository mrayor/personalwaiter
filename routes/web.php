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


/*

old laravel authentication

//Authentication routes
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration Route
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');*/

//pages route

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('career', 'PagesController@career');
Route::get('contact', 'ContactsController@show');
Route::post('contact', 'ContactsController@mail');
//blog routes

Route::get('blog', 'PagesController@blog');
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogsController@single'])->where('slug', '[\w\d\-\_]+');

//Route::get('single','PagesController@single');  

// Posts controller route
Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
