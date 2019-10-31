<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UniverzitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("univerzita")->insert([
            'nazov_univerzity' => "SPU",
            'mesto' => "Nitra",
            'kontaktna_osoba' => "Alfonz Spu",
            'krajina_idkrajina' => 1,
            'zmluva_do' => Carbon::parse('2000-01-01'),
            'zmluva_od' => Carbon::parse('1999-01-01'),
        ]);
    }
}
