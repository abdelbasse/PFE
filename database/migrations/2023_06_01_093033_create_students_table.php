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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('codeMasser');
            $table->string('nom');
            $table->string('prenom');
            $table->string('numTel');
            $table->string('email');
            $table->date('dateNaissence');
            $table->string('adresse');
            $table->string('ville');
            $table->string('codePostal');
            $table->integer('idClasse');
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
        Schema::dropIfExists('students');
    }
};
