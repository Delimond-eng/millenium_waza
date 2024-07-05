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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('status')->default('actif');
            $table->unsignedBigInteger('user_id')->comment('session user');
            $table->unsignedBigInteger('manager_id')->comment('user that manage mission');
            $table->unsignedBigInteger('collaborateur_id')->comment('user that execute mission');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('client_id')->nullable();
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
};
