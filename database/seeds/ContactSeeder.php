<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{

     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontakt')->insert([
            'titul_pre'=>"Ing.",
            'meno'=>"Anita",
            'priezvisko'=>"Garajova",
            'titul_post'=>"PHD.",
            'email'=>"agarajova@ukf.sk",
            'tel_cislo'=>"+421 37 6408 031",
            'idtypKontaktu'=>"3",
            ]);
            
        DB::table('kontakt')->insert([
            'titul_pre'=>"Ing.",
            'meno'=>"Silvia",
            'priezvisko'=>"Hrozenska",
            'titul_post'=>"PHD.",
            'email'=>"shrozenska@ufk.sk",
            'tel_cislo'=>"+421 37 6408 035",
            'idtypKontaktu'=>"2",
            ]);
        DB::table('kontakt')->insert([
            'titul_pre'=>"Ing.",
            'meno'=>"Katarina",
            'priezvisko'=>"Butorova",
            'titul_post'=>"",
            'email'=>"kbutorova@ufk.sk",
            'tel_cislo'=>"+421 37 6408 031",
            'idtypKontaktu'=>"1",
            ]);        
    }

}

