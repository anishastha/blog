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
Route::resource('courses','CourseController');
Route::resource('signup','SignupController');

Route::get('about', 'PagesController@getabout');

Route::resource('contact', 'ContactController');



Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
