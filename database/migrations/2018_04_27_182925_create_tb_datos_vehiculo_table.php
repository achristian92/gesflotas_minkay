<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDatosVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_datos_vehiculo', function (Blueprint $table) {
            $table->integer('iddatosvehiculo');
            $table->string('nro_placa','6')->unique();      
            $table->integer('idagencia')->unsigned(); 
            $table->integer('iddepartamento_cargo')->unsigned();  
            $table->integer('idcentro_costo')->unsigned();   
            $table->integer('idtipovehiculo')->unsigned();
            $table->integer('anio_fabricacion_vehiculo');
            $table->integer('idtipomodelo')->unsigned();
            $table->integer('anio_modelo_vehiculo');
            $table->string('color','100');
            $table->string('nro_serie_motor','20');
            $table->string('nro_chasis','17');
            $table->integer('idtipo_carroceria')->unsigned();
            $table->smallInteger('fuerza_vehiculo');
            $table->integer('idtipo_combustible')->unsigned();
            $table->string('ruta_imagen');
            $table->string('nombre_imagen');
            $table->integer('idusuario')->unsigned();
            $table->integer('estado');
            $table->timestamps();
            $table->primary(['iddatosvehiculo', 'nro_placa']);  
            $table->foreign('idagencia')->references('idagencia')->on('tb_tipos_agencias');
            $table->foreign('iddepartamento_cargo')->references('iddepartamento_cargo')->on('tb_tipos_departamento_cargos');
            $table->foreign('idcentro_costo')->references('idcentro_costo')->on('tb_tipos_centro_costos');
            $table->foreign('idtipovehiculo')->references('idtipovehiculo')->on('tb_tipos_vehiculos');
            $table->foreign('idtipomodelo')->references('idtipomodelo')->on('tb_tipos_modelo_vehiculos');
            $table->foreign('idtipo_carroceria')->references('idtipo_carroceria')->on('tb_tipos_carrocerias');
            $table->foreign('idtipo_combustible')->references('idtipo_combustible')->on('tb_tipos_combustibles');
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
        Schema::dropIfExists('tb_datos_vehiculo');
    }
}
