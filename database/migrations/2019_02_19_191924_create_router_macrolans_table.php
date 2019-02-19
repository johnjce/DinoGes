<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouterMacrolansTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('router_macrolans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ID_SEDE');
            $table->string('TIPO_TIENDA');
            $table->string('NEMONICO');
            $table->string('IP_GESTION');
            $table->string('PE_PPL');
            $table->string('PE_BACKUP');
            $table->string('IP_WAN');
            $table->string('INTERFAZ');
            $table->string('VLAN');
            $table->string('RED_DATOS');
            $table->string('RED_VOZ');
            $table->string('ADMINISTRATIVO');
            $table->string('CABECERA');
            $table->string('PEDIDO');
            $table->string('SERVICIO_PPAL');
            $table->string('TECONOLOGIA_PPAL');
            $table->string('VELOCIDAD_PPAL');
            $table->string('IDCALIDADES');
            $table->string('MODELO_EDC');
            $table->string('NUMERO_SERIE_EDC');
            $table->string('LORCET');
            $table->string('ADMINISTRATIVO_VLAN_NACIONAL');
            $table->string('INTERFAZ_BCK');
            $table->string('UBICACIÓN_EN_CDG');
            $table->string('REPARTIDOR_NODO_MLAN');
            $table->string('ASIGNACIÓN_DE_FIBRA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('router_macrolans');
    }

}
