<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',250);
            $table->string('ubicacion',250);
            $table->float('costo',8,2);
            $table->text('descripcion');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('capacidad');
            $table->integer('idOrganizacion')->unsigned();
            $table->timestamps();
            $table->foreign('idOrganizacion')->references('id')->on('organizacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
