<?php

use Illuminate\Database\Seeder;

class TypKontaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typ_kontaktu")->insert([
            'typ_kontaktu' => "Katedrový koordinátor",
        ]);
        DB::table("typ_kontaktu")->insert([
            'typ_kontaktu' => "Fakultný koordinátor",
        ]);
        DB::table("typ_kontaktu")->insert([
            'typ_kontaktu' => "Študentský ambasádor programu",
        ]);
    }
}
