<?php

namespace App\Http\Controllers\Admin\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class CommentController extends Controller
{
    function index(){
        $comment = DB::table('film_comments')->get();
        return json_encode($comment);
      }
      function addComent(Request $request){
        $comment = $request->content;
        $film_id = $request->film_id;
        $user_id = $request->user_id;
        $key ="hothiyeu12345";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;

        DB::table('film_comments')->insert([
            'user_id'=>$user_id, 'film_id'=>$film_id,'content'=>$comment
        ]);
      }
}
