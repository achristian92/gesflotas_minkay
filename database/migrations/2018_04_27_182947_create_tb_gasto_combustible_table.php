<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbGastoCombustibleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_gasto_combustible', function (Blueprint $table) {
            $table->increments('idgasto_combustible');
            $table->string('nro_placa','6');
            $table->double('monto_gasto_combustible');
            $table->string('numero_tarjeta','25');
            $table->integer('idproveedor_combustible')->unsigned();
            $table->integer('idusuario')->unsigned()->default(1)->nullable();        
            $table->timestamps();
            $table->foreign('idproveedor_combustible')->references('idproveedor_combustible')->on('tb_tipos_proveedor_combustible');
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
        Schema::dropIfExists('tb_gasto_combustible');
    }
}
