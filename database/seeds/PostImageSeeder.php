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
        DB::table('postImages')->insert([

            'imgPath'=>"image15.jpg",
            'title'=>"name3",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"1"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image11.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"1"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image16.jpg",
            'title'=>"name1",
            'caption'=>"caption1",
            'main'=>"0",
            'post_id'=>"2"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image20.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"2"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image19.jpg",
            'title'=>"name1",
            'caption'=>"caption1",
            'main'=>"0",
            'post_id'=>"3"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image20.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"3"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image13.jpg",
            'title'=>"name1",
            'caption'=>"caption1",
            'main'=>"0",
            'post_id'=>"4"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image18.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"4"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image11.jpg",
            'title'=>"name1",
            'caption'=>"caption1",
            'main'=>"0",
            'post_id'=>"5"
        ]);
        DB::table('postImages')->insert([

            'imgPath'=>"image12.jpg",
            'title'=>"name2",
            'caption'=>"caption2",
            'main'=>"0",
            'post_id'=>"5"
        ]);
    }
}
