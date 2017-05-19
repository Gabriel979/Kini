<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawsPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteos_posiciones', function (Blueprint $table) {
            $table->unsignedInteger('id_sorteo');
            $table->foreign('id_sorteo')->references('id_sorteo')->on('sorteos')->onDelete('cascade');
            $table->unsignedInteger('id_posicion');
            $table->foreign('id_posicion')->references('id_posicion')->on('posiciones')
            ->onDelete('cascade');
            $table->primary(['id_sorteo','id_posicion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteos_posiciones');
    }
}
