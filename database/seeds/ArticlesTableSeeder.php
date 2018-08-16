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
        $limit = 33;
        $i = 0;

        for($i; $i < $limit; $i++){
            DB::table('articles')->insert([
                'user_id' => $faker->numberBetween($min = 1, $max = 5),
                'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
                'slug' => $faker->slug,
                'body' => $faker->text,
                'published' => $faker->boolean($chanceOfGettingTrue = 50),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        
    }
}
