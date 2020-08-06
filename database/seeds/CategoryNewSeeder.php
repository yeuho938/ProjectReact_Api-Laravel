<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoryNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('new_categories')->insert([
    		'name'=>'Các bộ phim',
    	]);
    	DB::table('new_categories')->insert([
    		'name'=>' Sự kiện',
    	]);
    	DB::table('new_categories')->insert([
    		'name'=>'Quảng cáo',
    	]);
    	DB::table('new_categories')->insert([
    		'name'=>'Đời thương',
    	]);
    }
}
