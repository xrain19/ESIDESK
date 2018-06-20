<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('role_id')->unsigned()->index();
            $table->foreign('role_id')->references('id')->on('roles');

            $table->integer('equipe_id')->unsigned()->index()->nullable();
            $table->foreign('equipe_id')->references('id')->on('equipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
