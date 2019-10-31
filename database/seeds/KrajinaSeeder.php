<?php

use Illuminate\Database\Seeder;

class KrajinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("krajina")->insert([
            'nazov_krajiny' => "Slovensko",
            'informacia_o_krajine' => "Je to krajína v strednej európe ... bla bla",
            'kontinent_idkontinent' => 1,
            'subor_idsubor' => 1,
        ]);
    }
}
