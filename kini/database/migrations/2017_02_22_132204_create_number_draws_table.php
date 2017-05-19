<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeros_sorteos', function (Blueprint $table) {
            $table->unsignedInteger('id_numero');
            $table->foreign('id_numero')->references('id_numero')->on('numeros')->onDelete('cascade');
            $table->unsignedInteger('id_sorteo');
            $table->foreign('id_sorteo')->references('id_sorteo')->on('sorteos')->onDelete('cascade');
            $table->primary(['id_numero','id_sorteo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeros_sorteos');
    }
}
