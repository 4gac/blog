<?php

use Illuminate\Database\Seeder;

class SpravaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sprava")->insert([
            'pouzivatel_idpouzivatel' => 1,
            'mobilita_idmobilita' => 1,
        ]);
    }
}
