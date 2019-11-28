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
            'name'=>"Maďarsko"
            ]);

        DB::table('countries')->insert([
            'name'=>"Poľsko"
            ]);
        DB::table('countries')->insert([
            'name'=>"Nemecko"
            ]);
    }
}
