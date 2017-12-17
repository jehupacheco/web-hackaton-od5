<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicioTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tipo', function (Blueprint $table) {
            $table->integer('idServicio')->unsigned();
            $table->foreign('idServicio')->references('id')->on('servicios');
            $table->integer('idTipo')->unsigned();
            $table->foreign('idTipo')->references('id')->on('tipo_atencions');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
