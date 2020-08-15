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
    		'name'=>'Phim Cổ trang',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Phim hiện đại',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Sự kiện',
    	]);
    	DB::table('image_categories')->insert([
    		'name'=>'Đời thương',
        ]);
        DB::table('image_categories')->insert([
    		'name'=>'Quảng cáo',
    	]);
    }
}
