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

//Route::resource('/users', 'UserController');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'UserController@update')->name('users.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/{user}', 'UserController@show')->name('users.show');

Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles', 'ArticleController@store')->name('articles.store');
Route::get('/articles/{user}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('/articles/{user}', 'ArticleController@update')->name('articles.update');
Route::delete('/articles/{user}', 'ArticleController@destroy')->name('articles.destroy');
Route::get('/articles/{user}', 'ArticleController@show')->name('articles.show');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{user}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('/categories/{user}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{user}', 'CategoryController@destroy')->name('categories.destroy');
Route::get('/categories/{user}', 'CategoryController@show')->name('categories.show');

// authentication
Route::get('/login', 'AuthController@loginForm')->name('auth.login-form');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');


