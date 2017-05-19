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
        
        /*
        Schema::create('numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('numr1c1')->required();
            $table->unsignedTinyInteger('numr1c2')->required();
            $table->unsignedTinyInteger('numr1c3')->required();
            $table->unsignedTinyInteger('numr1c4')->required();
            $table->unsignedTinyInteger('numr1c5')->required();
            $table->unsignedTinyInteger('numr1c6')->required();
            $table->unsignedTinyInteger('numr2c1')->required();
            $table->unsignedTinyInteger('numr2c2')->required();
            $table->unsignedTinyInteger('numr2c3')->required();
            $table->unsignedTinyInteger('numr2c4')->required();
            $table->unsignedTinyInteger('numr2c5')->required();
            $table->unsignedTinyInteger('numr2c6')->required();
            $table->unsignedTinyInteger('numr3c1')->required();
            $table->unsignedTinyInteger('numr3c2')->required();
            $table->unsignedTinyInteger('numr3c3')->required();
            $table->unsignedTinyInteger('numr3c4')->required();
            $table->unsignedTinyInteger('numr3c5')->required();
            $table->unsignedTinyInteger('numr3c6')->required();
            $table->unsignedTinyInteger('numr4c1')->required();
            $table->unsignedTinyInteger('numr4c2')->required();
            $table->unsignedTinyInteger('numr4c3')->required();
            $table->unsignedTinyInteger('numr4c4')->required();
            $table->unsignedTinyInteger('numr4c5')->required();
            $table->unsignedTinyInteger('numr4c6')->required();
            $table->date('date')->required()->unique();
            $table->timestamps();
        });*/


        Schema::create('numeros', function (Blueprint $table) {
            $table->increments('id_numero');
            $table->unsignedTinyInteger('valor')->required();
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
        Schema::dropIfExists('numeros');
    }
}
