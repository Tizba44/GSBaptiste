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
        Schema::create('posseder', function (Blueprint $table) {
            $table->smallInteger('PRA_NUM')->nullable();
            $table->string('SPE_CODE', 5)->nullable();
            $table->string('POS_DIPLOME', 10)->nullable();
            $table->float('POS_COEFPRESCRIPTION', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posseder');
    }
};
