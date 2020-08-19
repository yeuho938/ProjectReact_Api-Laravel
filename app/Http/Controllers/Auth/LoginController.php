<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Attempt;
use \Firebase\JWT\JWT;
use App\User;

class LoginController extends Controller
{
  function index(){
    $user = User::all();
    echo json_encode($user);
  }   
  function login(Request $request)
   {
       $credentials = $request->only('username','password');
       $key ="hothiyeu12345";      
       if(Auth::Attempt($credentials)){
        $user = Auth::user();
        $userId = $user->id;
        $data =array(
        "user_id"=>$userId
        );
          $token = JWT::encode($data, $key);
          $responData = array("user_id"=>$token);
          return response()->json($responData,200);
       }else{
           $array = array("user_id"=>null);
            return response()->json($array,400);
       }  
   }
    function profile($id){
       $user = DB::table('users')->where('id',$id)->first();
       return json_encode($user);
   }
   
   function getProfile(){
       $token = request()->header("Authorization");
       $key ="hothiyeu12345";
       $data = JWT::decode($token, $key, array('HS256'));

       $user = DB::table('users')->find($data->user_id);
       $responData = array("user"=>$user);
       return response()->json($responData, 200);
   }
}

 