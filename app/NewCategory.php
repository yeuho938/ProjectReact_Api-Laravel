<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
     public function news(){
    	return $this->hasMany("App\New","category_id","id");
    }
}
