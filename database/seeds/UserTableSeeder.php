<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'equipe_id' => 7
        ]);

        DB::table('users')->insert([
            'lastname' => 'Jacquiet',
            'firstname' => 'Thibault',
            'password' => Hash::make('Thibault'),
            'email' => 'thibault@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 8
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
            'role_id' => 1,
            'equipe_id' => 10
        ]);

        DB::table('users')->insert([
            'lastname' => 'Giraud',
            'firstname' => 'Elsa',
            'password' => Hash::make('Elsa'),
            'email' => 'elsagiraud@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 7
        ]);

        DB::table('users')->insert([
            'lastname' => 'Lelievre',
            'firstname' => 'Adrien',
            'password' => Hash::make('Adrien'),
            'email' => 'adrienlelievre@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 10
        ]);

        DB::table('users')->insert([
            'lastname' => 'Gros',
            'firstname' => 'Roméo',
            'password' => Hash::make('Roméo'),
            'email' => 'romeogros@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 2
        ]);

        DB::table('users')->insert([
            'lastname' => 'Aubert',
            'firstname' => 'Maëlle',
            'password' => Hash::make('Maëlle'),
            'email' => 'maelleaubert@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 12
        ]);

        DB::table('users')->insert([
            'lastname' => 'Rault',
            'firstname' => 'Alexandra',
            'password' => Hash::make('Alexandra'),
            'email' => 'alexandrarault@esidesk.fr',
            'role_id' => 2,
            'equipe_id' => 6
        ]);

        DB::table('users')->insert([
            'lastname' => 'Jacob',
            'firstname' => 'Manon',
            'password' => Hash::make('Manon'),
            'email' => 'manonjacob@esidesk.fr',
            'role_id' => 2,
            'equipe_id' => 1
        ]);

        DB::table('users')->insert([
            'lastname' => 'Combes',
            'firstname' => 'Lily',
            'password' => Hash::make('Lily'),
            'email' => 'lilycombes@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 2
        ]);

        DB::table('users')->insert([
            'lastname' => 'Michel',
            'firstname' => 'Léon',
            'password' => Hash::make('Léon'),
            'email' => 'leonmichel@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 2
        ]);

        DB::table('users')->insert([
            'lastname' => 'Paul',
            'firstname' => 'Nolan',
            'password' => Hash::make('Nolan'),
            'email' => 'nolanpaul@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 4
        ]);

        DB::table('users')->insert([
            'lastname' => 'Bailly',
            'firstname' => 'Renaud',
            'password' => Hash::make('Renaud'),
            'email' => 'renaudbailly@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 13
        ]);

        DB::table('users')->insert([
            'lastname' => 'Dumas',
            'firstname' => 'Gaspard',
            'password' => Hash::make('Gaspard'),
            'email' => 'gasparddumas@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 15
        ]);

        DB::table('users')->insert([
            'lastname' => 'Louis',
            'firstname' => 'Paul',
            'password' => Hash::make('Paul'),
            'email' => 'paullouis@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 14
        ]);

        DB::table('users')->insert([
            'lastname' => 'Couturier',
            'firstname' => 'Alicia',
            'password' => Hash::make('Alicia'),
            'email' => 'aliciacouturier@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 9
        ]);

        DB::table('users')->insert([
            'lastname' => 'Ferrand',
            'firstname' => 'Alexis',
            'password' => Hash::make('Alexis'),
            'email' => 'alexisferrand@esidesk.fr',
            'role_id' => 4,
            'equipe_id' => 5
        ]);

        DB::table('users')->insert([
            'lastname' => 'Paris',
            'firstname' => 'Théo',
            'password' => Hash::make('Théo'),
            'email' => 'theoparis@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 16
        ]);

        DB::table('users')->insert([
            'lastname' => 'Pujol',
            'firstname' => 'Angelina',
            'password' => Hash::make('Angelina'),
            'email' => 'angelinapujol@esidesk.fr',
            'role_id' => 2,
            'equipe_id' => 12
        ]);

        DB::table('users')->insert([
            'lastname' => 'Wagner',
            'firstname' => 'Lauriane',
            'password' => Hash::make('Lauriane'),
            'email' => 'laurianewagner@esidesk.fr',
            'role_id' => 2,
            'equipe_id' => 12
        ]);

        DB::table('users')->insert([
            'lastname' => 'Maury',
            'firstname' => 'Emma',
            'password' => Hash::make('Emma'),
            'email' => 'emmamaury@esidesk.fr',
            'role_id' => 1,
            'equipe_id' => 11
        ]);

        DB::table('users')->insert([
            'lastname' => 'Vallee',
            'firstname' => 'Elsa',
            'password' => Hash::make('Elsa'),
            'email' => 'elsavallee@esidesk.fr',
            'role_id' => 3,
            'equipe_id' => 13
        ]);
    }
}
