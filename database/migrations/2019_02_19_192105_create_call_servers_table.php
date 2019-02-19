<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallServersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('call_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ID_SEDE');
            $table->string('NEMóNICO');
            $table->string('IP_LOOPBACK');
            $table->string('IP_TFTP');
            $table->string('IP_Virt_TFTP');
            $table->string('HOSTNAME');
            $table->string('RUTA');
            $table->string('PE_1');
            $table->string('PE_2');
            $table->string('SGC/LOGOS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('call_servers');
    }

}
