<?php

use Illuminate\Database\Seeder;

class StatutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert([
            'name' => 'En attente de validation',
        ]);

        DB::table('statuts')->insert([
            'name' => 'Validée, en attente de prise en charge',
        ]);

        DB::table('statuts')->insert([
            'name' => 'Rejetée',
        ]);

        DB::table('statuts')->insert([
            'name' => 'En cour de traitement',
        ]);

        DB::table('statuts')->insert([
            'name' => 'Traitée et cloturée',
        ]);
    }
}
