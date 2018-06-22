<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTbHistoricoKilometrajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_historico_kilometraje', function (Blueprint $table) {
            $table->increments('idhistorico_kilometraje');
            $table->string('nro_placa','6');
            $table->integer('kilometraje_recorrido');
            $table->date('fecha_registro');
            $table->integer('estado');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users');
            
            $table->timestamps();

         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tb_historico_kilometraje');
    }
}
