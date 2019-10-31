<?php

use Illuminate\Database\Seeder;

class VyzvaInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vyzva_info")->insert([
            'kategoria' => "Základné informácie",
            'text_v_kategorii' => "Táto výzva sa ponúka študentom vysokej školy, aj externým a bla bla bla",
        ]);
    }
}
