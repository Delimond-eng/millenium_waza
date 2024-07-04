<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exportations', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('position_tarifaire');
            $table->string('cotation');
            $table->string('fob');
            $table->string('fret');
            $table->string('num_bl_lta');
            $table->string('port_destination_id');
            $table->string('date_arrivee');
            $table->string("numero_av");
            $table->string("nombre_colis");
            $table->string("nature_marchandise");
            $table->string("poids_kg");
            $table->string("lieu_livraison");
            $table->string("date_livraison");
            $table->string("status")->default("actif");
            $table->string("observation")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("fournisseur_id");
            $table->unsignedBigInteger("transporteur_id");
            $table->unsignedBigInteger("moyen_expedition_id");
            $table->unsignedBigInteger("client_id");
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
        Schema::dropIfExists('exportations');
    }
};