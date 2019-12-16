<?php

use Illuminate\Database\Seeder;

class PostImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postImages')->insert([

            'imgPath'=>"image11.jpg",
            'title'=>"name1",
            'caption'=>"caption1",
            'main'=>"1",
            'post_id'=>"3"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image20.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"1",
            'post_id'=>"5"
        ]);
    }
}
