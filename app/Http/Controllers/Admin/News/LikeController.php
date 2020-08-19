<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class LikeController extends Controller
{
    function index($id){
        $like = DB::table('new_likes')->where('new_id',$id)->get();
        return json_encode($like);
      }
      function addLike(Request $request){
        $new_id = $request->new_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('new_likes')->insert([
            'user_id'=>$user_id, 'new_id'=>$new_id
        ]);
      }
}
