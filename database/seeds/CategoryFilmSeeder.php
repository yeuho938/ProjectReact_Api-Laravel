<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoryFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('film_categories')->insert([
    		'name'=>'Hành động',
    	]);
    	DB::table('film_categories')->insert([
    		'name'=>'Ngôn tình',
    	]);
    	DB::table('film_categories')->insert([
    		'name'=>'Hài hước',
    	]);
    	DB::table('film_categories')->insert([
    		'name'=>'Cổ trang',
    	]);
    }
}
