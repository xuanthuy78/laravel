<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breed')->insert([
        	['name'=>'Husky'],
        	['name'=>'Alaska'],
        	['name'=>'Pomeranian'],

        ]);
    }

}
