<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::create('numeros', function (Blueprint $table) {
            $table->increments('id_numero');
            $table->unsignedTinyInteger('f1c1')->required();
            $table->unsignedTinyInteger('f1c2')->required();
            $table->unsignedTinyInteger('f1c3')->required();
            $table->unsignedTinyInteger('f1c4')->required();
            $table->unsignedTinyInteger('f1c5')->required();
            $table->unsignedTinyInteger('f1c6')->required();
            $table->unsignedTinyInteger('f2c1')->required();
            $table->unsignedTinyInteger('f2c2')->required();
            $table->unsignedTinyInteger('f2c3')->required();
            $table->unsignedTinyInteger('f2c4')->required();
            $table->unsignedTinyInteger('f2c5')->required();
            $table->unsignedTinyInteger('f2c6')->required();
            $table->unsignedTinyInteger('f3c1')->required();
            $table->unsignedTinyInteger('f3c2')->required();
            $table->unsignedTinyInteger('f3c3')->required();
            $table->unsignedTinyInteger('f3c4')->required();
            $table->unsignedTinyInteger('f3c5')->required();
            $table->unsignedTinyInteger('f3c6')->required();
            $table->unsignedTinyInteger('f4c1')->required();
            $table->unsignedTinyInteger('f4c2')->required();
            $table->unsignedTinyInteger('f4c3')->required();
            $table->unsignedTinyInteger('f4c4')->required();
            $table->unsignedTinyInteger('f4c5')->required();
            $table->unsignedTinyInteger('f4c6')->required();
            $table->date('fecha')->required()->unique();
            $table->timestamps();
        });

        /*
        Schema::create('numeros', function (Blueprint $table) {
            $table->increments('id_numero');
            $table->unsignedTinyInteger('valor')->required();
            $table->timestamps();
        });*/



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeros');
    }
}
