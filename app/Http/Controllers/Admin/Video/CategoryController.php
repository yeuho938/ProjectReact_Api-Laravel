<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VideoCategory;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
     function getAllCategory(){
       $cate = VideoCategory::all();
       return json_encode($cate);
    }
     function getId($id){
    	$cate = DB::table("videos")->where("category_id",$id)->get();
    	return json_encode($cate);
    }
}
