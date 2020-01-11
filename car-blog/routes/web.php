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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/adminDashboard', 'HomeController@dashboard')->name('adminDashboard')->middleware('can:isAdmin');

Route::get('/account', function(){
    return view('account');
});

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::get('/export', 'ProfilesController@export');


Route::post('/post', 'PostsController@store')->name('post.create');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::get('/post/{post}/edit', 'PostsController@edit')->name('post.edit');
Route::patch('/post/{post}', 'PostsController@update')->name('post.update');
Route::delete('/post/{post}', 'PostsController@destroy')->name('post.destroy');
Route::get('/pdf', 'PostsController@pdf');
