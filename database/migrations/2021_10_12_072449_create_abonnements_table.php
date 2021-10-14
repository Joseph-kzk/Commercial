<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->increments('idabonnement');
            $table->string('entreprise');
            $table->string('personne');
            $table->string('contact');
            $table->string('email');
            $table->string('nature');
            $table->string('etat');
            $table->string('montant');
            $table->string('statut');
            $table->string('observation');
            $table->date('datedebut');
            $table->date('datefin');
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
        Schema::dropIfExists('abonnements');
    }
}
