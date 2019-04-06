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

Route::get('/home', 'HomeController@index')->name('home');


// PostController

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/add', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostController@delete')->name('posts.delete');
Route::get('/postsByAdmin', 'PostController@postsAdmin')->name('posts.indexAdmin');



// CategroyController

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/add', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{id}', 'CategoryController@delete')->name('categories.delete');

Route::get('dashboard', 'CategoryController@admin')->name('admin');


// UserController

Route::get('/', 'UserController@index');
Route::get('category/{id}', 'UserController@category')->name('category');
Route::get('users/{id}', function ($id) {
    
});
Route::get('/mm', 'UserController@mess');
