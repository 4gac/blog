<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name'=>"Maďarsko",
            'continent'=>"Európa"
            ]);

        DB::table('countries')->insert([
            'name'=>"Poľsko",
            'continent'=>"Európa"
            ]);
        DB::table('countries')->insert([
            'name'=>"Nemecko",
            'continent'=>"Európa"
            ]);
    }
}
