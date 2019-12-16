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

            'imgPath'=>"image1.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok1",
            'caption'=>"Toto je caption obrazku1"

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

            'imgPath'=>"image5.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok5",
            'caption'=>"Toto je caption obrazku5"
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
        DB::table('images')->insert([

            'imgPath'=>"image10.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok10",
            'caption'=>"Toto je caption obrazku10"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image11.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok11",
            'caption'=>"Toto je caption obrazku11"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image12.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok12",
            'caption'=>"Toto je caption obrazku12"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image13.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok13",
            'caption'=>"Toto je caption obrazku13"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image14.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok14",
            'caption'=>"Toto je caption obrazku14"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image15.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok15",
            'caption'=>"Toto je caption obrazku15"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image16.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok16",
            'caption'=>"Toto je caption obrazku16"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image17.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok17",
            'caption'=>"Toto je caption obrazku17"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image18.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok18",
            'caption'=>"Toto je caption obrazku18"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image19.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok19",
            'caption'=>"Toto je caption obrazku19"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image20.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok20",
            'caption'=>"Toto je caption obrazku20"
        ]);
        DB::table('images')->insert([

            'imgPath'=>"image21.jpg",
            'alt'=>"Img not Available",
            'title'=>"Obrazok21",
            'caption'=>"Toto je caption obrazku21"
        ]);
        DB::table('images')->insert([
            'imgPath'=>"unknownwoman",
            'alt'=>"Img not Available",
            'title'=>"Obrazok22",
            'caption'=>"Toto je caption obrazku22"
        ]);
    }
}
