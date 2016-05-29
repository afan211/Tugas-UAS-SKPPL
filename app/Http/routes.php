<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('category', CategoriesController::class);
    Route::resource('comment', CommentsController::class);
    Route::resource('image', ImagesController::class);
    Route::resource('page', PagesController::class);
    Route::resource('post', PostsController::class);
    Route::resource('tag', TagsController::class);
    Route::resource('user', UsersController::class);
});


