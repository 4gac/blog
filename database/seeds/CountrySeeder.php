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
            'name'=>"Slovensko",
            'continent'=>"Európa"
            ]);

        DB::table('countries')->insert([
            'name'=>"Veľká Británia",
            'continent'=>"Európa"
            ]);
        DB::table('countries')->insert([
            'name'=>"Nemecko",
            'continent'=>"Európa"
            ]);
    }
}
