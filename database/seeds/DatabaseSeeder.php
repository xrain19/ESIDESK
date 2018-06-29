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
        $this->call(StatutsSeeder::class);
        $this->call(CategorieSeeder::class);

        DB::table('users')->insert([
            'lastname' => 'El Jaziri',
            'firstname' => 'Eddy',
            'password' => Hash::make('Eddy'),
            'email' => 'eddy@esidesk.fr',
            'role_id' => 2,
            'equipe_id' => 2
        ]);

        DB::table('users')->insert([
            'lastname' => 'Michelon',
            'firstname' => 'Henry',
            'password' => Hash::make('Henry'),
            'email' => 'henry@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 3
        ]);

        DB::table('users')->insert([
            'lastname' => 'Dupond',
            'firstname' => 'Julien',
            'password' => Hash::make('Julien'),
            'email' => 'julien@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 4
        ]);

        DB::table('users')->insert([
            'lastname' => 'Creton',
            'firstname' => 'Olivier',
            'password' => Hash::make('Olivier'),
            'email' => 'olivier@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 5
        ]);

        DB::table('users')->insert([
            'lastname' => 'Michel',
            'firstname' => 'Jean',
            'password' => Hash::make('Jean'),
            'email' => 'jean@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 6
        ]);

        DB::table('users')->insert([
            'lastname' => 'Hermes',
            'firstname' => 'Alexis',
            'password' => Hash::make('Alexis'),
            'email' => 'alexis@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 7
        ]);

        DB::table('users')->insert([
            'lastname' => 'Maio',
            'firstname' => 'Mathieu',
            'password' => Hash::make('Mathieu'),
            'email' => 'mathieu@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 8
        ]);

        DB::table('users')->insert([
            'lastname' => 'Jacquiet',
            'firstname' => 'Thibault',
            'password' => Hash::make('Thibault'),
            'email' => 'thibault@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 9
        ]);

        DB::table('users')->insert([
            'lastname' => 'Maux',
            'firstname' => 'Gregoire',
            'password' => Hash::make('Gregoire'),
            'email' => 'gregoire@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 9
        ]);

        DB::table('users')->insert([
            'lastname' => 'Leonforte',
            'firstname' => 'Lucas',
            'password' => Hash::make('Lucas'),
            'email' => 'Lucas@esidesk.fr',
            'role_id' => 1
        ]);
    }
}
