<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class CommentController extends Controller
{
    function index(){
        $comment = DB::table('image_comments')->get();
        return json_encode($comment);
      }
      function addComent(Request $request){
        $comment = $request->content;
        $image_id = $request->image_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('image_comments')->insert([
            'user_id'=>$user_id, 'image_id'=>$image_id,'content'=>$comment
        ]);
      }
}
