<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',250)->nullable();
            $table->string('imagen',250)->nullable();;
            $table->float('costo',8,2)->nullable();;
            $table->text('descripcion')->nullable();;
            $table->time('comienzoAtencion')->nullable();;
            $table->time('finAtencion')->nullable();;
            $table->integer('nivel')->nullable();;
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
        Schema::dropIfExists('servicios');
    }
}
