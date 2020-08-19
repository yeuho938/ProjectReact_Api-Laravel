<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CategoryFilmSeeder::class);
    	$this->call(CategoryImageSeeder::class);
    	$this->call(CategoryNewSeeder::class);
        $this->call(CategoryVideoSeeder::class);

        $this->call(FilmSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(NewSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
