<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentilador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventilador', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('producto');          
            $table->string('marca');
            $table->string('modelo');
            $table->float('capacidad',10,2);
            $table->float('medida',10,2);
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
        Schema::dropIfExists('ventilador');
    }
}
