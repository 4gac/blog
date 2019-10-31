<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MobilitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("mobilita")->insert([
            'nazov_mobility' => "Spoznavaj Nemecko",
            'zaciatok_mobility' => Carbon::parse('2000-01-01'),
            'koniec_mobility' => Carbon::parse('2015-01-01'),
            'pouzivatel_idpouzivatel' => 1,
            'vyzva_idvyzva' => 1,
        ]);
    }
}
