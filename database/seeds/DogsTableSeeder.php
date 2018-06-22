<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('dogs')->insert([
        	['name'=>'Lulu','price'=>'1000', 'breed_id'=>1],
        	['name'=>'Moon', 'price'=>'150', 'breed_id'=>2],
        ]);
    }
}
