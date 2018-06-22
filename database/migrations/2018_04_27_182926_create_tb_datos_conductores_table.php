<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDatosConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_datos_conductores', function (Blueprint $table) {
            $table->increments('iddtconductores');       
            $table->string('nombres_apellidos','100');    
            $table->integer('nro_dni')->unique();
            $table->string('codigo_trabajador','20');
            $table->string('nro_serie_casco')->nullable();          
            $table->date('fecha_nacimiento')->nullable();   
            $table->date('fecha_ingreso')->nullable();   
            $table->string('sexo','1');
            $table->integer('idusuario')->unsigned()->default(1)->nullable();
            $table->timestamps();
            // $table->foreign('idusuario')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_datos_conductores');
    }
}
