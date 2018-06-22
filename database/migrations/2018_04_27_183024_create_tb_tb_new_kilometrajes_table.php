<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTbNewKilometrajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_new_kilometrajes', function (Blueprint $table) {
            $table->increments('idnewkilo');
            $table->string('nro_placa','6');
            $table->integer('new_km');
            $table->integer('idusuario')->unsigned();
            $table->timestamps();            
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
        Schema::dropIfExists('tb_tb_new_kilometrajes');
    }
}
