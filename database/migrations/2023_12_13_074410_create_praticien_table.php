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
        Schema::create('praticien', function (Blueprint $table) {
            $table->smallInteger('PRA_NUM')->nullable();
            $table->string('PRA_NOM', 25)->nullable();
            $table->string('PRA_PRENOM', 30)->nullable();
            $table->string('PRA_ADRESSE', 50)->nullable();
            $table->string('PRA_CP', 5)->nullable();
            $table->string('PRA_VILLE', 25)->nullable();
            $table->float('PRA_COEFNOTORIETE', 10, 0)->nullable();
            $table->string('TYP_CODE', 3)->nullable();

            // Ajoutez cette ligne pour définir la clé étrangère
            $table->foreign('TYP_CODE')->references('TYP_CODE')->on('type_praticien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praticien');
    }
};
