<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_categories')->insert([
    		'name'=>'Video ngắn từ phim',
    	]);
    	DB::table('video_categories')->insert([
    		'name'=>'Chương trình',
    	]);
    	DB::table('video_categories')->insert([
    		'name'=>'Quảng cáo',
    	]);
    	DB::table('video_categories')->insert([
    		'name'=>'Đời thương',
    	]);
    }
}
