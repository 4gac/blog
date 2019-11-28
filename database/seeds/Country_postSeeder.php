<?php

use Illuminate\Database\Seeder;

class Country_postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_post')->insert([
            'country_id'=>"1",
            'post_id'=>"1"
            ]);
            DB::table('country_post')->insert([
                'country_id'=>"1",
                'post_id'=>"2"
                ]);
    }
}
