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
        $this->call(roleSeeder::class);
        $this->call(equipeSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
