<?php

use Illuminate\Database\Seeder;

class RolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rola")->insert([
         'nazov_role' => "Administrátor",
        ]);
        DB::table("rola")->insert([
            'nazov_role' => "Študent",
        ]);
    }
}
