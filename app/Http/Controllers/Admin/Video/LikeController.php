<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class LikeController extends Controller
{
    function index($id){
        $comment = DB::table('video_likes')->where('video_id',$id)->get();
        return json_encode($comment);
      }
      function addLike(Request $request){
        $video_id = $request->video_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('video_likes')->insert([
            'user_id'=>$user_id, 'video_id'=>$video_id
        ]);
      }
}
