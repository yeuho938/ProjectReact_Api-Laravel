<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmCategory extends Model
{
  public function films(){
    	return $this->hasMany("App\Film","category_id","id");
    }
}
