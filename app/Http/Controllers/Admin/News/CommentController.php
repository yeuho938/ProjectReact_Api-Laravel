<?php

namespace App\Http\Controllers\Admin\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewComment;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;

class CommentController extends Controller
{
function index(){
  $comment = NewComment::all();
  return json_encode($comment);
}
function addComent(Request $request){
  $comment = $request->content;
  $new_id = $request->new_id;
  $user_id = $request->user_id;
  $key ="hothiyeu12345";
  $data = JWT::decode($user_id, $key, array('HS256'));
  $user_id = $data->user_id;

  DB::table('new_comments')->insert([
      'user_id'=>$user_id, 'new_id'=>$new_id,'content'=>$comment
  ]);
}
}
