<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Film;
use App\Image;
use App\Video;
use App\News;
use App\User;
class DashboardController extends Controller
{
	function index(){
        $films = Film::all();
        $images = Image::all();
        $videos = Video::all();
        $news = News::all();
        $users = User::all();
        $videoComment = DB::table('video_comments')->get();
        $newComment = DB::table('new_comments')->get();
        $imageComment = DB::table('image_comments')->get();
        $filmComment = DB::table('film_comments')->get();
		return view("admin.dashboard",['films'=>$films,'news'=>$news,'images'=>$images,'videos'=>$videos,'users'=>$users,'videoComment'=>$videoComment,'newComment'=>$newComment,'imageComment'=>$imageComment,'filmComment'=>$filmComment]);
    }

}




