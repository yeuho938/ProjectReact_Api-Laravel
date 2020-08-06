<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewCategory;
use Illuminate\Support\Facades\DB;
class NewController extends Controller
{
	function create(){
		$cate = NewCategory::all();
		return view('admin.news.create',['categories'=>$cate]);
	}
	function index(){
		$news = News::all();
		return json_encode($news);
	}
	function indexadmin(){
		$new = News::all();
		return view('admin.news.index',['news'=>$new]);
	}
	  function detail($id){
        $newdetail = DB::table('news')->where("id",$id)->get();
        return json_encode($newdetail);
	}
	function store(Request $request)
	{
		$name = $request->input('name');
		$image = $request->file("image")->store("public");
		$content = $request->input('content');
		$datetime = $request->input('datetime');
		$category = $request->input('category');

		$news = new News();
		$news->name=$name;
		$news->content=$content;
		$news->image=$image;
		$news->category_id =$category;
		$news->datetime = $datetime;
		$news->save();

		return redirect('/admin/new');
	}

	function edit($id){
		$new = News::find($id);
		$cate = NewCategory::all();
		return view("admin.news.edit",["news" => $new,"categories"=>$cate]);
	}
	function update($id, Request $request){
		$name = $request->input('name');
		$content = $request->input('content');
		$datetime = $request->input('datetime');
		$category = $request->input('category');
		$image = $request->file("image")->store("public");

		$news = News::find($id);
		$news->name=$name;
		$news->content=$content;
		$news->image=$image;
		$news->category_id =$category;
		$news->datetime = $datetime;
		$news->save();
		return redirect('/admin/new');

	}
	 function destroy($id){   
		$new = News::find($id);
		$new->delete();
		return redirect('/admin/new');

	}
}
