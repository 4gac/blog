<?php

use Illuminate\Database\Seeder;

class PouzivatelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pouzivatel")->insert([
            'meno' => "Jozef",
            'priezvisko' => "Mrkvička",
            'rola_idrola' => 1,
        ]);
        DB::table("pouzivatel")->insert([
            'meno' => "Alfonz",
            'priezvisko' => "Kapusta",
            'rola_idrola' => 2,
        ]);
    }
}
