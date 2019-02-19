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
            $table->string('IDSEDE');
            $table->string('NEMONICO');
            $table->string('IP_GESTION');
            $table->string('POI');
            $table->string('Interface_POI');
            $table->string('WAN_SedeMovil');
            $table->string('WAN_TUNEL1');
            $table->string('WAN_RPV1');
            $table->string('USUARIO');
            $table->string('PASSWORD');
            $table->string('APN');
            $table->string('MSIDN');
            $table->string('ICC');
            $table->string('ADMINISTRATIVO');
            $table->string('Módelo_Router');
            $table->string('COMENTARIOS');
            $table->string('Numeración_LOGOS');
            $table->string('ADSL');
            $table->string('BACKUP');
            $table->string('ADMINISTRATIVO');
            $table->string('PE');
            $table->string('IPWANEDC');
            $table->string('INTERFAZ');
            $table->string('EDC');
            $table->string('MODALIDAD');
            $table->string('REDDATOS');
            $table->string('ROUTING');
            $table->string('s_n');
            $table->string('VPI_VCI');
            $table->string('LORCET');
            $table->string('TIPO'); //(DiBA,OFC,ALM,TIEN)
            $table->string('TECNOLOGIA');
            $table->string('HUB');
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
