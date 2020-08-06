<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ImageCategory;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    function getAllCategory(){
       $cate = ImageCategory::all();
       return json_encode($cate);
    }
    function getId($id){
    	$cate = DB::table("images")->where("category_id",$id)->get();
    	return json_encode($cate);
    }
}
