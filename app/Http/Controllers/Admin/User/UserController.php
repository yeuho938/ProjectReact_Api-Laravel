<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    function index(){
        $user = DB::table('users')->get();
        return view("admin.users.index", ['users'=>$user]);
    }
     function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user');

    }
}
