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
Route::get('/admin/film/search', 'Admin\Film\FilmController@search');
Route::get('/admin/film/newFilm', 'Admin\Film\FilmController@getnewFilm');
//Comment & Like
Route::get('/admin/film/totalLike/{id}', 'Admin\FIlm\LikeController@index');
Route::post('/admin/film/like', 'Admin\Film\LikeController@addLike');

Route::post('/admin/film/comment', 'Admin\Film\CommentController@addComent');
Route::get('/admin/film/totalComment/{id}', 'Admin\Film\CommentController@index');



// REGISTER
Route::post('/auth/register', 'Auth\RegisterController@register');

// LOGIN
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/profile', 'Auth\LoginController@getProfile');

// IMAGE
Route::get('/admin/image/index', 'Admin\Image\ImageController@index');
Route::get('/image/category', 'Admin\Image\CategoryController@getAllCategory');
Route::get('/image/category/{id}', 'Admin\Image\CategoryController@getId');
Route::get('/image/detail/{id}', 'Admin\Image\ImageController@detail');
Route::get('/admin/image/search', 'Admin\Image\ImageController@search');
Route::get('/admin/image/newimage', 'Admin\Image\ImageController@getnew');

//Like
Route::get('/admin/image/totalLike/{id}', 'Admin\Image\LikeController@index');
Route::post('/admin/image/like', 'Admin\Image\LikeController@addLike');


// NEW
Route::get('/new/category', 'Admin\News\CategoryController@getAllCategory');
Route::get('/new/category/{id}', 'Admin\News\CategoryController@getId');
Route::get('/new/detail/{id}','Admin\News\NewController@detail');
Route::get('/admin/new/index', 'Admin\News\NewController@index');
//Comment&like
Route::post('/admin/new/comment', 'Admin\News\CommentController@addComent');
Route::get('/admin/new/totalComment/{id}', 'Admin\News\CommentController@index');
Route::get('/admin/new/totalLike/{id}', 'Admin\News\LikeController@index');
Route::post('/admin/new/like', 'Admin\News\LikeController@addLike');


// VIDEO
Route::get('/video/category', 'Admin\Video\CategoryController@getAllCategory');
Route::get('/video/category/{id}', 'Admin\Video\CategoryController@getId');
Route::get('/video/detail/{id}', 'Admin\Video\VideoController@detail');
Route::get('/admin/video/index', 'Admin\Video\VideoController@index');
Route::get('/admin/video/newvideo', 'Admin\Video\VideoController@getnew');
Route::get('/admin/video/getone', 'Admin\Video\VideoController@FirstVideo');
//comment Video
Route::post('/admin/video/comment', 'Admin\Video\CommentController@addComent');
Route::get('/admin/video/totalComment/{id}', 'Admin\Video\CommentController@index');
Route::get('/admin/video/totalLike/{id}', 'Admin\Video\LikeController@index');
Route::post('/admin/video/like', 'Admin\Video\LikeController@addLike');






