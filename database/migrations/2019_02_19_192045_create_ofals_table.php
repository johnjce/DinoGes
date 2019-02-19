<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ofals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ID SEDE');
            $table->string('CABECERA');
            $table->string('NODO');
            $table->string('CRISTAL');
            $table->string('GD');
            $table->string('MEX');
            $table->string('GA');
            $table->string('MIX');
            $table->string('SLI');
            $table->string('UAI');
            $table->string('PARA T2');
            $table->string('ENTIDAD');
            $table->string('GRUPO_E_ENLACE');
            $table->string('EXTENSIÓN');
            $table->string('RAI');
            $table->string('MóDULO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ofals');
    }

}
