<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoipsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('coips', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ID_SEDE');
            $table->string('PETICIÓN');
            $table->string('TIPO_TIENDA');
            $table->string('IP_EDC_LAN_VOZ');
            $table->string('BJ_ALTA_MOD');
            $table->string('MATERIAL');
            $table->string('RAI');
            $table->string('MOD');
            $table->string('OOSS_NGN');
            $table->string('Regularización/Ampliación');
            $table->string('CAP_SOLICITADA');
            $table->string('CAP_INSTALADA');
            $table->string('EXTENSIONES');
            $table->string('ENTIDAD');
            $table->string('DOMINIO');
            $table->string('RANGO_NUMERACIÓN');
            $table->string('DDIs');
            $table->string('CABECERA');
            $table->string('FAX');
            $table->string('MÓVIL');
            $table->string('SMARTPHONE');
            $table->string('TERMINAL_IP');
            $table->string('MODELO');
            $table->string('OBSERVACIONES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('coips');
    }

}
