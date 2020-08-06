<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
    	for($i = 0; $i < 3; $i++){
    		DB::table('images')->insert([
    			'name'=>$faker->name,
    			'image'=>"public/21.jpg",
    			'category_id'=>2,
    			'content'=>$faker->sentence(100),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    		]);
    	}
        for($i = 0; $i < 5; $i++){
            DB::table('images')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/1.jpg",
                'category_id'=>3,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 5; $i++){
            DB::table('images')->insert([
                'name'=>$faker->name,
                'image'=>"public/quangcao1.jpg",
                'category_id'=>1,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 2; $i++){
            DB::table('images')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/yangzi.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
         for($i = 0; $i < 2; $i++){
            DB::table('images')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/yangzi1.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 2; $i++){
            DB::table('images')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/yangzi2.jpg",
                'category_id'=>1,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 2; $i++){
            DB::table('images')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/yangzi3.jpg",
                'category_id'=>2,
                'content'=>$faker->sentence(100),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }

    }
}
