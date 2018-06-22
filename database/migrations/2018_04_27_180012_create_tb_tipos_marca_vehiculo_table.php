<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTiposMarcaVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipos_marca_vehiculo', function (Blueprint $table) {
            $table->increments('idtipomarca');
            $table->string('nombre_marca');
            $table->integer('idtipovehiculo')->unsigned();
            $table->timestamps();
            $table->foreign('idtipovehiculo')->references('idtipovehiculo')->on('tb_tipos_vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tipos_marca_vehiculo');
    }
}
