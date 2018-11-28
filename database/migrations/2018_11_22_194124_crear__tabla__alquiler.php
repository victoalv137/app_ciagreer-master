<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlquiler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('obra');
            $table->integer('tiempo');
            $table->string('partida');
            $table->string('llegada');
            $table->unsignedInteger('cotizacion_id');
            $table->foreign('cotizacion_id')->references('id')->on('cotizacion');
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente');            
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
        Schema::dropIfExists('alquiler');
    }
}
