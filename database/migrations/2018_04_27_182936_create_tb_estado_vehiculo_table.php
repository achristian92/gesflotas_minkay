<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEstadoVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_estado_vehiculo', function (Blueprint $table) {
            $table->increments('idestadovehi');
            $table->string('nro_placa','6');
            $table->integer('idestado_vehiculo')->unsigned();
            $table->text('descripcion_estadov')->nullable();
            $table->double('gasto_oca_est')->nullable();
            $table->integer('idusuario')->unsigned();
            $table->integer('estadoact_vehi')->nullable();
            $table->timestamps();
            $table->foreign('idestado_vehiculo')->references('idestado_vehiculo')->on('tb_tipos_estados_vehiculos');
            $table->foreign('idusuario')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_estado_vehiculo');
    }
}
