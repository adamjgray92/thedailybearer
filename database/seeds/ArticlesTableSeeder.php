<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $dt = Carbon::create(2018, 7, 16, 0);
        $limit = 33;
        $i = 0;

        for($i; $i < $limit; $i++){
            $date = $dt->addDay();
            DB::table('articles')->insert([
                'user_id' => $faker->numberBetween($min = 1, $max = 5),
                'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
                'slug' => $faker->slug,
                'body' => $faker->text,
                'image_path' => 'https://picsum.photos/200/300?image=' . $i,
                'published' => $faker->boolean($chanceOfGettingTrue = 50),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
        
    }
}
