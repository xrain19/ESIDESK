<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lastname' => 'Administrateur',
            'firstname' => 'Administrateur',
            'password' => Hash::make('Administrateur'),
            'email' => 'administrateur@esidesk.fr',
            'role_id' => 1
        ]);
    }
}
