<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dventa', function (Blueprint $table) {
            $table->increments('id'); 
            $table->unsignedInteger('venta_id');
            $table->foreign('venta_id')->references('id')->on('venta');   
            $table->unsignedInteger('repuesto_id');
            $table->foreign('repuesto_id')->references('id')->on('repuesto');    
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
        Schema::dropIfExists('dventa');
    }
}
