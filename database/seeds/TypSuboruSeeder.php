<?php

use Illuminate\Database\Seeder;

class TypSuboruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typ_suboru")->insert([
        'typ' => "Obrázok",
    ]);
        DB::table("typ_suboru")->insert([
            'typ' => "Text",
        ]);
    }
}
