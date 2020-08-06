<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('image_categories')->insert([
    		'name'=>'Cổ trang',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Từ các bộ phim',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Sự kiện',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Đời thương',
    	]);
    }
}
