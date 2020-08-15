<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class CommentController extends Controller
{
    function index(){
        $comment = DB::table('video_comments')->get();
        return json_encode($comment);
      }
      function addComent(Request $request){
        $comment = $request->content;
        $video_id = $request->video_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('video_comments')->insert([
            'user_id'=>$user_id, 'video_id'=>$video_id,'content'=>$comment
        ]);
      }
}
