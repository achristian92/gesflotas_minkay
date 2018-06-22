<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAnexosVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anexos_vehiculos', function (Blueprint $table) {
            $table->increments('idanexov');
            $table->string('nro_placa','6');
            $table->string('tipo_doc_anexo');
            $table->string('ruta_imagen_anexo');
            $table->string('observaciones_anexos');
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
        Schema::dropIfExists('tb_anexos_vehiculos');
    }
}
