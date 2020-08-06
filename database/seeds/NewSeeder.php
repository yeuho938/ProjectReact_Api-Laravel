<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
    	for($i = 0; $i < 3; $i++){
    		DB::table('news')->insert([
    			'name'=>$faker->name,
    			'image'=>"public/sukien1.3.jpg",
    			'category_id'=>1,
    			'content'=>$faker->sentence(300),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    		]);
    	}
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/sukien1.4.jpg",
                'category_id'=>2,
                'content'=>$faker->sentence(300),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/sukien1.6.jpg",
                'category_id'=>3,
                'content'=>$faker->sentence(400),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/sukien1.9.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(500),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/yangzi5.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(300),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/yangzi6.jpg",
                'category_id'=>2,
                'content'=>$faker->sentence(400),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }

        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/yangzi8.jpg",
                'category_id'=>3,
                'content'=>$faker->sentence(400),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->name,
                'image'=>"public/yangzi7.jpg",
                'category_id'=>1,
                'content'=>$faker->sentence(330),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }

    }
}
