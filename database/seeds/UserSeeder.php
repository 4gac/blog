<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('users')->insert([
        'name'=>"admin",
        'lastname'=>"adminovsky",
        'email'=>'admin@admin.sk',
        'password'=>bcrypt('admin123'),
        'role'=>'admin'

    ]);
    }
}
