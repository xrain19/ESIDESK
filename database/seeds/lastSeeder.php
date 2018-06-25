<?php

use Illuminate\Database\Seeder;
use App\Equipe;
use App\User;

class lastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipe = Equipe::whereName('Administrateur')->first();
        $equipe->manager_id = User::whereFirstname('Administrateur')->first()->id;
        $equipe->save();
    }
}
