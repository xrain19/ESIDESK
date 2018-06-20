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
            'name' => 'Réseau',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Virtualisation',
        ]);

        DB::table('equipes')->insert([
            'name' => 'DBA',
        ]);

        DB::table('equipes')->insert([
            'name' => 'stockage',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Linux',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Windows',
        ]);

        DB::table('equipes')->insert([
            'name' => 'AIX',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Datacenter',
        ]);
    }
}
