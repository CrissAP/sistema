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
        dd(ProfessionSeeder::class);

        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        
    }
}
