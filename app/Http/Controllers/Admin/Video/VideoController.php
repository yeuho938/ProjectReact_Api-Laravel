<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\VideoCategory;
use Illuminate\Support\Facades\DB;
class VideoController extends Controller
{
    function create(){
		$cate = VideoCategory::all();
		return view('admin.videos.create',['categories'=>$cate]);
	}
	function index(){
		$video = Video::all();
		return json_encode($video);
    }
    function FirstVideo(){
        $video = Video::take(1)->first();
		return json_encode($video);
	}
	function indexadmin(){
		$video = Video::all();
		return view('admin.videos.index',['videos'=>$video]);
	}
	function detail($id){
        $videodetail = DB::table('videos')->where("id",$id)->first();
        $cate= VideoCategory::find($videodetail->category_id);
        $videodetail->category_name = $cate->name;
         //echo  json_encode($newdetail, JSON_PRETTY_PRINT);
       return json_encode($videodetail);
  }
	function store(Request $request)
	{
		$name = $request->input('name');
  		$video = $request->file("video")->store("public");
		$content = $request->input('content');
		$datetime = $request->input('datetime');
		$category = $request->input('category');

		$videos = new Video();
		$videos->name=$name;
		$videos->content=$content;
		$videos->video=$video;
		$videos->category_id =$category;
		$videos->datetime = $datetime;
		$videos->save();
		//$responseData = array("data" => null);
		return redirect('/admin/video');
		//response()->json($responseData, 200);
	}
	function edit($id){
		$video = Video::find($id);
		$cate = VideoCategory::all();
		return view("admin.videos.edit",["videos" => $video,"categories"=>$cate]);
	}
	function update($id, Request $request){
		$name = $request->input('name');
		$content = $request->input('content');
		$datetime = $request->input('datetime');
		$category = $request->input('category');
  		$video = $request->file("video")->store("public");

		$videos = Video::find($id);
		$videos->name=$name;
		$videos->content=$content;
		$videos->video=$video;
		$videos->category_id =$category;
		$videos->datetime = $datetime;
		$videos->save();

		return redirect('/admin/video');

	}
	 function destroy($id){
		$video = Video::find($id);
		$video->delete();
		return redirect('/admin/video');
    }
    function getnew(){
    $videos = Video::orderBy('datetime', 'desc')->take(5)->get();
    $category = VideoCategory::all();
    // echo "<pre>" . json_encode($videos, JSON_PRETTY_PRINT). "</pre>";
    return json_encode($videos);
    }
}
