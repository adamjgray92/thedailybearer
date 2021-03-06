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

Route::get('/', 'ArticleController@index')->name('home');
Route::get('/news/{id}/{slug}', 'ArticleController@show')->name('news.show');

Route::get('/tags/{name?}', 'TagController@index')->where('name', '[A-Za-z0-9]+')->name('tag');

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function(){
    Route::group(['as' => 'tags.', 'prefix' => 'tags'], function(){
        Route::get('/add', 'TagController@create')->name('add');
    });
});

Route::group(['as' => 'authors.', 'prefix' => 'authors'], function(){
    Route::get('/{$name}', 'AuthorController@index')->name('profile');
});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
