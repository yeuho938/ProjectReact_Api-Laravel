<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class RegisterController extends Controller
{
    function index(){
    	return  view("auth.register");
    }
    function register(Request $request){
    	$name = $request->input('fullname');
    	$username = $request->input('username');
    	$password = $request->input('password');
    	$email = $request->input('email');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $role = 0;
        $hashpassword = Hash::make($password);

        DB::table('users')->insert(
         ["fullname"=>$name,"username" => $username, "password" => $hashpassword, "email" => $email,"address"=>$address,"phone"=>$phone,"role"=>$role]);   	
    }
}