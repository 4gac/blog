<?php

use Illuminate\Database\Seeder;

class VyzvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vyzva")->insert([
            'nazov_vyzvy' => "Hong kong, Čína a krásna Ázia",
            'typVyzvy_idtypVyzvy' =>1,
            'cesta_hlavna_foto' => "asd/foto/asd.png",
        ]);
    }
}
