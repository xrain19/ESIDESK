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
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Réseau',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Virtualisation',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'DBA',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'stockage',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Linux',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Windows',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'AIX',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);

        DB::table('equipes')->insert([
            'name' => 'Datacenter',
            'manager_id' => 2,
            'member_id' => 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:1:"6";}',
        ]);
    }
}
