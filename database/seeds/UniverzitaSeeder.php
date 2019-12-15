<?php

use Illuminate\Database\Seeder;

class UniverzitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('univerzita')->insert([
            'nazov'=>"UKF Nitra",
            'zmluva_od'=>"15.12.2019",
            'zmluva_do'=>"23.03.2020",
            'mesto_id'=>"2",
            'countries_id'=>"1",
            'kontaktna_osoba'=>"Alena"
            ]);

            DB::table('univerzita')->insert([
                'nazov'=>"SPU Nitra",
                'zmluva_od'=>"15.12.2019",
                'zmluva_do'=>"23.03.2020",
                'mesto_id'=>"2",
                'countries_id'=>"1",
                'kontaktna_osoba'=>"Jožo"
                ]);
                DB::table('univerzita')->insert([
                    'nazov'=>"University London",
                    'zmluva_od'=>"15.12.2019",
                    'zmluva_do'=>"23.03.2020",
                    'mesto_id'=>"3",
                    'countries_id'=>"2",
                    'kontaktna_osoba'=>"Jožo"
                    ]);
    }
}
