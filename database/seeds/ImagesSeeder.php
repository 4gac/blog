<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([

            'imgPath'=>"img1.png",
            'alt'=>"Img not Available",
            'title'=>"Obrazok1",
            'caption'=>"Toto je caption obrazku1"

        ]);

        DB::table('images')->insert([

            'imgPath'=>"img11.png",
            'alt'=>"Img not Available",
            'title'=>"Obrazok11",
            'caption'=>"Toto je caption obrazku11"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"water.png",
            'alt'=>"Img not Available",
            'title'=>"ObrazokW",
            'caption'=>"Toto je caption obrazkuW"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"img3.png",
            'alt'=>"Img not Available",
            'title'=>"Obrazok3",
            'caption'=>"Toto je caption obrazku3"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"img4.png",
            'alt'=>"Img not Available",
            'title'=>"Obrazok4",
            'caption'=>"Toto je caption obrazku4"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"img5.png",
            'alt'=>"Img not Available",
            'title'=>"Obrazok5",
            'caption'=>"Toto je caption obrazku5"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"img1.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokA",
            'caption'=>"Toto je caption obrazkuA"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image2.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokB",
            'caption'=>"Toto je caption obrazkuB"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image3.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokC",
            'caption'=>"Toto je caption obrazkuC"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image4.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokD",
            'caption'=>"Toto je caption obrazkuD"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image6.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokE",
            'caption'=>"Toto je caption obrazkuE"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image7.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokF",
            'caption'=>"Toto je caption obrazkuF"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image8.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokG",
            'caption'=>"Toto je caption obrazkuG"
        ]);

        DB::table('images')->insert([

            'imgPath'=>"image9.jpg",
            'alt'=>"Img not Available",
            'title'=>"ObrazokH",
            'caption'=>"Toto je caption obrazkuH"
        ]);
    }
}
