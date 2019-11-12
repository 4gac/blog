<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name'=>"Študijné pobyty"
            ]);

        DB::table('tags')->insert([
            'name'=>"Pracovné stáže"
            ]);
        DB::table('tags')->insert([
            'name'=>"Účastnícke správy"
            ]);
        DB::table('tags')->insert([
        'name'=>"Hodnotenia"
                ]);
    }
}
