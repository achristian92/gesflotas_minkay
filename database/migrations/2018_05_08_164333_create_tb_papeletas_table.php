<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPapeletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_papeletas', function (Blueprint $table) {
            $table->increments('idpape');
            $table->string('nro_placa','6');
            $table->string('cod_papeleta');
            $table->double('monto_papeleta');
            $table->string('descrip_papeleta');
            $table->integer('estado_pape');
            $table->string('ruta_imagen_papeleta')->default('img_papeletas/default.png');
            $table->integer('idusuario')->unsigned()->default(1);  
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
        Schema::dropIfExists('tb_papeletas');
    }
}
