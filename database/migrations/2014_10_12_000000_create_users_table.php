<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // Ajout des ancien champs de la table Visiteur
            $table->string('VIS_MATRICULE', 10)->nullable();
            $table->string('VIS_NOM', 25);
            $table->string('VIS_PRENOM', 50);
            $table->string('VIS_ADRESSE', 50)->nullable();
            $table->string('VIS_CP', 5)->nullable();
            $table->string('VIS_VILLE', 30)->nullable();
            $table->dateTime('VIS_DATEEMBAUCHE')->nullable();
            $table->string('SEC_CODE', 1)->nullable();
            $table->string('LAB_CODE', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
