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
        Schema::create('type_praticien', function (Blueprint $table) {
            $table->string('TYP_CODE', 3)->nullable();
            $table->string('TYP_LIBELLE', 25)->nullable();
            $table->string('TYP_LIEU', 35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_praticien');
    }
};
