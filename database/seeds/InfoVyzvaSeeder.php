<?php

use Illuminate\Database\Seeder;

class InfoVyzvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("info_vyzvy")->insert([
            'vyzva_idvyzva' => 1,
            'vyzvaInfo_idvyzvaInfo' =>1,
        ]);
    }
}
