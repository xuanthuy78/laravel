<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BreedsTableSeeder::class);
        $this->call(DogsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        

    }
}
