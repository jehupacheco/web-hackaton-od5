<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_tipo', function (Blueprint $table) {
            $table->integer('idEvento')->unsigned();
            $table->foreign('idEvento')->references('id')->on('eventos');
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
