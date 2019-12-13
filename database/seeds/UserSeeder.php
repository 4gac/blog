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
    DB::table('users')->insert([
        'name'=>"referent",
        'lastname'=>"referent",
        'email'=>'referent@referent.sk',
        'password'=>bcrypt('referent123'),
        'role'=>'referent'
    ]);
    
    DB::table('users')->insert([
        'name'=>"pouzivatel",
        'lastname'=>"pouzivatel",
        'email'=>'pouzivatel@pouzivatel.sk',
        'password'=>bcrypt('pouzivatel123'),
        'role'=>'pouzivatel'
    ]);
    }
}
