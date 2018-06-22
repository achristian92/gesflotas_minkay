<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTiposModeloVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipos_modelo_vehiculos', function (Blueprint $table) {
            $table->increments('idtipomodelo');
            $table->string('nombre_modelo');
            $table->integer('idtipomarca')->unsigned();
            $table->timestamps();
            $table->foreign('idtipomarca')->references('idtipomarca')->on('tb_tipos_marca_vehiculo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tipos_modelo_vehiculos');
    }
}
