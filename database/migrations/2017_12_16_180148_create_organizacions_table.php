<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',250);
            $table->string('imagen',250)->nullable();
            $table->string('ubicacion',250)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('correo',250)->nullable();
            $table->string('encargado',150)->nullable();
            $table->text('descripcion')->nullable();
            $table->time('comienzoAtencion')->nullable();
            $table->time('finAtencion')->nullable();
            $table->string('paginaWeb',250)->nullable();
            $table->float('nivel');
            $table->string('banner', 250)->nullable();
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
        Schema::dropIfExists('organizacions');
    }
}
