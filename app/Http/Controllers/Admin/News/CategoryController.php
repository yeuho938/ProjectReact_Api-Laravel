<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewCategory;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
     function getAllCategory(){
       $cate = NewCategory::all();
       return json_encode($cate);
    }
    function getId($id){
    	$cate = DB::table("news")->where("category_id",$id)->get();
    	return json_encode($cate);
    }
}
