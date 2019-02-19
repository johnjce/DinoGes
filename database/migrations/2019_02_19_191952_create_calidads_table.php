<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalidadsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('calidads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('PLATA');
            $table->string('ORO');
            $table->string('MM');
            $table->string('BRONCE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('calidads');
    }

}
