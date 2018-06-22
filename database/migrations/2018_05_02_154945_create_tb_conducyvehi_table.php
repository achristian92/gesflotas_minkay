<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbConducyvehiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_conducyvehi', function (Blueprint $table) {
            $table->increments('idconducyvehi');
            $table->string('nro_placa','6');
            $table->integer('iddtconductores')->unsigned()->default(1);
            $table->integer('estadoact');
            $table->integer('idusuario')->unsigned();
            $table->timestamps();
            $table->foreign('iddtconductores')->references('iddtconductores')->on('tb_datos_conductores');
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
        Schema::dropIfExists('tb_conducyvehi');
    }
}
