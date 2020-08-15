<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\checkLogin;
Route::get('/', function () {
    return view('welcome');
});

// ADMIN

Route::get('/admin/dashboard', 'Admin\DashboardController@index');


// REGISTER
Route::get('/auth/register', 'Auth\RegisterController@index')->name("auth.register");
Route::post('/auth/register', 'Auth\RegisterController@register');


// FILM
Route::get('/admin/film/create', 'Admin\Film\FilmController@create');
Route::get('/admin/film/index', 'Admin\Film\FilmController@index');
Route::post('/admin/film/store', 'Admin\Film\FilmController@store');

Route::get('/admin/film', 'Admin\Film\FilmController@indexs');
Route::delete('/admin/film/{id}', 'Admin\Film\FilmController@destroy');
Route::get('/admin/film/{id}/edit', 'Admin\Film\FilmController@edit');
Route::patch('/admin/film/{id}', 'Admin\Film\FilmController@update');



// VIDEO
Route::get('/admin/video/create', 'Admin\Video\VideoController@create');
Route::post('/admin/video/store', 'Admin\Video\VideoController@store');

Route::get('/admin/video', 'Admin\Video\VideoController@indexadmin');
Route::delete('/admin/video/{id}', 'Admin\Video\VideoController@destroy');
Route::get('/admin/video/{id}/edit', 'Admin\Video\VideoController@edit');
Route::patch('/admin/video/{id}', 'Admin\Video\VideoController@update');




// NEW
Route::get('/admin/new/create', 'Admin\News\NewController@create');
Route::post('/admin/new/store', 'Admin\News\NewController@store');

Route::get('/admin/new', 'Admin\News\NewController@indexadmin');
Route::delete('/admin/new{id}', 'Admin\News\NewController@destroy');
Route::get('/admin/new/{id}/edit', 'Admin\News\NewController@edit');
Route::patch('/admin/new/{id}', 'Admin\News\NewController@update');




// IMAGE
Route::get('/admin/image/create', 'Admin\Image\ImageController@create');
Route::post('/admin/image/store', 'Admin\Image\ImageController@store');
Route::get('/admin/image/getItem', 'Admin\Image\ImageController@get4Image');

Route::get('/admin/image', 'Admin\Image\ImageController@indexadmin');
Route::delete('/admin/destroy/{id}', 'Admin\Image\ImageController@destroy');
Route::get('/admin/image/{id}/edit', 'Admin\Image\ImageController@edit');
Route::patch('/admin/image/{id}', 'Admin\Image\ImageController@update');


