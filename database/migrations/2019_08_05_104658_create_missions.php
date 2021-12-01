<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sujet')->default('ab');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('destination');
            $table->string('nom_accompagnant');
            $table->string('prenom_accompagnant');
            $table->integer('id_voiture');
            
            $table->integer('id_chauffeur');
            
            $table->integer('id_d');
            
            $table->integer('id_f');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
