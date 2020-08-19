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
    		DB::table('films')->insert([
    			'name'=>"HƯƠNG MẬT TỰA KHÓI SƯƠNG",
    			'video'=>"public/y2mate.com - Mọi người chơi Game hậu trường của Phim Hương Mật Tựa Sương Khói_CIs0z7K5jDs_360p.mp4",
                'image'=>"public/huong.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
    			'category_id'=>4,
    			'datetime'=>$faker->date("Y-m-d H:i:s"),
    			'status'=>" Đã phát sóng",
    		]);
    	        DB::table('films')->insert([
                'name'=>"DƯ SINH XIN CHỈ GIÁO NHIỀU HƠN",
                'video'=>"public/Sự lầy lội của Dương Tử - part 2.mp4",
                'image'=>"public/dusinh.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
                'category_id'=>4,
                'datetime'=>$faker->date("Y-m-d H:i:s"),
                'status'=>" Đã phát sóng",
            ]);

            DB::table('films')->insert([
                'name'=>"lONG CHÂU TRUYỀN KỲ",
                'video'=>"public/wN3q8huoAmMwCKaNbwiwd5EynzIGiNnk2oedxCod.mp4",
                'image'=>"public/long.jpg",
                'content'=>$faker->sentence(130),
                'link'=>$faker->sentence(10),
                'category_id'=>3,
                'datetime'=>$faker->date("Y-m-d H:i:s"),
                'status'=>" Đã phát sóng",
            ]);

        DB::table('films')->insert([
            'name'=>"NHÂN CHỨNG THẦM LẶNG",
            'video'=>"public/O7RurbEBiKJCMh0qNKFcUhsn3SChOB4d7ApdpDZ1.mp4",
            'image'=>"public/nhan.jpg",
            'content'=>$faker->sentence(130),
            'link'=>$faker->sentence(10),
            'category_id'=>1,
            'datetime'=>$faker->date("Y-m-d H:i:s"),
            'status'=>"Đã phát sóng",
        ]);
        DB::table('films')->insert([
            'name'=>"CÁ MỰC HẦM MẬT",
            'video'=>"public/GtF1neDsYtLjQkZzCMng5lDmth753H8Jm302mTze.mp4",
            'image'=>"public/go.jpg",
            'content'=>$faker->sentence(130),
            'link'=>$faker->sentence(10),
            'category_id'=>2,
            'datetime'=>$faker->date("Y-m-d H:i:s"),
            'status'=>" Đã phát sóng",
        ]);
        DB::table('films')->insert([
            'name'=>"CHÀNG TRAI MOGOLY CỦA TÔI",
            'video'=>"public/y2mate.com - Những tạo hình cổ trang xinh đẹp của Dương Tử_5atQfJUd8b4_360p.mp4",
            'image'=>"public/mo.jpg",
            'content'=>$faker->sentence(130),
            'link'=>$faker->sentence(10),
            'category_id'=>1,
            'datetime'=>$faker->date("Y-m-d H:i:s"),
            'status'=>" Đã phát sóng",
        ]);
        DB::table('films')->insert([
            'name'=>"HOÀN LẠC TỤNG",
            'video'=>"public/Uv5B7eMybSwJVxhjxH7ovtRV9CIhvRkZlGG1E4F4.mp4",
            'image'=>"public/hoa.jpg",
            'content'=>$faker->sentence(130),
            'link'=>$faker->sentence(10),
            'category_id'=>1,
            'datetime'=>$faker->date("Y-m-d H:i:s"),
            'status'=>" Đã phát sóng",
        ]);

    }
}
