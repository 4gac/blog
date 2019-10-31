<?php

use Illuminate\Database\Seeder;

class InfoSpravySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("info_spravy")->insert([
            'kategoria_spravy' => "Čo pred odchodom ?",
            'text_spravy' => "Nemožno zabudnúť na nákup leteniek a bla bla bla bla.",
        ]);
        DB::table("info_spravy")->insert([
            'kategoria_spravy' => "Financovanie",
            'text_spravy' => "Ako pri každom pobyte, aj tu hradí väčšinu nákladov škola a bla bla bla bla bla",
        ]);
    }
}
