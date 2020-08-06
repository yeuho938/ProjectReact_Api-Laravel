<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function category(){
    	return $this->belongsTo("App\FilmCategory","category_id","id");
    }
}
