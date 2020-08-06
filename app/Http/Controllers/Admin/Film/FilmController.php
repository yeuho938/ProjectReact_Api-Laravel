<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Film;
use App\FilmCategory;
use Illuminate\Support\Facades\DB;
class FilmController extends Controller
{

    function create(){
       $cate = FilmCategory::all();
       return view('admin.films.create',['categories'=>$cate]);
   }
   function index(){
      $films = Film::all();
      return json_encode($films);
  }
  function countItem(){
    $films = Film::all();
    return view('admin.dashboard',['film'=>$films]);
    echo count($films);
  }
    function detail($id){
        $filmdetail = DB::table('films')->where("id",$id)->get();
        return json_encode($filmdetail);
  }
// function index(){
//     $films = Film::all();
//       return view('admin.films.create',['categories'=>$cate]);
//   }
  function indexs(){
   $films = Film::all();
   return view('admin.films.index',['films'=>$films]);
}
function store(Request $request)
{
    $name = $request->input('name');
    $file = $request->file("video")->store("public");
    $content = $request->input('content');
    $link = $request->input('link');
    $datetime = $request->input('datetime');
    $status = $request->input('status');
    $category = $request->input('category');

    $films = new Film();
    $films->name=$name;
    $films->content=$content;
    $films->link=$link;
    $films->video=$file;
    $films->category_id =$category;
    $films->status =$status;
    $films->datetime = $datetime;
    $films->save();
    return redirect('/admin/film');
    // $responseData = array("data" => null);
    // return response()->json($responseData, 200);
}
function edit($id){
    $film = Film::find($id);
    $cate = FilmCategory::all();
    return view("admin.films.edit",["films" => $film,"categories"=>$cate]);
}
function update($id, Request $request){
    $name = $request->input('name');
    $content = $request->input('content');
    $link = $request->input('link');
    $datetime = $request->input('datetime');
    $status = $request->input('status');
    $category = $request->input('category');
    $file = $request->file("video")->store("public");

    $films = Film::find($id);
    $films->name=$name;
    $films->content=$content;
    $films->link=$link;
    $films->video=$file;
    $films->category_id =$category;
    $films->status =$status;
    $films->datetime = $datetime;
    $films->save();

    return redirect('/admin/film');

}
public function destroy($id){   
    $film = Film::find($id);
    $film->delete();
    return redirect('/admin/film');

}
// function getCategory(Request $request){
// $cate = FilmCategory::where($request, $id)->first();
// }
}
