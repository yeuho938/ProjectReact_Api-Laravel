<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\News;
use App\User;
class NewComment extends Model
{
  function news(){
	return $this->hasMany("App\News","id","new_id");
 }
  function uses(){
	return $this->hasMany("App\User","id","user_id");
 }
}
