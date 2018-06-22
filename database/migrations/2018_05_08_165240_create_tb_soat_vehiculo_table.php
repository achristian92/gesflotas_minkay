<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSoatVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_soat_vehiculo', function (Blueprint $table) {
            $table->increments('idsoatvehi');
            $table->string('nro_placa','6');
            $table->integer('idprosoat')->unsigned();
            $table->string('nro_poliza');
            $table->double('monto_soat');
            $table->date('fecha_vencimiento_soat');
            $table->string('ruta_imagen_soat')->default('img_soat/default.png');
            $table->integer('estado_soat');
            $table->integer('idusuario')->unsigned();
            $table->timestamps();
            $table->foreign('idprosoat')->references('idprosoat')->on('tb_tipos_proveedor_soat');
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
        Schema::dropIfExists('tb_soat_vehiculo');
    }
}
