<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioVozsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servicio_vozs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ID_SEDE');
            $table->string('TIPO_TIENDA');
            $table->string('IP_EDC_LAN_VOZ');
            $table->string('BJ');
            $table->string('RAI');
            $table->string('MODULO');
            $table->string('NODO');
            $table->string('CRISTAL/ALVEOLO');
            $table->string('PLACA_MIX');
            $table->string('PLACA_SLI');
            $table->string('IP_PLACA_GD');
            $table->string('ENTIDAD');
            $table->string('GRUPO_DE_ENLACE');
            $table->string('TELF');
            $table->string('FAX');
            $table->string('MÓVIL');
            $table->string('SMARTPHONE');
            $table->string('IP');
            $table->string('CARP');
            $table->string('IP_Teléfono');
            $table->string('FAMITEL');
            $table->string('DDIs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servicio_vozs');
    }

}
