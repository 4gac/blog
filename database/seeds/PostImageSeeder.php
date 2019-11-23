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

            'imgPath'=>"img1.png",
            'main'=>"0",
            'post_id'=>"1"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"img11.png",
            'main'=>"1",
            'post_id'=>"1"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"water.png",
            'main'=>"1",
            'post_id'=>"2"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"img3.png",
            'main'=>"1",
            'post_id'=>"3"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"img4.png",
            'main'=>"1",
            'post_id'=>"4"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"img5.png",
            'main'=>"1",
            'post_id'=>"5"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"img1.jpg",
            'main'=>"0",
            'post_id'=>"1"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image2.jpg",
            'main'=>"0",
            'post_id'=>"2"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image3.jpg",
            'main'=>"0",
            'post_id'=>"1"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image4.jpg",
            'main'=>"0",
            'post_id'=>"5"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image6.jpg",
            'main'=>"0",
            'post_id'=>"4"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image7.jpg",
            'main'=>"0",
            'post_id'=>"4"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image8.jpg",
            'main'=>"0",
            'post_id'=>"1"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image9.jpg",
            'main'=>"0",
            'post_id'=>"1"
        ]);
    }
}
