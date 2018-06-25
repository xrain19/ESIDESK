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

        DB::table('users')->insert([
            'lastname' => 'El Jaziri',
            'firstname' => 'Eddy',
            'password' => Hash::make('Eddy'),
            'email' => 'eddy@esidesk.fr',
            'role_id' => 2
        ]);

        DB::table('users')->insert([
            'lastname' => 'Michelon',
            'firstname' => 'Henry',
            'password' => Hash::make('Henry'),
            'email' => 'henry@esidesk.fr',
            'role_id' => 3
        ]);

        DB::table('users')->insert([
            'lastname' => 'Dupond',
            'firstname' => 'Julien',
            'password' => Hash::make('Julien'),
            'email' => 'julien@esidesk.fr',
            'role_id' => 3
        ]);

        DB::table('users')->insert([
            'lastname' => 'Creton',
            'firstname' => 'Olivier',
            'password' => Hash::make('Olivier'),
            'email' => 'olivier@esidesk.fr',
            'role_id' => 3
        ]);

        DB::table('users')->insert([
            'lastname' => 'Michel',
            'firstname' => 'Jean',
            'password' => Hash::make('Jean'),
            'email' => 'jean@esidesk.fr',
            'role_id' => 3
        ]);
    }
}
