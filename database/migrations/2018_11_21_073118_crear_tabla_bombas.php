<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBombas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bombas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo',10);
            $table->float('costo',10,2);
            $table->string('marca');
            $table->string('modelo');
            $table->float('alto',10,2);
            $table->float('peso',10,2);
            $table->float('ancho',10,2);
            $table->integer('velocidad');
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
        Schema::dropIfExists('Bombas');
    }
}
