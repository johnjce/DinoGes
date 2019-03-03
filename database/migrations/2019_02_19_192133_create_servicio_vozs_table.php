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
            $table->string('CRISTALALVEOLO');
            $table->string('PLACA_MIX');
            $table->string('PLACA_SLI');
            $table->string('IP_PLACA_GD');
            $table->string('ENTIDAD');
            $table->string('GRUPO_DE_ENLACE');
            $table->string('TELF');
            $table->string('FAX');
            $table->string('MOVIL');
            $table->string('SMARTPHONE');
            $table->string('IP');
            $table->string('CARP0');
            $table->string('IP_Telefono');
            $table->string('FAMITEL');
            $table->string('CARP1');
            $table->string('EXT_2');
            $table->string('CARP2');
            $table->string('FAX2');
            $table->string('CARP3');
            $table->string('EXT_4');
            $table->string('CARP4');
            $table->string('DDI1');
            $table->string('DDI2');
            $table->string('DDI3');
            $table->string('DDI4');
            $table->string('DDI5');
            $table->string('PROVINCIA');
            $table->string('Observaciones');
            $table->string('GD');
            $table->string('MEX');
            $table->string('GA');
            $table->string('MIX');
            $table->string('SLI');
            $table->string('UAI');
            $table->string('T2');
            $table->string('TIPO');
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
