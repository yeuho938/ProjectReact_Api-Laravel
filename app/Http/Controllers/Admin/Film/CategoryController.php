<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FilmCategory;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    function getAllCategory(){
     $cate = FilmCategory::all();
     return json_encode($cate);
    }
     function getId($id){
    	$cate = DB::table("films")->where("category_id",$id)->get();
    	return json_encode($cate);
    }
     
}
