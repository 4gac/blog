<?php

use Illuminate\Database\Seeder;

class InfoVSpraveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("info_v_sprave")->insert([
            'infoSpravy_idinfoSpravy' => 1,
            'sprava_idsprava' => 1,
        ]);
    }
}
