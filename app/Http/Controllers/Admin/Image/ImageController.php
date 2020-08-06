<?php

namespace App\Http\Controllers\Admin\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use App\ImageCategory;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
  function create(){
   $cate = ImageCategory::all();
   return view('admin.images.create',['categories'=>$cate]);
 }
 function index(){
  $images = Image::all();
  return json_encode($images);
}
function get4Image(){
  $images = DB::table('images')->skip(10)->take(5)->get();
 // return json_encode($images);
  echo $images;
}
function detail($id){
        $imagedetail = DB::table('images')->where("id",$id)->get();
        return json_encode($imagedetail);
  }

function indexadmin(){
 $image = Image::all();
 return view('admin.images.index',['images'=>$image]);
}
function store(Request $request)
{
  $name = $request->input('name');
  $content = $request->input('content');
  $image = $request->file("image")->store("public");
  $datetime = $request->input('datetime');
  $category = $request->input('category');

  $images = new Image();
  $images->name=$name;
  $images->content=$content;
  $images->image=$image;
  $images->category_id =$category;
  $images->datetime = $datetime;
  $images->save();
  return redirect('/admin/image');
  // $responseData = array("data" => null);
  // return response()->json($responseData, 200);
}
function edit($id){
  $image = Image::find($id);
  $cate = ImageCategory::all();
  return view("admin.images.edit",["images" => $image,"categories"=>$cate]);
}
function update($id, Request $request){
  $name = $request->input('name');
  $content = $request->input('content');
  $datetime = $request->input('datetime');
  $category = $request->input('category');
  $image = $request->file("image")->store("public");

  $images = Image::find($id);
  $images->name=$name;
  $images->content=$content;
  $images->image=$image;
  $images->category_id =$category;
  $images->datetime = $datetime;
  $images->save();
  return redirect('/admin/image');
}
public function destroy($id){   
  $image = Image::find($id);
  $image->delete();
  return redirect('/admin/image');

}
}
