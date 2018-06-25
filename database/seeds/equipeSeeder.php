<?php

use Illuminate\Database\Seeder;

class equipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'name' => 'Administrateur',
            'manager_id' => 1
        ]);

        DB::table('equipes')->insert([
            'name' => 'Réseau',
            'manager_id' => 2
        ]);

        DB::table('equipes')->insert([
            'name' => 'Virtualisation',
            'manager_id' => 3
        ]);

        DB::table('equipes')->insert([
            'name' => 'DBA',
            'manager_id' => 4
        ]);

        DB::table('equipes')->insert([
            'name' => 'stockage',
            'manager_id' => 5
        ]);

        DB::table('equipes')->insert([
            'name' => 'Linux',
            'manager_id' => 6
        ]);

        DB::table('equipes')->insert([
            'name' => 'Windows',
            'manager_id' => 7
        ]);

        DB::table('equipes')->insert([
            'name' => 'AIX',
            'manager_id' => 8
        ]);

        DB::table('equipes')->insert([
            'name' => 'Datacenter',
            'manager_id' => 9
        ]);
    }
}
