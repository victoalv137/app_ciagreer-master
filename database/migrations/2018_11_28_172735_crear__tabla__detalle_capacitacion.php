<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleCapacitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecapacitacion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('capacitacion_id');
            $table->foreign('capacitacion_id')->references('id')->on('capacitacion');   
            $table->unsignedInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleado'); 
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
        Schema::dropIfExists('detallecapacitacion');
    }
}
