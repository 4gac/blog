<?php

use Illuminate\Database\Seeder;

class KontinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("kontinent")->insert([
            'nazov_kontinentu' => "Afrika",
        ]);
        DB::table("kontinent")->insert([
            'nazov_kontinentu' => "Australia",
        ]);
    }
}
