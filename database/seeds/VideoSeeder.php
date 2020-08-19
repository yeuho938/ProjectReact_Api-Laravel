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
        DB::table('videos')->insert([
            'name'=>"Dương Tử cô gái cute hết phần lục giới",
            'video'=>"public/y2mate.com - Dương Tử cô gái cute hết phần lục giới_Kc5Ja_u92W4_360p.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
    			'name'=>"Sự lầy lội của Dương Tử",
    			'video'=>"public/Sự lầy lội của Dương Tử - part 2.mp4",
    			'category_id'=>1,
    			'content'=>$faker->sentence(50),
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    		]);

        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/bunny.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/cungem.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/D5kBRRmT10lTALMxLnQQ2Kfn5i5Jd9IgMQdynlCb.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/GtF1neDsYtLjQkZzCMng5lDmth753H8Jm302mTze.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/O7RurbEBiKJCMh0qNKFcUhsn3SChOB4d7ApdpDZ1.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/w1HpvDu7JPdJaEWQsq9CNtjMcKwgFB6SI15sc0At.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>"Hậu trường của Phim Hương Mật Tựa Sương Khói",
            'video'=>"public/y2mate.com - Mọi người chơi Game Hậu trường của Phim Hương Mật Tựa Sương Khói_CIs0z7K5jDs_360p.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/y2mate.com - Dương Tử cô gái cute hết phần lục giới_Kc5Ja_u92W4_360p.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>"Vương Gia Nhĩ - Dương Tử",
            'video'=>"public/y2mate.com - [VIETSUB]《Khi Vương Gia Nhĩ - JackSon gặp Idol 》Vương Gia Nhĩ - Dương Tử__HYU2lyrL64_360p.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/yqQI6zvc5Y8K8KLhFP0wNzp4DBaHQjeNXTeUUMCm.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>"Những tạo hình cổ trang của Dương Tử",
            'video'=>"public/y2mate.com - Những tạo hình cổ trang xinh đẹp của Dương Tử_5atQfJUd8b4_360p.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
        DB::table('videos')->insert([
            'name'=>$faker->name,
            'video'=>"public/wN3q8huoAmMwCKaNbwiwd5EynzIGiNnk2oedxCod.mp4",
            'category_id'=>1,
            'content'=>$faker->sentence(50),
            'datetime'=>$faker->date("Y-m-d H:i:s"),
        ]);
    }
}
