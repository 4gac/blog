<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

         $this->call(RolaSeeder::class);
         $this->call(PouzivatelSeeder::class);
         $this->call(KontinentSeeder::class);
         $this->call(TypSuboruSeeder::class);
         $this->call(InfoSpravySeeder::class);
         $this->call(TypVyzvySeeder::class);
         $this->call(VyzvaSeeder::class);
         $this->call(MobilitaSeeder::class);
         $this->call(TypKontaktuSeeder::class);
         $this->call(SpravaSeeder::class);
         $this->call(InfoVSpraveSeeder::class);
         $this->call(SuborSeeder::class);
         $this->call(KrajinaSeeder::class);
         $this->call(UniverzitaSeeder::class);
         $this->call(VyzvaInfoSeeder::class);
         $this->call(InfoVyzvaSeeder::class);
         $this->call(VyzvaInfoSeeder::class);
         $this->call(KoloSeeder::class);
         $this->call(KontaktSeeder::class);


        //factory(App\User::class,2)->create();
       // factory(App\Post::class,3)->create();
        Model::reguard();

    }
}
