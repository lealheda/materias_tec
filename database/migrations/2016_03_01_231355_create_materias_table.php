<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->boolean('activo');
            $table->integer('user_id')->unsigned();
            //$table->integer('unidad_id')->unsigned();
            //$table->integer('carrera_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('unidad_id')->references('id')->on('unidades')->onDelete('cascade');
            //$table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            
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
        Schema::drop('materias');
    }
}
