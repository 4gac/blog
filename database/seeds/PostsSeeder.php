<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            
            'title'=>"Študijné pobyty",
            'text'=>"Pobyt v Poľsku",
            'slug'=>"studijne-pobyty",
            'user_id'=>"1"
            ]);
        DB::table('posts')->insert([
                'title'=>"Pracovné stáže",
                'text'=>"Stáž v Poľsku",
                'slug'=>"pracovne-staze",
                'user_id'=>"1"
                ]);
        DB::table('posts')->insert([
                    'title'=>"Účastnícke správy",
                    'text'=>"Správa z Rakúska",
                    'slug'=>"ucastnicke-spravy",
                    'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"Účastnícke správy",
        'text'=>"Správa z Macedónska",
        'slug'=>"ucastnicke-spravy",
        'user_id'=>"1"
                    ]);
        DB::table('posts')->insert([
        'title'=>"Účastnícke správy",
        'text'=>"Správa z Kanárskych ostrovov",
        'slug'=>"ucastnicke-spravy",
        'user_id'=>"1"
                    ]);
    }
}
