<?php

use Illuminate\Database\Seeder;

class MestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('mesto')->insert([
            'nazov'=>"Bratislava",
            'countries_id'=>"1"
            ]);
        DB::table('mesto')->insert([
            'nazov'=>"Nitra",
            'countries_id'=>"1"
            ]);
            DB::table('mesto')->insert([
                'nazov'=>"Londýn",
                'countries_id'=>"2"
                ]);
    }
}
