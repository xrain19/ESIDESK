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
            'manager_id' => 1,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Réseau',
            'manager_id' => 2,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Virtualisation',
            'manager_id' => 3,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'DBA',
            'manager_id' => 4,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'stockage',
            'manager_id' => 5,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Linux',
            'manager_id' => 6,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'AIX',
            'manager_id' => 8,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Datacenter',
            'manager_id' => 9,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Technicien/ne télécoms et réseaux',
            'manager_id' => 24,
            'actived' => true
        ]);


        DB::table('equipes')->insert([
            'name' => 'Administrateur/trice de base de données',
            'manager_id' => 11,
            'actived' => true
        ]);


        DB::table('equipes')->insert([
            'name' => 'Ingénieur/e télécoms et réseaux',
            'manager_id' => 29,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Ingénieur/e système',
            'manager_id' => 27,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Gestionnaire de parc micro-informatique',
            'manager_id' => 30,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Chef/fe de projet informatique',
            'manager_id' => 23,
            'actived' => true
        ]);


        DB::table('equipes')->insert([
            'name' => 'Ingénieur/e en métrologie',
            'manager_id' => 22,
            'actived' => true
        ]);

        DB::table('equipes')->insert([
            'name' => 'Administrateur/trice de réseau',
            'manager_id' => 26,
            'actived' => true
        ]);

    }
}
