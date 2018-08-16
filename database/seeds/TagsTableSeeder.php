<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'technology',
            'healthcare',
            'google',
            'apple',
            'politics',
            'sports',
            'baseball',
            'esports',
            'mma',
            'brexit',
            'diet',
            'gym'
        ];
        foreach($tags as $tag){
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
