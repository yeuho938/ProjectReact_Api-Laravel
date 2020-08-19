<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class LikeController extends Controller
{
    function index($id){
        $like = DB::table('image_likes')->where('image_id',$id)->get();
        return json_encode($like);
      }
      function addLike(Request $request){
        $image_id = $request->image_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('new_likes')->insert([
            'user_id'=>$user_id, 'image_id'=>$image_id
        ]);
      }
}
