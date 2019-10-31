<?php

use Illuminate\Database\Seeder;

class TypVyzvySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typ_vyzvy")->insert([
            'typ_vyzvy' => "Študijný pobyt",
        ]);
        DB::table("typ_vyzvy")->insert([
            'typ_vyzvy' => "Stáž",
        ]);
    }
}
