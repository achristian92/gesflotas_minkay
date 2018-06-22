<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTiposCarroceriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipos_carrocerias', function (Blueprint $table) {
            $table->increments('idtipo_carroceria');
            $table->string('nombre_carroceria');
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
        Schema::dropIfExists('tb_tipos_carrocerias');
    }
}
