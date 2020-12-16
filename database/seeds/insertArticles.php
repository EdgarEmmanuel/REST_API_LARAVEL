<?php

use App\Articles;
use Illuminate\Database\Seeder;


class insertArticles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::truncate();


        $faker = \Faker\Factory::create();


        for($i=0;$i<10;$i++){
            Articles::create([
                "title" => $faker->sentence,
                "body" => $faker->paragraph
            ]);
        }
    }
}
