<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'description' => 'Ajout d\'une adresse IP pour un nouveau collaborateur',
            'name' => 'Ouverture IP',
            'equipe_id' => 2
            ]);

        DB::table('categories')->insert([
            'description' => 'Création d\'une Machine Virtuelle clé en main',
            'name' => 'Création d\'une VM',
            'equipe_id' => 3
            ]);

        DB::table('categories')->insert([
            'description' => 'Migration d\'une table Postgres vers une table ORACLE ',
            'name' => 'Migration table SQL',
            'equipe_id' => 4
            ]);

        DB::table('categories')->insert([
            'description' => 'Purge de table spécifiée trop pleine',
            'name' => 'Purge des tables',
            'equipe_id' => 4
        ]);

        DB::table('categories')->insert([
            'description' => 'Récupération de fichier après suppression non souhaitée',
            'name' => 'Récupération de fichier',
            'equipe_id' => 5
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés à un environnement Linux',
            'name' => 'Support Linux',
            'equipe_id' => 6
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés à un environnement Windows',
            'name' => 'Support Windows',
            'equipe_id' => 7
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes matériels, plomberie, électricité',
            'name' => 'Demande d\'intervention sur autre site',
            'equipe_id' => 8
            ]);

        DB::table('categories')->insert([
            'description' => 'Pour tous problèmes liés au DataCenter',
            'name' => 'Support DataCenter',
            'equipe_id' => 9
            ]);


    }
}
