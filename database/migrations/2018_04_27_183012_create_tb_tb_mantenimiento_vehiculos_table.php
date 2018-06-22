<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTbMantenimientoVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mantenimiento_vehiculos', function (Blueprint $table) {
            $table->increments('idmantenimiento_vehiculo');
            $table->string('nro_placa','6');
            $table->integer('idtb_tipos_mantenimiento')->unsigned();
            $table->double('monto_mantenimiento',8,2);
            $table->integer('idproveedor_mantenimiento')->unsigned();
            $table->text('motivo_mantenimiento');
            $table->date('fecha_mantenimiento');
            $table->integer('act_regla_negocio');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idtb_tipos_mantenimiento')->references('idtb_tipos_mantenimiento')->on('tb_tipos_mantenimiento');
            $table->foreign('idproveedor_mantenimiento')->references('idproveedor_mantenimiento')->on('tb_tipos_proveedor_mantenimientos');
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
        Schema::dropIfExists('tb_tb_mantenimiento_vehiculos');
    }
}
