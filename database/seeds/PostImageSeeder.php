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
            'main'=>"1",
            'post_id'=>"1"
        ]);


        DB::table('postImages')->insert([

            'imgPath'=>"image20.jpg",
            'main'=>"1",
            'post_id'=>"2"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image16.jpg",
            'main'=>"1",
            'post_id'=>"3"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image13.jpg",
            'main'=>"1",
            'post_id'=>"4"
        ]);

        DB::table('postImages')->insert([

            'imgPath'=>"image5.jpg",
            'main'=>"1",
            'post_id'=>"5"
        ]);

       

      

   

    

  

     

     
    }
}
