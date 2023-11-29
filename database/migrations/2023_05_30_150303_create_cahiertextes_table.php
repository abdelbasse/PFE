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
        Schema::create('cahiertextes', function (Blueprint $table) {
            $table->string('numeroSOM');
            $table->integer('idClasse');
            $table->integer('idModule');
            $table->date('date');
            $table->time('heurDebut');
            $table->time('heurFin');
            $table->text('texte');
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
        Schema::dropIfExists('cahiertextes');
    }
};
