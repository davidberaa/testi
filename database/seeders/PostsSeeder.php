<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
        'food_title'=>'Big Tasty',
        'description'=>'https://mcdonalds.ge/b721ef1d9dda-resized.png',
        'price'=>'15'
        ]);
        
        DB::table('food')->insert([
        'food_title'=>'Chicken Sandwich',
        'description'=>'https://mcdonalds.ge/f091c31401be-resized.png',
        'price'=>'10'
        ]);
    }

}
