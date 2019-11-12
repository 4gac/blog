<?php

use Illuminate\Database\Seeder;

class PosthastagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posthastags')->insert([
            'post_id'=>"1",
            'tag_id'=>"1"
            ]);
            DB::table('posthastags')->insert([
                'post_id'=>"2",
                'tag_id'=>"2"
                ]);
                DB::table('posthastags')->insert([
                    'post_id'=>"3",
                    'tag_id'=>"3"
                    ]);
    }
}
