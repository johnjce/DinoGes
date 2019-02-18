<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sedes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_sede');
            $table->string('tipo');
            $table->string('tienda');
            $table->string('comentarios_cgp');
            $table->string('num');
            $table->string('horario');
            $table->string('tipo_via');
            $table->string('domicilio');
            $table->string('observaciones');
            $table->string('cp');
            $table->string('poblacion');
            $table->string('municipio');
            $table->string('isla');
            $table->string('coordenadas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sedes');
    }
}
