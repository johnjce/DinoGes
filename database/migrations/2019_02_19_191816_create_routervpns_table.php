<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutervpnsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('routervpns', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('idSede');
            $table->string('backup');
            $table->string('ip');
            $table->string('nemonico');
            $table->string('nemonicoBck');
            $table->string('ipBck');
            $table->string('interfacePOI');
            $table->string('ipWanBck');
            $table->string('comentario');
            $table->string('comentarioBck');
            $table->string('EDCBck');
            $table->string('telefono');
            $table->string('velocidad');
            $table->string('ipWanEDC');
            $table->string('interfaz');
            $table->string('interfazBck');
            $table->string('EDC');
            $table->string('SN');
            $table->string('modalidad');
            $table->string('redDatos');
            $table->string('redVoz');
            $table->string('routing');
            $table->string('tecnologia');
            $table->string('hub');
            $table->string('oro');
            $table->string('plata');
            $table->string('multimedia');
            $table->string('bronce');
            $table->string('vpiVci');
            $table->string('PEppl');
            $table->string('PEbck');
            $table->string('Vlan');
            $table->string('cabecera');
            $table->string('pedido');
            $table->string('servicio');
            $table->string('administrativo');
            $table->string('administrativoBck');
            $table->string('lorcet');
            $table->string('admVlanNaci');
            $table->string('ubicacion');
            $table->string('repartidor');
            $table->string('asigFibra');
            $table->string('POI');
            $table->string('wanTunel1');
            $table->string('wanVlanRPV');
            $table->string('usuario');
            $table->string('password');
            $table->string('apn');
            $table->string('msidn');
            $table->string('icc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('routervpns');
    }

}
