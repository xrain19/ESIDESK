<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrateur',
            ]);

        DB::table('roles')->insert([
            'name' => 'Simple utilisateur',
        ]);

        DB::table('roles')->insert([
            'name' => 'Manager',
        ]);

        DB::table('roles')->insert([
            'name' => 'viewver',
        ]);
    }
}
