<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('urgency');
            $table->boolean('closed')->default(false);
            $table->date('desired_date');
            $table->date('processing_date')->nullable();
            $table->integer('processor_id')->nullable();
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('equipe_id')->unsigned();
            $table->foreign('equipe_id')->references('id')->on('equipes');

            $table->integer('statut_id')->unsigned()->default(1);
            $table->foreign('statut_id')->references('id')->on('statuts');

            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}