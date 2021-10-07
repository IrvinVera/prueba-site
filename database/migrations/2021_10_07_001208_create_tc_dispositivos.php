<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcDispositivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_dispositivos', function (Blueprint $table) {
            $table->increments('id_dispositivo');
            $table->string('s_marca',100);
            $table->string('s_modelo',100);
            $table->string('s_version_sistema_operativo',100);
            $table->string('s_numero_serie',100);
            $table->string('s_mac_address',100);
            $table->text('s_observaciones',100);
            $table->boolean('b_activo',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc_dispositivos');
    }
}
