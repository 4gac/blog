<?php

use Illuminate\Database\Seeder;

class GalleryImagePostSeeder extends Seeder
{
    public function run()
    {
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"12",
            'post_id'=>"1"
        ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"11",
            'post_id'=>"1"
        ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"12",
            'post_id'=>"1"
        ]);
        DB::table('gallery_image_post')->insert([
        'gallery_image_id'=>"18",
        'post_id'=>"1"
    ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"17",
            'post_id'=>"2"
        ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"16",
            'post_id'=>"2"
        ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"20",
            'post_id'=>"3"
        ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"15",
            'post_id'=>"3"
        ]);
        DB::table('gallery_image_post')->insert([
        'gallery_image_id'=>"14",
        'post_id'=>"3"
    ]);
        DB::table('gallery_image_post')->insert([
        'gallery_image_id'=>"13",
        'post_id'=>"4"
    ]);
    DB::table('gallery_image_post')->insert([
        'gallery_image_id'=>"17",
        'post_id'=>"4"
    ]);
        DB::table('gallery_image_post')->insert([
            'gallery_image_id'=>"3",
            'post_id'=>"5"
        ]);
        DB::table('gallery_image_post')->insert([
        'gallery_image_id'=>"7",
        'post_id'=>"5"
    ]);
        
    }
}