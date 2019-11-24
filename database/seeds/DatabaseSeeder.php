<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PostsSeeder::class); 
        $this->call(TagsSeeder::class);
        $this->call(post_tagSeeder::class);
        $this->call(TypKontaktuSeeder::class);
        $this->call(KontaktSeeder::class);
        
        
        
    }
}
