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
    }
}
