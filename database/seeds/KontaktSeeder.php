<?php

use Illuminate\Database\Seeder;

class KontaktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("kontakt")->insert([
            'email' => "asd@gmail.com",
            'tel_cislo' => "0942652120",
            'meno_kontaktu' => "Testovac",
            'priezvisko_kontaktu' => "Testovaci",
            'typKontaktu_idtypKontaktu' => 1,
        ]);

		DB::table("kontakt")->insert([
            'email' => "juri.benc@gmail.com",
            'tel_cislo' => "0907789456",
            'meno_kontaktu' => "Juraj",
            'priezvisko_kontaktu' => "Benc",
            'typKontaktu_idtypKontaktu' => 1,
        ]);

		DB::table("kontakt")->insert([
            'email' => "typ2@ukf.com",
            'tel_cislo' => "0905859326",
            'meno_kontaktu' => "Icewallow",
            'priezvisko_kontaktu' => "Come",
            'typKontaktu_idtypKontaktu' => 2,
        ]);
    }
}
