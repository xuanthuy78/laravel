<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('users')->truncate();
        DB::table('users')->insert([
        	['name'=>'James', 'email'=>'jaffmes@gmail.com', 'password'=>'123'],
        	['name'=>'Sames', 'email'=>'Sddames@gmail.com', 'password'=>'123'],
        ]);
    }
}
