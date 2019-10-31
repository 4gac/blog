<?php

use Illuminate\Database\Seeder;

class SuborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subor")->insert([
            'adresa' => "/foto/notWorking/",
            'nazov_suboru' => "foto.png",
            'sprava_idsprava' => 1,
            'typSuboru_idtypSuboru' => 1,
        ]);
    }
}
