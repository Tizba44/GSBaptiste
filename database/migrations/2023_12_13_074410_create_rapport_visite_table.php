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
        Schema::create('rapport_visite', function (Blueprint $table) {
            // $table->string('VIS_MATRICULE', 10)->nullable();
            // $table->integer('RAP_NUM')->nullable();
            $table->smallInteger('PRA_NUM')->nullable();
            $table->dateTime('RAP_DATE')->nullable();
            $table->text('RAP_BILAN')->nullable();
            $table->string('RAP_MOTIF')->nullable();
            $table->string('RAP_MEDICAMENT')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('users_id')->nullable();
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapport_visite');
    }
};
