<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
    	for($i = 0; $i <3; $i++){
    		DB::table('films')->insert([
    			'name'=>$faker->name,
    			'video'=>"public/thegioi.mp4",
                'image'=>"public/yangzi10.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
    			'category_id'=>2,
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    			'status'=>" Đã phát sóng",
    		]);
    	}
        for($i = 0; $i <3; $i++){
            DB::table('films')->insert([
                'name'=>$faker->name,
                'video'=>"public/Sự lầy lội của Dương Tử - part 2.mp4",
                'image'=>"public/yangzi10.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
                'category_id'=>2,
                'datetime'=>$faker->date("Y-m-d H:i:s"),
                'status'=>" Đã phát sóng",
            ]);
        }
        for($i = 0; $i <3; $i++){
            DB::table('films')->insert([
                'name'=>$faker->name,
                'video'=>"public/O7RurbEBiKJCMh0qNKFcUhsn3SChOB4d7ApdpDZ1.mp4",
                'image'=>"public/yangzi10.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
                'category_id'=>2,
                'datetime'=>$faker->date("Y-m-d H:i:s"),
                'status'=>" Đã phát sóng",
            ]);
        }

    }
}
