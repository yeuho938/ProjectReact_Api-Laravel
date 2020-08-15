<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function Category(){
    	return $this->belongsTo("App\NewCategory","category_id","id");
    }
    public function comment(){
    	return $this->belongsTo("App\NewComment","id","new_id");

    }
}
