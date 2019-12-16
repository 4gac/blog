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
        DB::table('contact_models')->insert([
            //'titul_pre'=>"Ing.",
            'meno_kontaktu'=>"Anita",
            'priezvisko_kontaktu'=>"Garajova",
            //'titul_post'=>"PHD.",
            'email'=>"agarajova@ukf.sk",
            'tel_cislo'=>"+421 37 6408 031",
            'idtypKontaktu'=>"1",
          
            ]);
        
            DB::table('contact_models')->insert([
                //'titul_pre'=>"Ing.",
                'meno_kontaktu'=>"Anita",
                'priezvisko_kontaktu'=>"Garajova",
                //'titul_post'=>"PHD.",
                'email'=>"agarajova@ukf.sk",
                'tel_cislo'=>"+421 37 6408 031",
                'idtypKontaktu'=>"2",
              
                ]);
                DB::table('contact_models')->insert([
                    //'titul_pre'=>"Ing.",
                    'meno_kontaktu'=>"Anita",
                    'priezvisko_kontaktu'=>"Garajova",
                    //'titul_post'=>"PHD.",
                    'email'=>"agarajova@ukf.sk",
                    'tel_cislo'=>"+421 37 6408 031",
                    'idtypKontaktu'=>"3",
                  
                    ]);
            
        
    }

}

