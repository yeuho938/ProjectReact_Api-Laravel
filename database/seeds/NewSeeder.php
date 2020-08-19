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
    		DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/sukien1.3.jpg",
    			'category_id'=>1,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/dongnien10.jpg",
    			'category_id'=>1,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/dongnien7.jpg",
    			'category_id'=>2,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/yangzi.611_B30mkHhl8un_2.jpg",
    			'category_id'=>3,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/yangzi.611_B31pv9YlDSM_2.jpg",
    			'category_id'=>3,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/yangzi.611_B47Z5gEFMLj_3.jpg",
    			'category_id'=>3,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
            DB::table('news')->insert([
    			'name'=>$faker->sentence(20),
    			'image'=>"public/yangzi.611_B641H35lBrE_1.jpg",
    			'category_id'=>3,
    			'content'=>$faker->sentence(600),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    		]);

        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(20),
                'image'=>"public/sukien1.4.jpg",
                'category_id'=>2,
                'content'=>$faker->sentence(700),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(15),
                'image'=>"public/sukien1.6.jpg",
                'category_id'=>3,
                'content'=>$faker->sentence(650),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(10),
                'image'=>"public/sukien1.9.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(700),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(15),
                'image'=>"public/yangzi5.jpg",
                'category_id'=>4,
                'content'=>$faker->sentence(700),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(15),
                'image'=>"public/yangzi6.jpg",
                'category_id'=>2,
                'content'=>$faker->sentence(900),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }

        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(15),
                'image'=>"public/yangzi8.jpg",
                'category_id'=>3,
                'content'=>$faker->sentence(900),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }
        for($i = 0; $i < 3; $i++){
            DB::table('news')->insert([
                'name'=>$faker->sentence(15),
                'image'=>"public/yangzi7.jpg",
                'category_id'=>1,
                'content'=>$faker->sentence(830),
                'datetime'=>$faker->date("Y-m-d H:i:s"),
            ]);
        }

    }
}
