<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCotizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->integer('validez');
            $table->decimal('pago',9,3);
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('producto'); 
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
        Schema::dropIfExists('cotizacion');
    }
}
