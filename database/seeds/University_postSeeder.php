<?php

use Illuminate\Database\Seeder;

class University_postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('university_post')->insert([
            'university_id'=>"1",
            'post_id'=>"1",
            'pocet_miest'=>"2"
            ]);

            DB::table('university_post')->insert([
                'university_id'=>"2",
                'post_id'=>"1",
                'pocet_miest'=>"2"
                ]);
                DB::table('university_post')->insert([
                    'university_id'=>"3",
                    'post_id'=>"3",
                    'pocet_miest'=>"2"
                    ]);
    }
}
