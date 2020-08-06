<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//FILM
Route::get('/admin/film/index', 'Admin\Film\FilmController@index');
Route::get('/admin/film/category', 'Admin\Film\CategoryController@getAllCategory');
Route::get('/film/category/{id}', 'Admin\Film\CategoryController@getId');
Route::get('/film/detail/{id}', 'Admin\Film\FilmController@detail');

// REGISTER
Route::post('/auth/register', 'Auth\RegisterController@register');

// LOGIN
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/profile', 'Auth\LoginController@getProfile');

// IMAGE
Route::get('/image/category', 'Admin\Image\CategoryController@getAllCategory');
Route::get('/image/category/{id}', 'Admin\Image\CategoryController@getId');
Route::get('/image/detail/{id}', 'Admin\Image\ImageController@detail');


// NEW
Route::get('/new/category', 'Admin\News\CategoryController@getAllCategory');
Route::get('/new/category/{id}', 'Admin\News\CategoryController@getId');
Route::get('/new/detail/{id}','Admin\News\NewController@detail');



// VIDEO
Route::get('/video/category', 'Admin\Video\CategoryController@getAllCategory');
Route::get('/video/category/{id}', 'Admin\Video\CategoryController@getId');
Route::get('/video/detail/{id}', 'Admin\Video\VideoController@detail');


