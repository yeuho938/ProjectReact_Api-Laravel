<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
    	for($i = 0; $i < 10; $i++){
    		DB::table('videos')->insert([
    			'name'=>$faker->name,
    			'video'=>"public/bunny.mp4",
    			'category_id'=>1,
    			'content'=>$faker->sentence(50),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    		]);
    	}

    }
}
