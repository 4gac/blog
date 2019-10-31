<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KoloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("kolo")->insert([
            'rocnik' => "2019/2020",
            'semester' => "Z",
            'vyzva_idvyzva' => 1,
            'zaciatok_kola' => Carbon::parse('2000-01-01'),
            'koniec_kola' => Carbon::parse('1999-01-01'),
        ]);
    }
}
